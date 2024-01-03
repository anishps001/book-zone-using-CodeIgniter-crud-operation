<?php
class regcontroller extends CI_Controller {
	function __construct() {
        parent::__construct();
         $this->load->model('regmodel');
    }
     function index()
	{
		$this->load->view('userreg');
	}

    function adduser(){
        $data['username']=$_POST['username'];
        $data['email']=$_POST['email'];
        $data['password']=$_POST['password'];
    
               $query=$this->regmodel->addusers($data);
                if($query)
                {
                    redirect('regcontroller/login');
                }
        
}
function login()
{
    $this->load->view('login');
}


function process_login() {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->regmodel->get_user_by_email($email);
    $pass = $this->regmodel->get_user_by_pass($password);
    if (!empty($user) && !empty($pass)) {
        redirect('regcontroller/bookview'); 
    } else {
        redirect('regcontroller/login');
    }
}
function bookview()
{
    $query['data']=$this->regmodel->mbookviews();
   
    if($query){
        $this->load->view('bookview',$query);  
    } else{
        $this->load->view('bookview');

    }
   
}

function addbooks(){

    if(!empty($_POST))
    {
        $data['title']=$_POST['title'];
        $data['author']=$_POST['author'];
        $data['description']=$_POST['description'];
        $data['publication_date']=$_POST['publication_date'];
        $config['upload_path'] = 'uploads/';
$config['allowed_types']='gif|jpg|png';
$this->load->library('upload',$config);
if(!$this->upload->do_upload('file'))
{
$error=array('error'=>$this->upload->display_errors());

}
else{
$data1=array('upload_data'=>$this->upload->data());
  $data['file']=$data1['upload_data']['file_name'];  
  
}    
               $query=$this->regmodel->maddbooks($data);
                if($query)
                {
                    redirect('regcontroller/bookview');
                }
        

    }
               
    $this->load->view('addbooks');



}

  
    function upbooks()
    {
        $value = $this->uri->segment(3);
        $query['data']=$this->regmodel->mupbooks($value);
        if($query)
            {
                $this->load->view('upbooks',$query);
            }
    }

    function updatebooks()
    {
      $data['title']=$_POST['title'];
      $data['author']=$_POST['author'];
      $data['description']=$_POST['description'];
      $data['publication_date']=$_POST['publication_date'];
      $config['upload_path'] = 'uploads/';
       $config['allowed_types']='gif|jpg|png';
       $this->load->library('upload',$config);
       if(!$this->upload->do_upload('file'))
       {
        $error=array('error'=>$this->upload->display_errors());
        
       }
       else{
        $data1=array('upload_data'=>$this->upload->data());
          $data['file']=$data1['upload_data']['file_name'];  
          
       } 
      $id=$_POST['id'];
     $query=$this->regmodel->updatebooks($data,$id);
         if($query)
         {
             redirect('regcontroller/bookview');
         }
                    
    }

    function delbooks()
    {
        $value = $this->uri->segment(3);
        $query=$this->regmodel->mdeletebook($value);
        if($query)
            {
                redirect('regcontroller/bookview');
            }
    }

	}

?>