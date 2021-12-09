<?php 

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];

        $db = new DBManager("college_system");
        $query = "INSERT INTO admins(`name`, `email`, `password`, `role`) VALUES('$name', '$email', '$pass', $role);";

        if($name != '' && $email != '' && $pass != '' && $role != ''){
            if($db->insert($query)){
                echo "<div class='alert alert-success'>Admin has been inserted successfully.</div>";
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

<?php if($_SESSION['role'] == "admins"): ?>

<form method="POST" action="http://localhost/Project/admin/add.php?entity=admins" class="wow fadeInUp">
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
    <div class="form-group">
        <label for="exampleInputRole">Role</label>
        <select name="role" id="exampleInputRole" class="form-control bg-transparent">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

<?php else: ?>

<div class="text-center">
    <h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/">Back Home</a>
</div>


<?php endif; ?>