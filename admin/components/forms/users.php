<?php 

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $db = new DBManager("college_system");
        $query = "INSERT INTO users(`name`, `email`, `password`) VALUES('$name', '$email', '$pass');";

        if($name != '' && $email != '' && $pass != ''){
            if($db->insert($query)){
                echo "<div class='alert alert-success'>User has been inserted successfully.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Insertion is invalid.</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger'>Insertion is invalid.</div>";
        }
        
    }

?>


<?php if($_SESSION['role'] == "admins" || $_SESSION['role'] == "instructors" || $_SESSION['role'] == "students"): ?>

<form method="POST" action="http://localhost/Project/admin/add.php?entity=users" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control bg-transparent" id="exampleInputPassword1" name="pass">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

<?php else: ?>

<div class="text-center">
<h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/">Back Home</a>
</div>


<?php endif; ?>