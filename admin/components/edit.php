<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $entity = $_GET['entity'];

        $db = new DBManager('college_system');

        $query = "SELECT `name`, `email`, `password`, `role` FROM $entity WHERE id=$id;";

        $data = $db->select($query);

?>

<div class="padtop-100">
    <?php

        if(!$data){
            echo "<div class='rounded bg-danger text-light w-75 p-3 display-4 mx-auto text-center font-weight-bold mb-5 wow pulse'>Invalid ID</div>";
            echo "<div class='text-center mb-5'>
                <a class='btn btn-primary wow fadeInUp' href='/Project/admin/index.php?login=true'>Back Home</a>
            </div>";
        }
        else{
    
    ?>
    <fieldset class="mx-auto w-75 border border-dark rounded p-4 mb-5">
        <legend class="w-auto p-3 wow fadeInDown">
            <h2>Edit <?php echo $entity . ' : <span class="bg-info text-light rounded p-1">' . $data[0][0] . '</span>' ?></h2>
        </legend>
        <?php 
        
            if($entity == "admins"){
                include_once "edit/admins.php";
            }
            else if($entity == "users"){
                include_once "edit/users.php";
            }
            else if($entity == "courses"){
                include_once "edit/courses.php";
            }
            else if($entity == "instructors"){
                include_once "edit/instructors.php";
            }
            else if($entity == "students"){
                include_once "edit/students.php";
            }
            else if($entity == "instructor_family"){
                include_once "edit/instructor_family.php";
            }

        ?>
    </fieldset>

    <?php } ?>
</div>

<?php } ?>