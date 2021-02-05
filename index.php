
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <!doctype html>
<html lang="en">

<head>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>WebPractice</title>
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-prinaery">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


 <div><div class="header">
    <h2>Home Page</h2>
    
</div>
<div class="content">
  	
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    
    <?php if (isset($_SESSION['username'])) : ?>
  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>

<div class="header">
  <h2>Home Page</h2>
</div>
<div class="content">
  
  <?php if (isset($_SESSION['success'])) : ?>
<div class="error success" >
  <h3>
<?php
  echo $_SESSION['success'];
  unset($_SESSION['success']);
?>
  </h3>
</div>
  <?php endif ?>


<?php endif ?></div>



    <footer class="mainfooter" role="contentinfo">
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">

                        <div class="footer-pad">
                            <h4>Contact Us At</h4>
                            <ul class="list-unstyled">
                                <p>
                                    <a href="www.facebook.com/">facebook.com/ guian carlo</a>
                                </p>
                                <p>
                                    <a href="www.instagram.com/">instagram.com/giv_amancio</a>
                                </p>
                                <p>
                                    <a href="www.twitter.com/">twitter.com/Guian_Carlo</a>
                                </p>
                                <p>
                                    <a href="https://mail.google.com/mail/u/0/#inbox">Help</a>
                                </p>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">

                        <div class="footer-pad">
                            <h4>About Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Website Tutorial</a></li>
                                <li><a href="#">Accessibility</a></li>
                                <li><a href="#">Disclaimer</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Webmaster</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-pad">
                            <h4>Heading 3</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Parks and Recreation</a></li>
                                <li><a href="#">Public Works</a></li>
                                <li><a href="#">Police Department</a></li>
                                <li><a href="#">Fire</a></li>
                                <li><a href="#">Mayor and City Council</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Follow Us</h4>
                        <ul class="social-network social-circle">
                            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">&copy; Copyright 2018 - Company Name. All rights reserved.</p>
                    </div>
                </div>


            </div>
        </div>
    </footer>
</body>

</html>


</body>
</html>