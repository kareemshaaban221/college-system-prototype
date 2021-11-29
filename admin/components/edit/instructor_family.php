<?php 
    $query = "SELECT `name`, `gender`, `type_of_rel` FROM instructor_family WHERE id=$id;";
    $data = $db->select($query, true);

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $typeOfRel = $_POST['typeOfRel'];
        // $insID = $_SESSION['id'];
        $pass = $_POST['pass'];

        $invalidPass = ($pass != $_SESSION['pass']);

        if(!$invalidPass){
            $query = "UPDATE instructor_family SET name='$name', gender='$gender', type_of_rel='$typeOfRel' WHERE id=$id;";

            if($name != '' && $gender != '' && $typeOfRel != ''){
                if($db->update($query)){
                    echo "<div class='alert alert-success'>Family member's data has been updated successfully.</div>";
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

<?php if($_SESSION['role'] == "instructors"): ?>

<form method="POST" action="/Project/admin/edit.php?login=true&entity=instructor_family&id=<?php echo $id ?>" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name" value="<?php echo $data[0]['name'] ?>">
    </div>
    <div class="form-group">
        <label>Gender</label>
        <div class="form-control bg-transparent">
            <input type="radio" name="gender" class="selected" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" class="selected" value="female" id="female" class="ml-3">
            <label for="female">Female</label>
            <script>
                let target = <?php echo $data[0]['gender'] ?>;
                target.setAttribute('checked', 'checked');
            </script>
        </div>
    </div>
    <div class="form-group">
        <label for="typeOfRelation">Type of relation</label>
        <select class="form-control bg-transparent" id="typeOfRelation" name="typeOfRel">
            <option class="selected" value="wife">Wife</option>
            <option class="selected" value="son">Son</option>
            <option class="selected" value="daughter">Daughter</option>
            <option class="selected" value="mother">Mother</option>
            <option class="selected" value="father">Father</option>
            <option class="selected" value="sister">Sister</option>
            <option class="selected" value="brother">Brother</option>
            <script>
                target = '<?php echo $data[0]['type_of_rel'] ?>';
                let allops = document.querySelectorAll('.selected');
                allops.forEach((val)=>{
                    if(val.value == target){
                        val.setAttribute('selected', 'selected');
                    }
                });
            </script>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPass">Password</label>
        <input type="password" class="form-control bg-transparent" id="exampleInputPass" aria-describedby="emailHelp" name="pass" placeholder="Enter Your Password">
        <?php
        
            if(isset($invalidPass) && $invalidPass){
                echo "<div class='alert alert-danger mt-3'>Wrong password!</div>";
            }
        
        ?>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php else: ?>

<div class="text-center">
<h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>


<?php endif; ?>