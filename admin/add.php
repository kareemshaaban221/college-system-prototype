<?php 
    include_once "../shared/header.php";
    include_once "shared/header.php";

    if(isset($_SESSION['admin'])){
        include_once "components/add.php";
    }
    else{
        include_once "notFound.php";
    }

    include_once "../shared/footer.php";
?>