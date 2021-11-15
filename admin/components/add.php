<div class="padtop-100">
    <fieldset class="mx-auto w-75 border border-dark rounded p-4 mb-5">
        <legend class="w-auto p-3 wow fadeInDown">
            <h2>Add <?php echo $_GET['entity'] ?></h2>
        </legend>
        <?php 
        
            if($_GET['entity'] == "admins"){
                include_once "forms/admins.php";
            }
            else if($_GET['entity'] == "users"){
                include_once "forms/users.php";
            }
            else if($_GET['entity'] == "courses"){
                include_once "forms/courses.php";
            }
            else if($_GET['entity'] == "instructors"){
                include_once "forms/instructors.php";
            }
            else if($_GET['entity'] == "students"){
                include_once "forms/students.php";
            }
            else if($_GET['entity'] == "instructor_family"){
                include_once "forms/instructor_family.php";
            }

        ?>
    </fieldset>
</div>