<form class="p-5 mx-auto text-dark" method="POST" action="/Project/userpanel/operations/opsignUp.php">
    <fieldset class="border rounded p-3 wow fadeInUp">
        <legend class="w-auto p-3 wow fadeInRight">
            <h1 class="font-weight-bolder">Sign Up</h1>
        </legend>
        <div class="form-group">
            <label for="exampleInputName1" class="font-weight-bold text-secondary">Full name</label>
            <input type="text" name="name" class="form-control bg-transparent" id="exampleInputName1" aria-describedby="nameHelp">
        </div>
        <div class="form-group mt-4">
            <label for="exampleInputEmail1" class="font-weight-bold text-secondary">Email address</label>
            <input type="email" name="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group mt-4">
            <label for="exampleInputPassword1" class="font-weight-bold text-secondary">Password</label>
            <input type="password" name="pass" class="form-control bg-transparent" id="exampleInputPassword1">
        </div>
        <div class="form-group mt-4">
            <label for="exampleInputPassword2" class="font-weight-bold text-secondary">Confirm password</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword2">
        </div>
        <div class="alert alert-danger bg-transparent">
            Note: you can't sign up until you fill all field with correct values.
            <br>
            Note: you are signing up as a normal user and your authrizations are very low.
        </div>
        <div id="mySubmitBtn">
            <div class="btn btn-primary disabled font-weight-bold">Sign Up</div>
            <a href="/Project/userpanel/signin.php" class="ml-3">Already signed up?</a>
        </div>
        
        
    </fieldset>

</form>

<script>
    let pass = document.querySelector("#exampleInputPassword1");
    let confirm = document.querySelector("#exampleInputPassword2");
    let submit = document.querySelector('#mySubmitBtn');
    let nameInput = document.querySelector('#exampleInputName1');
    let emailInput = document.querySelector('#exampleInputEmail1');
    confirm.addEventListener('keyup', passConfirm);
    pass.addEventListener('keyup', passConfirm);
    nameInput.addEventListener('keyup', passConfirm);
    emailInput.addEventListener('keyup', passConfirm);

    function passConfirm() {

        if (confirm.value == pass.value && pass.value != '' && nameInput.value != '' && emailInput.value != '') {
            submit.innerHTML = '<button type="submit" class="btn btn-primary font-weight-bold">Sign Up</button>';
        } else {
            submit.innerHTML = '<div class="btn btn-primary disabled font-weight-bold">Sign Up</div>';
        }

    }
</script>