<?php
    $logged = false;

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <?php include ('head.php'); ?>
    <title>Toaster</title>
</head>
<body>
	<div id="wrapper" align="center">
		<!-- HEADER -->

        <div class="navbar navbar-default navbar-fixed-top" id="home-nav">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="site-title" href="#">DAEMON DASH 2014</a>
                </div>
                <center>
                    <div class="navbar-collapse collapse" id="navbar-main">
                        <?php if(!$logged): ?>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-success ">Sign In</button>
                        </form>
                        <?php else: ?>
                        <span class="navbar-brand navbar-right">Welcome Back!</span>
                        <?php endif; ?>
                    </div>
                </center>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-2">

                <nav class="nav-sidebar well left-well">
                    <?php if ($logged) : ?>
                        <h4>User Menu</h4>
                        <ul class="nav user-nav">
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-home"></i>     Home</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-stats"></i>     Saved Data</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-wrench"></i>     Settings</a></li>
                            <li><a href="javascript:;"><i class="glyphicon glyphicon-off"></i>     Sign Out</a></li>
                        </ul>
                    <?php else: ?>
                        <h1>Why Register?</h1>
                        <p>By registering to this site, you will have the option to save the data you record here! Compare to past data to see how you're doing!"
                         <button data-toggle="modal" data-target=".register-modal" class="btn btn-lg btn-success btn-block register-btn">
                            Register Now!
                        </button>
                     <?php endif; ?>
                </nav>

            </div>
            <div class="col-xs-8 center-well">
                <h1>DAEMON DASH 2014</h1>
                <canvas id="canvas" width="600" height="400"></canvas>
                <p>info</p>
            </div>
            <div class="col-xs-2">
                <nav class="nav-sidebar well right-well pull-right">
                    <h1>About</h1>
                    <p>This website will let you keep track of power usage on a single applicaton. By doing this, we will be aiming to solve sustainability issues.</p>
                </nav>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade register-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="container">

                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel">
                            <div class="panel-heading login-top">
                                <h3 class="panel-title">Please sign in</h3>
                            </div>
                            <div>
                                <form accept-charset="UTF-8" role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Username" name="username" type="text">
                                        </div>
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

        
        <!-- FOOTER -->
		<?php include ('footer.php'); ?>
	</div>
</body>
</html>
<script type="text/javascript" src="chart.js"></script>