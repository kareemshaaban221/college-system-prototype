<link rel="stylesheet" href="/Project/admin/css/home.css">

<?php
    if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']):
?>

<div class="bg-transparent mb-5 pt-5">
    <div class="pt-5"></div>
    <h1 class="text-dark text-center wow fadeInDown">Welcome, <span class="bg-info text-light rounded p-1"><?php echo $_SESSION['admin']; ?></span></h1>
    <fieldset class="mx-auto w-75 border p-4 border-dark rounded wow fadeInUp">
        <legend class="w-auto p-2"><h2 class="d-inline">Quick Access</h2></legend>
        <form action="/Project/admin/operations/redirct.php" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Entity</label>
                <select class="form-control bg-transparent" id="exampleFormControlSelect1" name="entity">
                    <?php 

                        $db = new DBManager("college_system");

                        $query = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='college_system';";

                        $data = $db->select($query);

                        foreach($data as $row){
                            foreach($row as $value){
                                if($value == "payments" || $value == "user_message"){
                                    continue;
                                }
                                echo "<option value='$value'>$value</option>\n";
                            }
                        }
                    
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Operation</label>
                <select class="form-control bg-transparent" id="exampleFormControlSelect2" name="op">
                    <option value="add">add</option>
                    <option value="list">list</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
    </fieldset>
</div>

<?php
    else:
?>

<div class="home bg-transparent">
    <h1 class="text-dark text-center wow fadeInDown"><span class="text-light p-1 bg-info firstChar mr-2 rounded">W</span>elcome <span class="text-info">T</span>o <span class="text-info">A</span>dmin <span class="text-info">P</span>anel</h1>

    <div class="text-center">
        <a class="btn btn-primary rounded-pill m-4 w-50 font-weight-bold text-light d-block mx-auto wow fadeInUp" href="/Project/admin/signin.php">
            Sign In
        </a>
        <a href="/Project/aboutus.php" class="wow fadeIn">Need for help?</a>
    </div>
    
</div>

<?php
    endif;
?>
