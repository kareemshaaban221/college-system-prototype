<form class="p-5 mx-auto text-dark" method="POST" action="/Project/admin/operations/opsignInOut.php?login=true">
    <fieldset class="border rounded p-3 wow fadeInUp">
        <legend class="w-auto p-3 wow fadeInLeft">
            <h1 class="font-weight-bolder">Sign In - Admin</h1>
        </legend>
        <?php 
            if(isset($_GET['invalid'])){
        ?>
            <div class="alert alert-warning p-2 pl-3 mt-3 mb-3"><span class="font-weight-bolder">Invalid data</span>! please try again later.</div>
        <?php } ?>
        <div class="form-group">
            <label for="exampleInputEmail1" class="font-weight-bold text-secondary">Email address</label>
            <input type="email" name="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1" class="font-weight-bold text-secondary">Password</label>
            <input type="password" name="pass" class="form-control bg-transparent" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary font-weight-bold">Login</button>
    </fieldset>
</form>