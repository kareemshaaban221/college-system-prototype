<?php

    include_once "../shared/header.php";
    include_once "shared/header.php";

    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']){
        include_once "components/profile.php";
    }
    else{
        include_once "notFound.php";
    }

    include_once "../shared/footer.php";

?>
