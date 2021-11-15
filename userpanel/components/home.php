<link rel="stylesheet" href="/Project/userpanel/css/home.css">

<?php
    if(isset($_SESSION['user'])):
?>

<div class="home bg-transparent mb-5">
    <h1 class="text-dark text-center wow fadeInDown">Welcome, <span class="bg-info text-light rounded p-1"><?php echo $_SESSION['user']; ?></span></h1>

    <h4 class="text-info text-center mt-3 mb-4 wow fadeInUp">Those are list of courses which are available in our community:</h4>
    <table class="table table-dark m-auto col-lg-10 col">
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Grade</th>
            <th>Price</th>
            <th>Instructor Name</th>
        </tr>
        <?php
        
            $db = new DBManager("college_system");

            $query = "SELECT courses.id,courses.name,courses.grade,courses.price,instructors.name FROM `courses` JOIN instructors on instructors.id=courses.instructor_id;";
            
            $data = $db->select($query);

            foreach($data as $row){

        ?>
        <tr>
            <?php foreach($row as $cell){ ?>
                <td class="wow fadeInRight"><?php echo $cell ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    
</div>

<?php
    else:
?>

<div class="home bg-transparent">
    <h1 class="text-dark text-center wow fadeInDown"><span class="text-light p-1 bg-info firstChar mr-2 rounded">W</span>elcome <span class="text-info">T</span>o <span class="text-info">O</span>ur <span class="text-info">S</span>ystem</h1>

    <div class="text-center">
        <a class="btn btn-primary rounded-pill m-4 w-50 font-weight-bold text-light d-block mx-auto wow fadeInUp" href="/Project/userpanel/signup.php">
            Sign Up NOW
        </a>
        <a href="/Project/userpanel/signin.php" class="wow fadeIn">Already signed up?</a>
    </div>
    
</div>

<?php
    endif;
?>
