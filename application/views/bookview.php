<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<style>
        body{
            background: #000;
            color: white;

        }
        input{
            width: 100%;
        }
       
        h1{
            text-align: center;
            text-transform: uppercase;
            margin: 0 0 40px;

        }
        table{
            border: 1px solid #fff;
            margin: 0 0 30px;
        }
        th, tr{
            border: 1px solid #fff;
        }
        .addbtn{
            width: 100%;
            color:white;
            background: red;
            border-style: none;
        }
        </style>

    <section>
        <div class="container">
            <div class="row">
            <h1>books</h1>
    <table border="2">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>author</th>
                <th>description</th>
                <th>publication_date</th>
                <th>book</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // print_r($data);
              foreach($data as $val){
            ?>
            <tr>
            <td><?php  echo $val->id;?></td>              
            <td><?php  echo $val->title;?></td>              
            <td><?php  echo $val->author;?></td>              
            <td><?php  echo $val->description;?></td>
            <td><?php  echo $val->publication_date;?></td>
            <td> <img style="width: 400px;height: 250px;"  src="<?php echo base_url(); ?>uploads/<?php echo $val->file ?>"><br><br>
</td>
            <?php $value=$val->id;
             ?>
            <td><a href="<?php echo base_url();?>index.php/regcontroller/upbooks/<?php echo $value; ?>"><i class="fa fa-edit"></i>edit</a></td>
            <td><a href="<?php echo base_url();?>index.php/regcontroller/delbooks/<?php echo $value; ?>" onclick="return confirm('Are you sure you want to Remove?');"><i class="fa fa-trash"></i>delete</a></td>
            </tr>
            <?php
            }
               ?>
            
        </tbody>
    </table>

    <a href="<?php echo base_url();?>index.php/regcontroller/addbooks"><button class="addbtn">add books</button><a>


            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
</body>
</html>