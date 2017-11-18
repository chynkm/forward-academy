<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Forward Academy provides student oriented traning for CA, CMA, CS, ACCA courses">
        <link rel="icon" href="img/favicon.ico">
        <title><?php echo basename($_SERVER['REQUEST_URI']) ? ucfirst(str_replace(array('_', '.php'), ' ', basename($_SERVER['REQUEST_URI']))).' | ' : null; ?>Forward Academy</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap-3/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbar-static-top.css" rel="stylesheet">
        <?php if(basename($_SERVER['REQUEST_URI']) == 'facilities.php'): ?>
        <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">
        <?php endif; ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Forward Academy</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?php echo basename($_SERVER['REQUEST_URI']) == 'about_us.php' ? 'class="active"' : null; ?>><a href="about_us.php">About Us</a></li>
                        <li <?php echo basename($_SERVER['REQUEST_URI']) == 'courses.php' ? 'class="active"' : null; ?>><a href="courses.php">Courses</a></li>
                        <li <?php echo basename($_SERVER['REQUEST_URI']) == 'facilities.php' ? 'class="active"' : null; ?>><a href="facilities.php">Facilities</a></li>
                        <li <?php echo basename($_SERVER['REQUEST_URI']) == 'contact_us.php' ? 'class="active"' : null; ?>><a href="contact_us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
