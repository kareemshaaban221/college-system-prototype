    <?php
        include_once "../services/DBConnection.php";

        if(isset($_GET['login'])){
            if($_GET['login'] === "true"){
                session_start();
            }
            else{
                session_unset();
            }
        }
        else{
            $_GET['login'] = NULL;
        }
    ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Project/admin/index.php?login=<?php echo $_GET['login'] ?>" id="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['admin'])) { ?>
            
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
                            <a class="dropdown-item" href="/Project/admin/add.php?login=<?php echo $_GET['login'] ?>&entity=<?php echo $value ?>">Add</a>
                            <a class="dropdown-item" href="/Project/admin/list.php?login=<?php echo $_GET['login'] ?>&entity=<?php echo $value ?>"">List</a>
                        </div>
                    </li>
                <?php }}
                    if($_SESSION['role'] == "instructors"){
                ?>

                    <li class="nav-item dropdown" id="istructor_family">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            instructor_family
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/Project/admin/add.php?login=<?php echo $_GET['login'] ?>&entity=instructor_family">Add</a>
                            <a class="dropdown-item" href="/Project/admin/list.php?login=<?php echo $_GET['login'] ?>&entity=instructor_family">List</a>
                        </div>
                    </li>

                <?php
                    }
                
                ?>
            <?php } ?>
        </ul>
        <?php if (!isset($_SESSION['admin'])) { ?>
            <a class="btn btn-info mr-2" href="/Project/admin/signin.php">
                Sign In
            </a>
        <?php } else {
        ?>
            <a class="btn btn-danger mr-2" href="/Project/admin/operations/opsignInOut.php?login=false">
                Sign Out
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