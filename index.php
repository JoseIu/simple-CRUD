<?php require 'db.php'; require 'includes/header.php'; ?>


    <main>
        <div class="container wrapper">
            <section class="form">
                <form class="form__add" action="save_task.php" method="POST">
                    <div class="form__content">
                        <label class="form__label" for="title">Title</label>
                        <input class="form__input" type="text" name="title" id="" placeholder="title" autofocus>
                    </div>
                    <div class="form__content">
                        <label class="form__label" for="description">Description</label>
                        <textarea class="form__input" name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
                    </div>
                    <input class="form__submit" type="submit" name="save_task" value="save">
                </form>
            </section>
    
            <section class="list">
                <table class="list__table">
                    <thead class="list__head">
                        <tr class="list__tr">
                            <th class="list__th">Ttitle</th>
                            <th class="list__th">Description</th>
                            <th class="list__th">Create at</th>
                            <th class="list__th">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="list__body">
                        <?php 
                            $query = "SELECT * FROM task";
                            $resultTasks  = mysqli_query($conection, $query);
                            while($row = mysqli_fetch_array($resultTasks)){
                        ?>

                            <tr class="list__tr">
                                <td class="list__td"> <?php echo $row['title']; ?> </td>
                                <td class="list__td"> <?php echo $row['description']; ?> </td>
                                <td class="list__td"> <?php echo $row['create_at']; ?> </td>
                                <td class="list__td list__td--actions">
                                    <a href="edit_task.php?id=<?php echo $row['id']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="list__edit" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                        </svg>
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row['id']?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="list__delete" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>               
                        <?php }; ?>
                        
                    </tbody>
                </table>
            </section>
        </div>
    </main>


<?php require 'includes/footer.php';?>