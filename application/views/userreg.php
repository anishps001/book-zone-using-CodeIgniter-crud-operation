<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
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
        .img1{
            width: 100%;
        
        }
        h1{
            text-align: center;
            text-transform: uppercase;
            margin: 0 0 40px;

        }
        </style>
<section>
    <div class="container">
        <h1>welcome to books zone</h1>
        <div class="row justify-content-center">
            <div class="col-lg-6">
            <img src="<?php echo base_url('uploads/images/im1.jpg'); ?>"  class="img1">
                 </div>
            <div class="col-lg-6">   
                 
                <form action="<?php echo base_url();?>index.php/regcontroller/adduser" method="post" enctype="multipart/form-data" class="text-center">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Register" class="btn btn-primary">
            </form>
        </div>
        
        </div>
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>