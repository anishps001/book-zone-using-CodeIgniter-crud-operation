<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
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

<body>
    <section>
        <div class="container">
            <h1>add your book</h1>
            <div class="row">
            <form action="<?php echo base_url();?>index.php/regcontroller/addbooks" method="post" enctype="multipart/form-data">
        <label for="title">title:</label>
        <input type="text" id="title" name="title" required><br><br>

        <label for="author">author:</label>
        <input type="text" id="author" name="author" required><br><br>

        <label for="description">description:</label>
        <input type="text" id="description" name="description" required><br><br>

        <label for="publication_date">publication_date</label>
        <input type="text" id="publication_date" name="publication_date" required><br><br>

        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file" required><br><br>

        <input type="submit" value="add" class="addbtn">
    </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>