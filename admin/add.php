<?php 
    include_once "../shared/header.php";
    include_once "shared/header.php";

    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] && isset($_GET['entity'])){
        include_once "components/add.php";
    }
    else{
        include_once "notFound.php";
    }

    include_once "../shared/footer.php";
?>