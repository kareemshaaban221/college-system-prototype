<?php 
    include "../../services/DBConnection.php";

    session_start();

    if(isset($_GET['login']) && $_SESSION['role'] == "admins"){
        $entity = $_GET['entity'];
        $id = $_GET['id'];

        $db = new DBManager("college_system");

        $query = "DELETE FROM `$entity` where id=$id;";

        if($db->delete($query)){
            header("location: /Project/admin/list.php?login=true&entity=$entity");
        }
        else{
            if($entity == "instructors"){
                $db->delete("DELETE FROM `courses` WHERE `courses`.`instructor_id`=$id;");
                $db->delete("DELETE FROM `instructor_family` WHERE `instructor_family`.`instructor_id`=$id;");
                $db->delete($query);
            }
            else{
                echo "Invalid Query";
            }
        }
    }
?>