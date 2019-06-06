<?php include('header.php'); ?>

<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <div class="wrapper">
                    <h1 class="text-center">Welcome to Long Chevrolet Buick GMC</h1>
                    <p> Welcome to our customer portal</p>
                    <p> You are able to view all your vehicle service history and communications with the dealership </p>
                </div>
        </div> 


                <div class="col-md-6 login-form-2">
                <form action="index.php" method="post">
                    <h1 class="text-center" style="color: white;">Login</h1>
                    <?php if ( isset( $login_status ) && false == $login_status ) : ?>
                    <div class="message error">
                        <p>Your username and password are incorrect. Try again.</p>
                    </div>
                    <?php endif; ?>

                    <form>
                        <div class="form-group">
                            <input type="text"  name="username" class="form-control" placeholder="Username" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                        <p><input type="checkbox" name="rememberme" value="1"> Remember Me</p>
                        </div>
                        <div class="form-group">
                        <p><a href="lostpassword.php">Reset Password</a></p>
                        </div>
                        <div class="form-group">
                        <p><a href="register.php">Register here</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</form>
</div> 
<?php include('footer.php'); ?>

