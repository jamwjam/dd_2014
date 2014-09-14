<!--
To change this template use Tools | Templates.
-->
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
                    <a class="navbar-brand" href="#">DAEMON DASH 2014</a>
                </div>
                <center>
                    <div class="navbar-collapse collapse" id="navbar-main">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Sign In</button>
                        </form>
                    </div>
                </center>
            </div>
        </div>
        
        <div id="container">
            <!-- IF NOT LOGGED IN -->
            <div class="well left-well">
                <div>
                    <h1>Why Register?</h1>
                    <p>If you register, you will be able to save the data recorded here and be able to access them at any time</p>
                </div>
            </div>


            <!-- CENTER CANVAS -->
            <div class="row center-content">
                <h1>DAEMON DASH 2014</h1>
                    <canvas id="canvas" width="600" height="400"></canvas>
            </div>
            
            <!-- RIGHT SIDE -->
            <div class="well right-well">
                <h1>About</h1>
                <p>This website will let you keep track of power usage on a single applicaton. By doing this, we will be aiming to solve sustainability issues.</p>
            </div>
        </div>
        
        
       
        
        
        <!-- Modal -->
        <div class="modal fade bs-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                                            <input class="form-control" placeholder="E-mail" name="email" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                        <div class="checkbox login-remember">
                                            <label>
                                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                            </label>
                                        </div>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                                        <a href="register" class="btn btn-lg btn-success btn-block">Sign Up</a>
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