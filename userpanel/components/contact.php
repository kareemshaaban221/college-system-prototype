<div class="mt-3">lol</div>

<?php 

    if(isset($_POST['name'])){

        $db = new DBManager("college_system");
        $query = "SELECT id FROM users WHERE email='{$_POST['email']}';";

        if($_POST['name'] && $_POST['email'] && $_POST['msg']){
            $data = $db->select($query)[0][0];
            $query = "INSERT INTO user_message(`username`, `user_id`, `text`) VALUES('{$_POST['name']}', {intval($data)}, '{$_POST['msg']}');";
            if($db->insert($query)){
                echo "<div class='alert alert-success text-center mt-5'>Your message has been sent successfully.</div>";
            }
            else{
                echo "<div class='alert alert-danger text-center mt-5'>Invalid send operation! Please try again later.</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger text-center mt-5'>Invalid send operation! Please try again later.</div>";
        }

    }

?>


<form method="POST" class="container mt-5 p-5 border border-dark rounded mb-5">
    <div class="form-group">
        <label for="username" class="text-secondary">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" name="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="text-secondary">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1" class="text-secondary">Your message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="msg"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>