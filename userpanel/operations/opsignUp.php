<?php

    include_once "../../services/DBConnection.php";

    $data = $_POST;

    if(isset($data['name'])){
        $query = "INSERT INTO users(`name`, `email`, `password`) VALUES('{$data["name"]}', '{$data["email"]}', '{$data["pass"]}');";

        $db = new DBManager('college_system');
        $db->insert($query);

        header("Location:/Project/userpanel/signin.php");
    }

?>