<?php
    include ('db.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM task WHERE id = $id";

        $result = mysqli_query($conection, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
        }
    }

    if(isset($_POST['update_task'])){
        $id = $_GET['id'];
        $titleUpdate = $_POST['title'];
        $descriptionUpdate = $_POST['description'];

        $query = "UPDATE task SET title ='$titleUpdate', description='$descriptionUpdate' WHERE id= $id";

        mysqli_query($conection, $query);

        header('location: index.php');

        // echo $titleUpdate .'<br>';
        // echo $descriptionUpdate .'<br>';
        // echo $id;
    }
?>

<?php require 'includes/header.php'?>

<div class="wrapper">
    <form class="form__add form__add--edit" action="edit_task.php?id=<?php echo $_GET['id'];?>" method="POST">
        <div class="form__content">
            <label class="form__label" for="title">Title</label>
            <input class="form__input" type="text" name="title" value=" <?php echo $title; ?>" placeholder="Update title" autofocus>
        </div>
        <div class="form__content">
            <label class="form__label" for="description">Description</label>
            <textarea class="form__input" name="description" cols="30" rows="10" placeholder="description"><?php echo $description?></textarea>
        </div>
        <input class="form__submit" type="submit" name="update_task" value="update">
    </form>
</div>

<?php require 'includes/footer.php'?>

