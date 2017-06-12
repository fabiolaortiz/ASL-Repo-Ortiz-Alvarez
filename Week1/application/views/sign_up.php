<?php
/**
 * Created by PhpStorm.
 * User: FabiolaOrtiz
 * Date: 6/6/17
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header brand">
                <img alt="Brand" src="http://hhpblog.s3.amazonaws.com/blog/wordpress/wp-content/uploads/2016/07/smoking-cessation-blog.jpg" >
            </div>
            <div class="collapse navbar-collapse link">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost:8888/index.php/">Home</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#logIn">Log In</a></li>
                    <li class="active"><a href="http://localhost:8888/index.php/pages/signupform">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<section class="form">
    <?php form_open('Pages/signUpSubmit');?>
    <form class="form-horizontal" method="post">
        <div class="form-group">
            <label for="fName" class="col-sm-4 control-label">First Name</label>
            <div class="col-sm-4">
                <?php echo form_input(['name' => 'fname', 'id' => 'fname', 'class' => 'form-control', 'value' => set_value('fname'), 'placeholder' => 'John']);?>
            </div>
        </div>
        <div class="form-group">
            <label for="lName" class="col-sm-4 control-label">Last Name</label>
            <div class="col-sm-4">
                <?php echo form_input(['name' => 'lName', 'id' => 'lname', 'class' => 'form-control', 'value' => set_value('lname'), 'placeholder' => 'Smith']); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-4">
                <?php echo form_input(['name' => 'email', 'id' => 'email', 'class' => 'form-control', 'value' => set_value('email'), 'placeholder' => 'Email']); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-4 control-label">Password</label>
            <div class="col-sm-4">
                <?php echo form_password(['name' => 'password', 'id' => 'password', 'class' => 'form-control', 'placeholder' => 'Password']); ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-4">
                <button type="submit" class="btn btn-danger" name="insert">Sign Up</button>
            </div>
        </div>
    </form>
    <?php echo form_close(); ?>
</section>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

