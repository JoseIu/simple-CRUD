<?php 
    include ('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task  WHERE id= $id";
        
        $result = mysqli_query($conection, $query);

        if(!$result){
            die('Querry failed');
        }

        header('location: index.php');
    }
?>