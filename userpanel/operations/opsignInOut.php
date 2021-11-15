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
                header("location:/Project/userpanel/index.php?login=true");
            }
        }
    }
    else if($_GET['login'] === "false"){
        session_unset();
        session_destroy();
        header("location:/Project/userpanel/index.php?login=false");
    }

    

?>