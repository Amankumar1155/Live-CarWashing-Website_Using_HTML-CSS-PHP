
<?php

include 'config.php';

$id = $_GET['id'];

$deletequery = "delete from images where id=$id ";

$query = mysqli_query($conn,$deletequery);

if($query){
    ?>
    <script>
        alert('Deleted Successfuly');
        window.location.href='delete.php'
    </script>
    <?php
    //header('location:message.php');
}else{
    ?>
    <script>
        alert('Not Deleted Plese Try again...');
    </script>
    <?php
}

?>