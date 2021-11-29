<?php 
    $query = "SELECT `name`, `email`, `password`, `phone`, `gender` FROM instructors WHERE id=$id;";
    $data = $db->select($query, true)[0];

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        if($_SESSION['role'] == "instructors"){
            $oldPass = $_POST['oldPass'];
            $newPass = $_POST['newPass'];
            $confirmPass = $_POST['confirmPass'];

            $realPass = $data['password'];

            $invalidPass = ($realPass != $oldPass);
            $invalidConfirm = ($newPass != $confirmPass);

            if(!$invalidPass && !$invalidConfirm){
                $query = "UPDATE instructors SET name='$name', email='$email', password='$newPass', gender='$gender', phone='$phone' WHERE id=$id;";

                if($name != '' && $email != '' && $oldPass != '' && $newPass != '' && $confirmPass != '' && $gender != '' && $phone != ''){
                    if($db->insert($query)){
                        echo "<div class='alert alert-success'>Instructor has been updated successfully.</div>";
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
        else if($_SESSION['role'] == 'admins'){
            $query = "UPDATE instructors SET name='$name', email='$email', gender='$gender', phone='$phone' WHERE id=$id;";

            if($name != '' && $email != '' && $gender != '' && $phone != ''){
                if($db->insert($query)){
                    echo "<div class='alert alert-success'>Instructor has been updated successfully.</div>";
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

<?php if($_SESSION['role'] == "instructors" || $_SESSION['role'] == "admins"): ?>

<form method="POST" action="/Project/admin/edit.php?login=true&entity=instructors&id=<?php echo $id ?>" class="wow fadeInUp">
    <!-- name input --------------------------------->
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name" value="<?php echo $data['name']?>">
    </div>
    <!-- email input --------------------------------->
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $data['email']?>">
    </div>
    <!-- phone input --------------------------------->
    <div class="form-group">
        <label for="exampleInputPhone">Phone</label>
        <input type="tel" pattern="01[0-2|5]{1}[0-9]{8}" class="form-control bg-transparent" id="exampleInputPhone" aria-describedby="phoneHelp" name="phone" value="<?php echo $data['phone']?>">
    </div>
    <!-- gender input --------------------------------->
    <div class="form-group">
        <label>Gender</label>
        <div class="form-control bg-transparent">
            <input type="radio" name="gender" checked value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female" class="ml-3">
            <label for="female">Female</label>
            <script>
                let target = <?php echo $data['gender'] ?>;
                target.setAttribute('checked', 'checked');
            </script>
        </div>
    </div>

    <?php if($_SESSION['role'] == "instructors"): ?>
        <!-- oldpass input --------------------------------->
        <div class="form-group">
            <label for="exampleInputPassword1">Old password</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword1" name="oldPass">
        </div>
        <?php
        
            if(isset($invalidPass) && $invalidPass){
                echo "<div class='alert alert-danger mt-3'>Wrong password!</div>";
            }
        
        ?>
        <!-- newpass input --------------------------------->
        <div class="form-group">
            <label for="exampleInputPassword2">New password</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword2" name="newPass">
        </div>
        <!-- confirm input --------------------------------->
        <div class="form-group">
            <label for="exampleInputPassword3">Confirm password</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword3" name="confirmPass">
        </div>
        <?php
        
            if(isset($invalidConfirm) && $invalidConfirm){
                echo "<div class='alert alert-danger mt-3'>Passwords must be identical!</div>";
            }
        
        ?>
    <?php endif; ?>
    
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php else: ?>

<div class="text-center">
<h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>


<?php endif; ?>