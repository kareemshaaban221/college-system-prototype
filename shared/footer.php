    <footer class="pt-5 pb-5 plr-5 bg-dark p-3 text-light" id="footer">
        <div class="row pl-4 pr-4" id="footer">
        <div class="col-lg-3 col-sm-4 mb-5 col-sm-12 wow fadeInLeft">
            <h3 class="text-light bold text-uppercase fixedSize-20px">
                MU-FCIS
            </h3>
            <p class="mt-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere beatae incidunt rerum, quia est vitae consequatur repellat distinctio provident voluptates error eius aspernatur, minima laboriosam veniam, harum aut? Id, hic.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="footerIcons" id="footerIcons">
            <a class="" target="_blank" href="https://www.facebook.com"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            <a class="ml-3" target="_blank" href="https://www.twitter.com"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
            <a class="ml-3" target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4 mb-5 col-12 wow fadeInLeft">
            <h3 class="text-light bold text-uppercase fixedSize-20px">QUICK LINK</h3>
            <div class="mt-3">
                <div class="pb-3"><a href="/Project/" class="text-decoration-none">Home</a></div>
                <div class="pb-3"><a href="/Project/admin/signin.php" class="text-decoration-none">Admin Sign In</a></div>
                <div class="pb-3"><a href="/Project/userpanel/signin.php" class="text-decoration-none">User Sign In</a></div>
                <div class="pb-3"><a href="/Project/userpanel/signup.php" class="text-decoration-none">User Sign Up</a></div>
                <div class="pb-3"><a href="/Project/aboutus.php" class="text-decoration-none">About Us</a></div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4 mb-5 col-12 wow fadeInRight">
            <h3 class="text-light bold text-uppercase fixedSize-20px">HELPFULL LINK</h3>
            <div class="mt-3">
                <div class="pb-3"><a target="_blank" href="https://www.britannica.com/science/computer-science" class="text-decoration-none">Education Fields</a></div>
                <div class="pb-3"><a target="_blank" href="https://www.ucas.com/explore/subjects/computer-science" class="text-decoration-none">Education Qualification</a></div>
                <div class="pb-3"><a target="_blank" href="https://engineering.stanford.edu/news/how-computer-science-department-teaching-ethics-its-students" class="text-decoration-none">Engineering Ethics</a></div>
                <div class="pb-3"><a target="_blank" href="https://www.computerscience.org/degrees/certifications/" class="text-decoration-none">International Certification</a></div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-4 mb-5 col-12 wow fadeInRight">
            <h3 class="text-light bold text-uppercase fixedSize-20px">IMPORTANT LINK</h3>
            <div class="mt-3">
                <div class="pb-3"><a target="_blank" href="https://www.edx.org/" class="text-decoration-none">EDX Website</a></div>
                <div class="pb-3"><a target="_blank" href="https://cs50.harvard.edu/college/2021/fall/" class="text-decoration-none">CS50 Website</a></div>
                <div class="pb-3"><a target="_blank" href="https://www.cisco.com/c/en_eg/index.html" class="text-decoration-none">Cisco Website</a></div>
                <div class="pb-3"><a target="_blank" href="https://e.huawei.com/en/talent/#/" class="text-decoration-none">Huawei Talent</a></div>
            </div>
        </div>
        </div>

        <hr class="mt-5 mb-5 border border-secondary">

        <div class="pr-4 pl-4 wow fadeInUp">
        <div>
            © 2021 MU-FCIS. Template implemented by <span class="text-danger bold " id="myName">Kareem Mohamed Shaaban
            ♥</span>.
        </div>

        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat adipisci impedit vitae distinctio? Unde dolores non laboriosam consectetur? Rerum veritatis architecto obcaecati nesciunt suscipit. Corrupti, et. Quidem nemo et dolorem.</p>
        </div>

    </footer>

    <div id="upBtn" class="btn p-2 text-light btn-primary">
      <i class="fa fa-arrow-up fa-lg" aria-hidden="true"></i>
    </div>

    <?php if (isset($_SESSION['login']) && $_SESSION['login']) { ?>
        <a id="bell" class="btn p-2 text-light btn-danger" href="/Project/userpanel/contact.php">
            <div class="d-inline" style="position: relative;">
                <?php
                    $query = "SELECT COUNT(id) AS noMsgs FROM user_message WHERE answer IS NOT NULL;";
                    $noMsgs = $db->select($query, true)[0]['noMsgs'];
                    if($noMsgs):
                ?>
                    <div class="bg-warning text-dark rounded-circle p-1 w-auto display-6 font-weight-bold" style="position: absolute; right: 0; top: -10px; line-height: 0.5;"><?php echo $noMsgs?></div>
                <?php endif;?>
                <i class="fa fa-bell fa-lg text-light" aria-hidden="true"></i>
            </div>
            <?php if($noMsgs){ echo "&nbsp;"; }?>
            <div class="d-inline">
                <span id="bellMsg" class="ml-1 text-light">|&nbsp;Messages</span>
            </div>
        </a>
    <?php } ?>

    <?php if (isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] &&  $_SESSION['role'] == 'admins') { ?>
        <a id="bell" class="btn p-2 text-light btn-danger" href="/Project/admin/contact.php">
            <div class="d-inline" style="position: relative;">
                <?php
                    $query = "SELECT COUNT(id) AS noMsgs FROM user_message WHERE answer IS NULL;";
                    $noMsgs = $db->select($query, true)[0]['noMsgs'];
                    if($noMsgs):
                ?>
                    <div class="bg-warning text-dark rounded-circle p-1 w-auto display-6 font-weight-bold" style="position: absolute; right: 0; top: -10px; line-height: 0.5;"><?php echo $noMsgs?></div>
                <?php endif;?>
                <i class="fa fa-bell fa-lg text-light" aria-hidden="true"></i>
            </div>
            <?php if($noMsgs){ echo "&nbsp;"; }?>
            <div class="d-inline">
                <span id="bellMsg" class="ml-1 text-light">|&nbsp;Messages</span>
            </div>
        </a>
    <?php } ?>
    
    <script src="/Project/assets/js/jquery-min.js"></script>
    <script src="/Project/assets/js/popper.min.js"></script>
    <script src="/Project/assets/js/bootstrap.min.js"></script>
    <script src="/Project/assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="/Project/assets/js/main.js"></script>

</body>

</html>