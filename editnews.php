<?php 
require 'function.php';
$id = $_GET["id"];
$news_app = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM news WHERE id = $id"));
?>

<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form class="" action="" method="post" enctype="multipart/form-data">
         Title
         <input type="text" name="title" value="<?php echo $news_app['title']; ?>" required> <br>
         Image
         <input type="file" name="file" required> <br>
         <button type="submit" name="submit" value="edit">Edit</button>   
        </form>
        <br>
        <!-- <a href="index.php">Index page</a> -->
    </body>
</html>