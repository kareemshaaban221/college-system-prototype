<?php 
    $query = "SELECT `name`, `email` FROM users WHERE id=$id;";
    $data = $db->select($query, true)[0];

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $db = new DBManager("college_system");
        $query = "UPDATE users SET name='$name', email='$email' WHERE id=$id;";

        if($name != '' && $email != ''){
            if($db->update($query)){
                echo "<div class='alert alert-success'>User has been updated successfully.</div>";
            }
            else{
                echo "<div class='alert alert-danger'>Updating is invalid.</div>";
            }
        }
        else{
            echo "<div class='alert alert-danger'>Updating is invalid. There are null values!</div>";
        }
        
    }

?>


<?php if($_SESSION['role'] == "admins"): ?>

<form method="POST" action="http://localhost/Project/admin/edit.php?login=true&entity=users&id=<?php echo $id ?>" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name" value="<?php echo $data['name']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $data['email']?>">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php else: ?>

<div class="text-center">
<h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>


<?php endif; ?>