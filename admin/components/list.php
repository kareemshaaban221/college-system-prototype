<div class="padtop-100">
    <div class="ml-sm-5 mr-sm-5 pr-sm-5 pl-sm-5 mb-5">
        <h2 class="mb-4 text-center wow fadeInDown">List of <span class="bg-info p-1 text-light rounded text-capitalize"><?php echo $_GET['entity'] ?></span></h2>
        <?php 
        
            if($_GET['entity'] == "admins"){
                include_once "lists/admins.php";
            }
            else if($_GET['entity'] == "users"){
                include_once "lists/users.php";
            }
            else if($_GET['entity'] == "courses"){
                include_once "lists/courses.php";
            }
            else if($_GET['entity'] == "instructors"){
                include_once "lists/instructors.php";
            }
            else if($_GET['entity'] == "students"){
                include_once "lists/students.php";
            }
            else if($_GET['entity'] == "instructor_family"){
                include_once "lists/instructor_family.php";
            }

        ?>
    </fieldset>
</div>