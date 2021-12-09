<?php 

    $query = "SELECT courses.`name`, courses.`grade`, courses.`price`, instructors.`name` AS ins_name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.id=$id;";
    $data = $db->select($query, true);

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $price = $_POST['price'];
        $ins = $_POST['ins'];
        $pass = $_POST['pass'];

        $invalidPass = ($pass != $_SESSION['pass']);

        if(!$invalidPass){
            $query = "UPDATE courses SET name='$name', grade='$grade', price=$price, instructor_id=$ins WHERE id=$id";

            if($name != '' && $grade != '' && $price != '' && $ins != ''){
                if($db->update($query)){
                    echo "<div class='alert alert-success'>Course has been updated successfully.</div>";
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

<?php if($_SESSION['role'] == "admins" || $_SESSION['role'] == "instructors"): ?>

<form method="POST" action="http://localhost/Project/admin/edit.php?entity=courses&id=<?php echo $id ?>" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name" value="<?php echo $data[0]['name'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputGrade">Grade</label>
        <select name="grade" id="exampleInputGrade" class="form-control bg-transparent">
            <option value="1" class="selected">grade one</option>
            <option value="2" class="selected">grade two</option>
            <option value="3" class="selected">grade three</option>
            <option value="4" class="selected">grade four</option>
            <script>
                let target = <?php echo $data[0]['grade'] ?>;
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
        <label for="exampleInputPrice">Price</label>
        <input type="number" step="any" class="form-control bg-transparent" id="exampleInputPrice" aria-describedby="emailHelp" name="price" value="<?php echo $data[0]['price'] ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputIns">Instructor</label>
        <select name="ins" id="exampleInputIns" class="form-control bg-transparent">
            <?php 

                if($_SESSION['role'] == 'instructors'){
                    $query = "SELECT id,name FROM instructors WHERE id={$_SESSION['id']}";
                }
                else{
                    $query = "SELECT id,name FROM instructors";
                }

                $instructors = $db->select($query);

                foreach($instructors as $row){
            ?>
                <option value="<?php echo $row[0] ?>" 
                
                    <?php if($row[1] == $data[0]['ins_name']) echo "selected"; ?>
                
                >
                    <?php echo $row[1] ?>
                </option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPass">Password</label>
        <input type="password" class="form-control bg-transparent" id="exampleInputPass" aria-describedby="emailHelp" placeholder="Enter Your Password Please" name="pass">
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
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/">Back Home</a>
</div>


<?php endif; ?>