<?php
include('db.php');

if(isset($_POST['save_task'])){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $querry = "INSERT INTO task(title, description) VALUES ('$title', '$description')";

    $result = mysqli_query($conection, $querry);
    if(!$result){
        die('Querry fail');
    }

    //redireccionamos para que el usuario no puede ver esto
    header('location: index.php');
}
?>