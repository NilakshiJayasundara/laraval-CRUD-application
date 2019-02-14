@extends('layout.main')

@section('title')
    welcome page
@endsection

@section('body')
    <div class="row">
        <div class="col-md-6">
           <!-- Default form register -->
<form class="text-center border border-light p-5" method="post" action="/register"}>

<p class="h4 mb-4">Register</p>

<div class="form-row mb-4">
    <div class="col">
        <!-- First name -->
        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname">
    </div>
    <div class="col">
        <!-- Last name -->
        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lastname">
    </div>
</div>

<!-- E-mail -->
<input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

<!-- Password -->
<input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
    At least 8 characters and 1 digit
</small>

<!-- Phone number -->
<input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" name="phonenumber" aria-describedby="defaultRegisterFormPhoneHelpBlock">
<small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
    Optional - for two step authentication
</small>

<!-- Newsletter -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
    <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>
</div>

<!-- Sign up button -->
<button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>
@csrf

<!-- Social register -->
<p>or sign up with:</p>

<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-facebook-f"></i>
</a>
<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-twitter"></i>
</a>
<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-linkedin-in"></i>
</a>
<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-github"></i>
</a>

<hr>

<!-- Terms of service -->
<p>By clicking
    <em>Sign up</em> you agree to our
    <a href="" target="_blank">terms of service</a>

</form>
<!-- Default form register -->
        </div>

        <div class="col-md-6">
            <!-- Default form login -->
<form class="text-center border border-light p-5">

<p class="h4 mb-4">Sign in</p>

<!-- Email -->
<input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Password -->
<input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

<div class="d-flex justify-content-around">
    <div>
        <!-- Remember me -->
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    <div>
        <!-- Forgot password -->
        <a href="">Forgot password?</a>
    </div>
</div>

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

<!-- Register -->
<p>Not a member?
    <a href="">Register</a>
</p>

<!-- Social login -->
<p>or sign in with:</p>

<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-facebook-f"></i>
</a>
<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-twitter"></i>
</a>
<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-linkedin-in"></i>
</a>
<a type="button" class="light-blue-text mx-2">
    <i class="fab fa-github"></i>
</a>

</form>
<!-- Default form login -->
        </div>
    </div>

@endsection