<?php 

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $price = $_POST['price'];
        $ins = $_POST['ins'];

        $db = new DBManager("college_system");
        $query = "INSERT INTO courses(`name`, `grade`, `price`, `instructor_id`) VALUES('$name', '$grade', $price, $ins);";

        if($name != '' && $grade != '' && $price != '' && $ins != ''){
            if($db->insert($query)){
                echo "<div class='alert alert-success'>Course has been inserted successfully.</div>";
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

<?php if($_SESSION['role'] == "admins" || $_SESSION['role'] == "instructors"): ?>

<form method="POST" action="http://localhost/Project/admin/add.php?entity=courses" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputGrade">Grade</label>
        <select name="grade" id="exampleInputGrade" class="form-control bg-transparent">
            <option value="1">grade one</option>
            <option value="2">grade two</option>
            <option value="3">grade three</option>
            <option value="4">grade four</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPrice">Price</label>
        <input type="number" step="any" class="form-control bg-transparent" id="exampleInputPrice" aria-describedby="emailHelp" name="price">
    </div>
    <div class="form-group">
        <label for="exampleInputIns">Instructor</label>
        <select name="ins" id="exampleInputIns" class="form-control bg-transparent">
            <?php 
            
                $db = new DBManager("college_system");
                if($_SESSION['role'] == 'instructors'){
                    $query = "SELECT id,name FROM instructors WHERE id={$_SESSION['id']}";
                }
                else{
                    $query = "SELECT id,name FROM instructors";
                }
                echo $_SESSION['id'];

                $data = $db->select($query);

                foreach($data as $row){
            ?>
                <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
            <?php } ?>
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