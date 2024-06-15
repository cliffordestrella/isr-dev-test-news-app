<?php

$conn = mysqli_connect("localhost", "root", "", "news_app_isr");

if(isset($_POST["submit"])){
    if($_POST["submit"] == "add"){
        add();
    }
    else if($_POST["submit"] == "edit"){
        edit();
    }
    else{
        delete();
    }
}

function add(){
    global $conn;

    $title = $_POST["title"];
    $fileName = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];

    $newfilename = uniqid() . "-" . $fileName;

    move_uploaded_file($tmpName, 'uploads/' .$newfilename);
    $query = "INSERT INTO news VALUES('', '$title', '$newfilename')";
    mysqli_query($conn, $query);

    echo
    "
    <script> alert('News Added Successfully'); document.location.href = 'index.php'; </script>
    ";
}

function edit(){
    global $conn;

    $id = $_GET["id"];
    $title = $_POST["title"];

    if($_FILES["file"]["error"] != 4){
        $fileName = $_FILES["file"]["name"];
        $tmpName = $_FILES["file"]["tmp_name"];

        $newfilename = uniqid() . "-" . $fileName;

        move_uploaded_file($tmpName, 'uploads/' .$newfilename);
        $query = "UPDATE news SET image = '$newfilename' WHERE id = $id";
        mysqli_query($conn, $query);
    }

    $query = "UPDATE news SET title = '$title' WHERE id = $id";
    mysqli_query($conn, $query);
    echo
    "
    <script> alert('News Edited Successfully'); document.location.href = 'index.php'; </script>
    ";
}


function delete(){
    global $conn;

    $id = $_POST["submit"];

    $query = "DELETE FROM news WHERE id = $id";
    mysqli_query($conn, $query);

    echo 
    "
    <script> alert('News Deleted Successfully');</script>
    ";
}



?>