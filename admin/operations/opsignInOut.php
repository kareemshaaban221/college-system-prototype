<?php 

    include_once "../../services/DBConnection.php";

    function validate($temp, $email, $pass){
        $query = "SELECT * FROM ".$temp." WHERE email='$email' AND password='$pass';";
        $db = new DBManager('college_system');
        return $db->select($query);
    }

    if(session_id() == '' && $_GET['login'] === "true"){
        session_start();

        if(isset($_POST)){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $entity = "admins";
    
            $data = validate($entity, $email, $pass);
            if(!$data){
                $entity = "instructors";
                $data = validate($entity, $email, $pass);
                if(!$data){
                    $entity = "students";
                    $data = validate($entity, $email, $pass);

                    if(!$data){
                        header("location:/Project/admin/signin.php?invalid=true");
                    }
                }
            }

            if($data){
                // echo var_dump($data);
                $_SESSION['admin'] = $data[0][1];
                if($entity == "admins"){
                    if($data[0][4] == 1){
                        $entity = "students";
                    }
                    else if($data[0][4] == 2){
                        $entity = "instructors";
                    }
                    else if($data[0][4] == 0){
                        $entity = "";
                    }
                }
                $_SESSION['role'] = $entity;
                $_SESSION['id'] = $data[0][0];
                $_SESSION['pass'] = $pass;
                // echo var_dump($_SESSION);
                header("location:/Project/admin/index.php?login=true");
            }
        }
    }
    else if($_GET['login'] === "false"){
        session_unset();
        session_destroy();
        header("location:/Project/admin/index.php?login=false");
    }

    

?>