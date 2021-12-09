    <?php
        include_once "../services/DBConnection.php";

        session_start();
        if(isset($_GET['login']) && $_GET['login'] == 'false'){
            $_SESSION['adminLogin'] = false;
            header("location: /Project/admin/");
        }
    ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Project/admin/" id="home"><i class="fa fa-home pr-2 border-right border-secondary pr-2"></i> <span class="pl-2">Home</span> <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']) { ?>
            
                <?php 
                    $db = new DBManager("college_system");
                    $query = $query = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='college_system';";

                    $data = $db->select($query);

                    foreach($data as $row){
                        foreach($row as $value){
                            if($value == "instructor_family" || $value == "payments" || $value == "user_message"){
                                continue;
                            }
                        
                ?>
                    <li class="nav-item dropdown" id="<?php echo $value?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            <?php echo $value ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/Project/admin/add.php?entity=<?php echo $value ?>">Add</a>
                            <a class="dropdown-item" href="/Project/admin/list.php?entity=<?php echo $value ?>"">List</a>
                        </div>
                    </li>
                <?php }}
                    if($_SESSION['role'] == "instructors"){
                ?>

                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            instructor_family
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="instructor_family">
                            <a class="dropdown-item" href="/Project/admin/add.php?entity=instructor_family">Add</a>
                            <a class="dropdown-item" href="/Project/admin/list.php?entity=instructor_family">List</a>
                        </div>
                    </li>

                <?php
                    }
                
                ?>
            <?php } ?>
        </ul>

        <?php if (!isset($_SESSION['adminLogin']) || isset($_SESSION['adminLogin']) && !$_SESSION['adminLogin']) { ?>
            <a class="btn btn-info mr-2" href="/Project/admin/signin.php">
                Sign In <i class="fa fa-sign-in border-left border-light pl-2"></i>
            </a>
        <?php } else {
        ?>
            <a href="/Project/admin/profile.php" class="btn btn-primary mr-2">Profile <i class="fa fa-user border-left border-light pl-2"></i></a>
            <a class="btn btn-danger mr-2" href="/Project/admin/operations/opsignInOut.php?login=false">
                Sign Out <i class="fa fa-sign-out border-left border-light pl-2"></i>
            </a>

        <?php } ?>
    </div>
    </nav>

    <div class="obj obj1 bg-info"></div>

    <div class="obj obj2 bg-dark d-lg-block d-none"></div>

    <div class="obj obj3 bg-dark"></div>

    <div class="obj obj4 bg-dark"></div>

    <div class="obj obj5 bg-info"></div>

    <div class="obj obj6 bg-info d-lg-block d-none"></div>