<?php 
    include_once "../shared/header.php";
    include_once "shared/header.php";

    if(isset($_GET['id']) && isset($_SESSION['admin'])){
        include_once "components/edit.php";
    }
    else{
        include_once "notFound.php";
    }

    include_once "../shared/footer.php";
?>