<?php 
    if($_GET['name'] == "\"Programming 1\""){
?>

<div class="container wow fadeInUp mt-5 pt-5 mb-4">
    <img src="/Project/assets/imgs/prog1.jpg" alt="" class="float-left mr-2 h-75 w-25">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
</div>

<hr class="border border-info w-75">

<div class="container wow fadeInUp mt-5 mb-5">
    <fieldset class="border border-info rounded p-4">
        <legend class="d-inline m-2 w-25"><img src="/Project/assets/imgs/doc1.jpg" alt="" class="w-100 h-100 rounded-circle"></legend>
        <h2>
            PhD. 
            <?php 
                $db = new DBManager("college_system");
                $name = $_GET['name'];
                $name = substr($name, 1, -1);
                $query = "SELECT instructors.name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.name='$name';";
                echo $db->select($query)[0][0];
            ?>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
    </fieldset>
</div>

<?php 
    }
    else if($_GET['name'] == "\"Operating Systems\""){
?>

<div class="container wow fadeInUp mt-5 pt-5 mb-4">
    <img src="/Project/assets/imgs/os.jpg" alt="" class="float-left mr-2 h-75 w-25">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
</div>

<hr class="border border-info w-75">

<div class="container wow fadeInUp mt-5 mb-5">
    <fieldset class="border border-info rounded p-4">
        <legend class="d-inline m-2 w-25"><img src="/Project/assets/imgs/doc1.jpg" alt="" class="w-100 h-100 rounded-circle"></legend>
        <h2>
            PhD. 
            <?php 
                $db = new DBManager("college_system");
                $name = $_GET['name'];
                $name = substr($name, 1, -1);
                $query = "SELECT instructors.name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.name='$name';";
                echo $db->select($query)[0][0];
            ?>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
    </fieldset>
</div>

<?php 
    }
    else if($_GET['name'] == "\"Programming 2\""){ 
?>

<div class="container wow fadeInUp mt-5 pt-5 mb-4">
    <img src="/Project/assets/imgs/oop.jpg" alt="" class="float-left mr-2 h-75 w-25">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p> <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
</div>

<hr class="border border-info w-75">

<div class="container wow fadeInUp mt-5 mb-5">
    <fieldset class="border border-info rounded p-4">
        <legend class="d-inline m-2 w-25"><img src="/Project/assets/imgs/doc2.jpg" alt="" class="w-100 h-100 rounded-circle"></legend>
        <h2>
            PhD. 
            <?php 
                $db = new DBManager("college_system");
                $name = $_GET['name'];
                $name = substr($name, 1, -1);
                $query = "SELECT instructors.name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.name='$name';";
                echo $db->select($query)[0][0];
            ?>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
    </fieldset>
</div>

<?php 
    }
    else if($_GET['name'] == "\"Data Structures\""){
?>

<div class="container wow fadeInUp mt-5 pt-5 mb-4">
    <img src="/Project/assets/imgs/DSA.jpg" alt="" class="float-left mr-2 h-75 w-25">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
</div>

<hr class="border border-info w-75">

<div class="container wow fadeInUp mt-5 mb-5">
    <fieldset class="border border-info rounded p-4">
        <legend class="d-inline m-2 w-25"><img src="/Project/assets/imgs/doc1.jpg" alt="" class="w-100 h-100 rounded-circle"></legend>
        <h2>
            PhD. 
            <?php 
                $db = new DBManager("college_system");
                $name = $_GET['name'];
                $name = substr($name, 1, -1);
                $query = "SELECT instructors.name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.name='$name';";
                echo $db->select($query)[0][0];
            ?>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
    </fieldset>
</div>

<?php 
    }
    else if($_GET['name'] == "\"Calculus\""){
?>

<div class="container wow fadeInUp mt-5 pt-5 mb-4">
    <img src="/Project/assets/imgs/calculus.jpg" alt="" class="float-left mr-2 h-75 w-25">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
</div>

<hr class="border border-info w-75">

<div class="container wow fadeInUp mt-5 mb-5">
    <fieldset class="border border-info rounded p-4">
        <legend class="d-inline m-2 w-25"><img src="/Project/assets/imgs/doc2.jpg" alt="" class="w-100 h-100 rounded-circle"></legend>
        <h2>
            PhD. 
            <?php 
                $db = new DBManager("college_system");
                $name = $_GET['name'];
                $name = substr($name, 1, -1);
                $query = "SELECT instructors.name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.name='$name';";
                echo $db->select($query)[0][0];
            ?>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
    </fieldset>
</div>

<?php 
    }
    else if($_GET['name'] == "\"Computer Graphics\""){
?>

<div class="container wow fadeInUp mt-5 pt-5 mb-4">
    <img src="/Project/assets/imgs/CG.jpg" alt="" class="float-left mr-2 h-75 w-25">
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia doloribus quam possimus dolorum nostrum hic vero repellat, delectus veniam at neque unde assumenda vitae, cum sunt, quo eaque? Omnis, explicabo!</p>
</div>

<hr class="border border-info w-75">

<div class="container wow fadeInUp mt-5 mb-5">
    <fieldset class="border border-info rounded p-4">
        <legend class="d-inline m-2 w-25"><img src="/Project/assets/imgs/doc2.jpg" alt="" class="w-100 h-100 rounded-circle"></legend>
        <h2>
            PhD. 
            <?php 
                $db = new DBManager("college_system");
                $name = $_GET['name'];
                $name = substr($name, 1, -1);
                $query = "SELECT instructors.name FROM courses JOIN instructors ON courses.instructor_id=instructors.id WHERE courses.name='$name';";
                echo $db->select($query)[0][0];
            ?>
        </h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto consequuntur dolores dignissimos placeat praesentium, vitae sit. Minus accusamus eum quae? Error ipsa at quia vero? Blanditiis totam cupiditate molestias odit.</p>
    </fieldset>
</div>

<?php 
    }
    else{
?>

<div class="container wow pulse mt-5 pt-5 mb-4">
    <h2 class="bg-danger p-3 text-light text-center">Course description is <span class="font-weight-bold text-dark">NOT</span> added yet!</h2>
</div>
<div class="text-center m-5 wow fadeInUp">
    <span class="text-primary font-weight-bold">Need help? Contact admins from</span>
    <a class="btn btn-primary p-1 ml-2" href="/Project/userpanel/contact.php?login=true">HERE</a>
</div>


<?php 
    }
?>