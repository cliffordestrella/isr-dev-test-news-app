<?php require 'function.php'; ?>

<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table id="news">
            <tr>
                <!-- <th>ID</th>
                <th>Title</th>
                <th>Image</th>
                <th width="200">Action</th> -->
            </tr>
            <?php
            $news = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC");
            $i = 1;

            foreach($news as $news_app) :
            ?>
            <tr>
                <!-- <td> <?php echo $i++; ?></td> -->
                <td width="200";> <img src="uploads/<?php echo $news_app["image"]; ?> " width="100"></td>
                <td> <?php echo $news_app["title"]; ?></td>
                <td>
                    <a href="editnews.php?id=<?php echo $news_app['id']; ?>">Edit</a>
                    <form action="" method="post">
                        <button type="submit" name="submit" value="<?php echo $news_app['id']; ?>">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <a href="addnews.php">Add News</a>
    </body>
</html>