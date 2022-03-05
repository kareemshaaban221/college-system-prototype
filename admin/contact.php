<?php 
    include_once "../shared/header.php";
    include_once "shared/header.php";

    if(isset($_SESSION['role']) && $_SESSION['role'] == "admins"){
        include_once "components/contact.php";
    }
    else{
        include_once "notFound.php";
    }

    include_once "../shared/footer.php";
?>