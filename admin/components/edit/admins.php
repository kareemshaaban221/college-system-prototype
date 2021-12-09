<?php 

    $query = "SELECT `name`, `email`, `password`, `role` FROM $entity WHERE id=$id;";
    $data = $db->select($query);

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $oldPass = $_POST['oldPass'];
        $newPass = $_POST['newPass'];
        $confirmPass = $_POST['confirmPass'];
        $role = $_POST['role'];

        $realPass = $data[0][2];
        $invalidPass = !($realPass == $oldPass);
        $invalidConfirm = !($newPass == $confirmPass);
        if(!$invalidPass && !$invalidConfirm){
            $query = "UPDATE admins SET name='$name', email='$email', password='$newPass', role=$role where id=$id;";

            if($name != '' && $email != '' && $newPass != '' && $role != ''){
                if($db->update($query)){
                    echo "<div class='alert alert-success'>Admin has been updated successfully.</div>";
                }
                else{
                    echo "<div class='alert alert-danger'>Updating is invalid.</div>";
                }
            }
            else{
                echo "<div class='alert alert-danger'>Updating is invalid. There are null values!</div>";
            }
        }

    }

?>

<?php if($_SESSION['role'] == "admins"): ?>

<form method="POST" action="http://localhost/Project/admin/edit.php?entity=admins&id=<?php echo $id ?>" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name" value="<?php echo $data[0][0] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $data[0][1] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Old password</label>
        <input type="password" placeholder="Old Password" class="form-control bg-transparent" id="exampleInputPassword1" name="oldPass">
        <?php 
        
            if(isset($invalidPass) && $invalidPass){
                echo "<div class='alert alert-danger mt-3'>Wrong password!</div>";
            } 
        
        ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword2">New password</label>
        <input type="password" placeholder="New Password" class="form-control bg-transparent" id="exampleInputPassword2" name="newPass">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword3">Confirm password</label>
        <input type="password" placeholder="Confirm Password" class="form-control bg-transparent" id="exampleInputPassword3" name="confirmPass">
        <?php 
        
            if(isset($invalidConfirm) && $invalidConfirm){
                echo "<div class='alert alert-danger mt-3'>Passwords must be identical!</div>";
            }
        
        ?>
    </div>
    <div class="form-group">
        <label for="exampleInputRole">Role</label>
        <select name="role" id="exampleInputRole" class="form-control bg-transparent">
            
            <option value="0" class="selected">0</option>
            <option value="1" class="selected">1</option>
            <option value="2" class="selected">2</option>
            <option value="3" class="selected">3</option>

            <script>
                let role = <?php echo $data[0][3] ?>;
                let ops = document.querySelectorAll('.selected');
                ops.forEach((val)=>{
                    if(val.innerHTML == role){
                        val.setAttribute('selected', 'selected');
                    }
                })
            </script>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php else: ?>

<div class="text-center">
    <h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/">Back Home</a>
</div>


<?php endif; ?>