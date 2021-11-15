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
                <a class="nav-link" href="/Project/userpanel/index.php?login=<?php echo $_GET['login'] ?>" id="home">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['user'])) { ?>

            <li class="nav-item dropdown" id="courses">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Courses
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $db = new DBManager("college_system");
                    $query = "SELECT name FROM courses;";
                    $data = $db->select($query);
                    foreach ($data as $row) {
                        foreach ($row as $cell) {
                            echo "<a class='dropdown-item' href='/Project/userpanel/courses.php?login={$_GET["login"]}&name=\"$cell\"'>$cell</a>";
                        }
                    }
                    ?>
                </div>
            </li>

            <li class="nav-item" id="news">
                <a class="nav-link" href="/Project/userpanel/news.php?login=<?php echo $_GET['login'] ?>">News</a>
            </li>
            <li class="nav-item" id="contact">
                <a class="nav-link" href="/Project/userpanel/contact.php?login=<?php echo $_GET['login'] ?>">Contact</a>
            </li>

            <?php } ?>
        </ul>
        <?php if (!isset($_SESSION['user'])) { ?>
            <a class="btn btn-info mr-2" href="/Project/userpanel/signin.php">
                Sign In
            </a>
            <a class="btn btn-primary" href="/Project/userpanel/signup.php">
                Sign Up
            </a>
        <?php } else {
        ?>
            <a class="btn btn-danger mr-2" href="/Project/userpanel/operations/opsignInOut.php?login=false">
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