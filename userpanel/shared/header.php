    <?php
        include_once "../services/DBConnection.php";

        $db = new DBManager("college_system");

        session_start();
        if(isset($_GET['login']) && $_GET['login'] == 'false'){
            $_SESSION['login'] = false;
            header("location: /Project/userpanel/");
        }
    ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Project/userpanel/index.php" id="home"><i class="fa fa-home pr-2 border-right border-secondary pr-2"></i> <span class="pl-2">Home</span> <span class="sr-only">(current)</span></a>
            </li>
            <?php if (isset($_SESSION['login']) && $_SESSION['login']) { ?>

            <li class="nav-item dropdown" id="courses">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-graduation-cap pr-2 border-right border-secondary pr-2"></i> <span class="pl-2">Courses</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php
                    $query = "SELECT name FROM courses;";
                    $data = $db->select($query);
                    foreach ($data as $row) {
                        foreach ($row as $cell) {
                            echo "<a class='dropdown-item' href='/Project/userpanel/courses.php?name=\"$cell\"'>$cell</a>";
                        }
                    }
                    ?>
                </div>
            </li>

            <li class="nav-item" id="news">
                <a class="nav-link" href="/Project/userpanel/news.php"><i class="fa fa-newspaper-o pr-2 border-right border-secondary pr-2"></i> <span class="pl-2">News</span></a>
            </li>
            <li class="nav-item" id="contact">
                <a class="nav-link" href="/Project/userpanel/contact.php"><i class="fa fa-envelope pr-2 border-right border-secondary pr-2"></i> <span class="pl-2">Contact</span></a>
            </li>

            <?php } ?>
        </ul>
        <?php if (!isset($_SESSION['login']) || isset($_SESSION['login']) && !$_SESSION['login']) { ?>
            <a class="btn btn-info mr-2" href="/Project/userpanel/signin.php">
                Sign In <i class="fa fa-sign-in border-left border-light pl-2"></i>
            </a>
            <a class="btn btn-primary" href="/Project/userpanel/signup.php">
                Sign Up <i class="fa fa-user-plus border-left border-light pl-2"></i>
            </a>
        <?php } else {
        ?>
            <a class="btn btn-danger mr-2" href="/Project/userpanel/operations/opsignInOut.php?login=false">
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