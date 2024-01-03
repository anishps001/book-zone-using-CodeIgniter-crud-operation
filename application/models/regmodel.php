<?php 
class regmodel extends CI_Model{
    function addusers($data)
    {
        return $this->db->insert('userform',$data);
    }

    function get_user_by_email($email) {
        $query = $this->db->get_where('userform', array('email' => $email));
        return $query->row_array();
    }


function get_user_by_pass($password) {
        $query = $this->db->get_where('userform', array('password' => $password));
        return $query->row_array();
    }



function maddbooks($data)
    {
        return $this->db->insert('books',$data);
    }




    function mbookviews()
     {
         
         $query=$this->db->get('books');
         return $query->result();   
     }


     
     function mdeletebook($id)
     {
        $this->db->where('id', $id);
        return $this->db->delete('books');
           
     }
     function mupbooks($id)
     {
         $arr=array('id'=>$id);
         $query=$this->db->get_where('books',$arr);
         return $query->result();   
     }
     
     function updatebooks($data,$id)
     {
        $this->db->where('id',$id); 
        return $this->db->update('books',$data);
     }
}