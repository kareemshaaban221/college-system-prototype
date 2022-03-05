<?php 

    include_once "../../services/DBConnection.php";

    function validate($temp, $email, $pass, $db){
        $query = "SELECT * FROM ".$temp." WHERE email='$email' AND password='$pass';";
        return $db->select($query);
    }

    if(session_id() == '' && $_GET['login'] === "true"){
        session_start();

        if(isset($_POST)){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $entity = "admins";
            
            $db = new DBManager('college_system');
            $data = validate($entity, $email, $pass, $db);
            if(!$data){
                $entity = "instructors";
                $data = validate($entity, $email, $pass, $db);
                if(!$data){
                    $entity = "students";
                    $data = validate($entity, $email, $pass, $db);

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
                $_SESSION['adminLogin'] = true;
                if(isset($_SESSION['login'])){
                    $_SESSION['login'] = false;
                }
                header("location:/Project/admin/");
            }
        }
    }
    else if($_GET['login'] === "false"){
        $_SESSION['adminLogin'] = false;
        session_unset();
        header("location:/Project/admin/index.php?login=false");
    }

    

?>