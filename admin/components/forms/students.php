<?php 

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $grade = $_POST['grade'];

        $db = new DBManager("college_system");
        $query = "INSERT INTO students(`name`, `email`, `password`, `gender`, `phone`, `grade`) VALUES('$name', '$email', '$pass', '$gender', '$phone', $grade);";

        if($name != '' && $email != '' && $pass != '' && $gender != '' && $phone != '' && $grade != ''){
            if($db->insert($query)){
                echo "<div class='alert alert-success'>Student has been inserted successfully.</div>";
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

<form method="POST" action="http://localhost/Project/admin/add.php?entity=students" class="wow fadeInUp">
    <div class="form-group">
        <label for="exampleInputName">Name</label>
        <input type="text" class="form-control bg-transparent" id="exampleInputName" aria-describedby="emailHelp" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
    <div class="form-group">
        <label for="exampleInputPhone">Phone</label>
        <input type="tel" pattern="01[0-2|5]{1}[0-9]{8}" class="form-control bg-transparent" id="exampleInputPhone" aria-describedby="phoneHelp" name="phone">
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
        <label for="exampleInputGrade">Grade</label>
        <select name="grade" id="exampleInputGrade" class="form-control bg-transparent">
            <option value="1">grade one</option>
            <option value="2">grade two</option>
            <option value="3">grade three</option>
            <option value="4">grade four</option>
        </select>
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