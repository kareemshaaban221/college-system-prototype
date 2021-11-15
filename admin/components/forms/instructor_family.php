<?php 

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $typeOfRel = $_POST['typeOfRel'];
        $insID = $_SESSION['id'];

        $db = new DBManager("college_system");
        $query = "INSERT INTO instructor_family(`name`, `gender`, `type_of_rel`, `instructor_id`) VALUES('$name', '$gender', '$typeOfRel', $insID);";

        if($name != '' && $gender != '' && $typeOfRel != ''){
            if($db->insert($query)){
                echo "<div class='alert alert-success'>Family member has been inserted successfully.</div>";
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

<?php if($_SESSION['role'] == "instructors"): ?>

<form method="POST" action="http://localhost/Project/admin/add.php?login=true&entity=instructor_family" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name">
    </div>
    <div class="form-group">
        <label>Gender</label>
        <div class="form-control bg-transparent">
            <input type="radio" name="gender" checked value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female" class="ml-3">
            <label for="female">Female</label>
        </div>
    </div>
    <div class="form-group">
        <label for="typeOfRelation">Type of relation</label>
        <select class="form-control bg-transparent" id="typeOfRelation" name="typeOfRel">
            <option value="wife">Wife</option>
            <option value="son">Son</option>
            <option value="daughter">Daughter</option>
            <option value="mother">Mother</option>
            <option value="father">Father</option>
            <option value="sister">Sister</option>
            <option value="brother">Brother</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

<?php else: ?>

<div class="text-center">
<h4 class="font-weight-bolder text-light bg-danger p-sm-3 p-1 rounded wow pulse">Not Authorized</h4>
    <a class="btn btn-primary wow fadeInUp" href="/Project/admin/index.php?login=true">Back Home</a>
</div>


<?php endif; ?>