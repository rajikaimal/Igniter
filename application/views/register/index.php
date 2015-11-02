<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign up</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo base_url();?>register/add" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" id="firstname" placeholder="First name" name="firstname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="lastname" placeholder="Last name" name="lastname" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="organization" placeholder="Organization" name="organization" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" placeholder="Phone" name="phone" type="number" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword" type="password" value="">
                                </div>
                                <input type="submit" onclick="return checkFields()" class="btn btn-lg btn-success btn-block" value="Sign up">
                                <span id="message" style="color:#FF1A1A"></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>dist/js/sb-admin-2.js"></script>

</body>
<script type="text/javascript">
    function checkFields(){
        var firstname = document.getElementById('firstname').value;
        var lastname = document.getElementById('lastname').value;
        var email = document.getElementById('email').value;
        var organization = document.getElementById('organization').value;
        var phone = document.getElementById('phone').value;
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;

        if(firstname == "" || lastname == "" || email == "" || organization == "" || phone == "" || password == "" || confirmPassword == "") {
            document.getElementById('message').innerHTML = "Please fill all the fields";
            return false;
        }
        if(password != confirmPassword) {
            document.getElementById('password').value = "";
            document.getElementById('confirmPassword').value = "";
            document.getElementById('message').innerHTML = "Passwords don't match";
            return false;           
        }
    }        
</script>

</html>
