<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo base_url();?>index.php/regcontroller/updateemployee" method="post" enctype="multipart/form-data">
<?php
            foreach ($data as $val)
            {
                ?>
        <input type="hidden" id="id" name="id" value="<?php  echo $val->id;?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php  echo $val->username;?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php  echo $val->email;?>" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php  echo $val->password;?>" required><br><br>

        <label for="place">place</label>
        <input type="place" id="place" name="place"  value="<?php  echo $val->place;?>" required><br><br>

        <img style="width: 400px;height: 250px;"  src="<?php echo base_url(); ?>uploads/<?php echo $val->file ?>"><br><br>

        <label for="file">Choose a file:</label>
        <input type="file" name="file" id="file" required><br><br>

        <input type="submit" value="Register">
            <?php }?>
    </form>
</body>
</html>