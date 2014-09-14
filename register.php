<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <?php include ('head.php'); ?>
    <title>Register</title>
</head>
<body>
	<div id="wrapper">
		
		<div id="content" class="home-background" align="center">
            <!-- LOGIN FORM -->
            <div class="container">
                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel">
                            <div class="panel-heading login-top">
                                <h3 class="panel-title">Sign Up</h3>
                            </div>
                            <div>
                                <form accept-charset="UTF-8" role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Confirm Password" name="conf_password" type="conf_password" value="">
                                        </div>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php include ('footer.php'); ?>
	</div>
</body>
</html>