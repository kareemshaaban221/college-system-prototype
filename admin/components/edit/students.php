<?php 
    $query = "SELECT `name`, `email`, `phone`, `gender`, `grade` FROM students WHERE id=$id;";
    $data = $db->select($query, true)[0];

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $grade = $_POST['grade'];

        $query = "UPDATE students SET name='$name', email='$email', gender='$gender', phone='$phone', grade=$grade WHERE id=$id;";

        if($name != '' && $email != '' && $gender != '' && $phone != '' && $grade != ''){
            if($db->update($query)){
                echo "<div class='alert alert-success'>Student has been updated successfully.</div>";
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

<form method="POST" action="http://localhost/Project/admin/edit.php?login=true&entity=students&id=<?php echo $id ?>" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name" value="<?php echo $data['name']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $data['email']?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPhone">Phone</label>
        <input type="tel" pattern="01[0-2|5]{1}[0-9]{8}" class="form-control bg-transparent" id="exampleInputPhone" aria-describedby="phoneHelp" name="phone" value="<?php echo $data['phone']?>">
    </div>
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
    <div class="form-group">
        <label for="exampleInputGrade">Grade</label>
        <select name="grade" id="exampleInputGrade" class="form-control bg-transparent">
            <option value="1" class="selected">grade one</option>
            <option value="2" class="selected">grade two</option>
            <option value="3" class="selected">grade three</option>
            <option value="4" class="selected">grade four</option>
            <script>
                target = '<?php echo $data['grade'] ?>';
                let allops = document.querySelectorAll('.selected');
                allops.forEach((val)=>{
                    if(val.value == target){
                        val.setAttribute('selected', 'selected');
                    }
                });
            </script>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

<?php else: ?>

<div class="text-center">
    <h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>


<?php endif; ?>