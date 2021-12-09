<?php 

    include_once "../../services/DBConnection.php";

    if(session_id() == '' && $_GET['login'] === "true"){
        session_start();

        if(isset($_POST)){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
    
            $query = "SELECT * FROM users WHERE email='$email' AND password='$pass';";
            $db = new DBManager('college_system');
            $data = $db->select($query);
            if(!$data){
                header("location:/Project/userpanel/signin.php?invalid=true");
            }
            else{
                // echo var_dump($data);
                $_SESSION['user'] = $data[0][1];
                // echo var_dump($_SESSION);
                $_SESSION['login'] = true;
                header("location:/Project/userpanel/");
            }
        }
    }
    else if($_GET['login'] === "false"){
        $_SESSION['login'] = false;
        session_unset();
        header("location:/Project/userpanel/index.php?login=false");
    }

    

?>