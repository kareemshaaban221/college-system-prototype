<?php 
    include "../../services/DBConnection.php";

    session_start();

    if(isset($_GET['login'])){
        $entity = $_GET['entity'];
        $id = $_GET['id'];

        $db = new DBManager("college_system");

        $query = "DELETE FROM `$entity` where id id=$id;";

        if($db->delete($query)){
            header("location: /Project/admin/list.php?login=true&entity=$entity");
        }
        else{
            if($entity == "instructors"){
                $db->delete("DELETE FROM `courses` WHERE `courses`.`instructor_id`=$id;");
                $db->delete("DELETE FROM `instructor_family` WHERE `instructor_family`.`instructor_id`=$id;");
                $db->delete($query);
                header("location: /Project/admin/list.php?login=true&entity=$entity");
            }
            elseif($entity == "users"){
                $db->delete("DELETE FROM `user_message` WHERE `user_id`=$id;");
                $db->delete($query);
                header("location: /Project/admin/list.php?login=true&entity=$entity");
            }
            else{
                echo "<link rel='stylesheet' href='/Project/assets/css/bootstrap.min.css'>";
                echo "<style> body{background: black;} </style>";
                echo "<div class='alert alert-danger text-center d-block font-weight-bold'>Invalid Query</div>";
            }
        }
    }
?>