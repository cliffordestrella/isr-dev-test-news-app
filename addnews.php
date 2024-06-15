<?php require 'function.php'; ?>

<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form class="" action="" method="post" enctype="multipart/form-data">
        <label for="">Title</label> 
         <input type="text" name="title" required> <br>
         <!-- Description
         <input type="text" name="description" required> <br> -->
         <label for="">Image</label> 
         <input type="file" name="file" required> <br>
         <button type="submit" name="submit" value="add">Add</button>   
        </form>
    </body>
</html>
