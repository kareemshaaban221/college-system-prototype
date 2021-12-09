<?php 


    if(isset($_POST['op'])){

        $op = $_POST['op'];
        $entity = $_POST['entity'];

        header("location: /Project/admin/$op.php?entity=$entity");
    }


?>