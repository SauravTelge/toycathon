<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <style>
          *{
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: "Lucida Console", "Courier New", monospace, cursive;
            /* font-family: serif; */
            font-family: cursive;
            /* font-size: 30px; */
          }
       </style>
    </head>
<body>
<!--Navbar starts-->
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand"  style="
            text-align: center;
            text-transform: uppercase;
            color: #0f002b;
            text-shadow: 1px 1px 2px;
            padding-left: 3px;
        " href="#">विविधEkyam Bharat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav navbar-right ml-auto">
            <a class="nav-item nav-link active" style="color:darkblue" href="Home.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link"  style="color:darkblue" href="#about">About Us</a>
            <a class="nav-item nav-link"  style="color:darkblue" href="#rules">Rules</a>
            <a href = "states.html" class="btn" style="background: green;color:white;margin-right: 3px;">Play</a>
            <a href = "login.php" class="btn" style="background: crimson;">Logout</a>

          </div>
        </div>
      </nav>
      
<!--Navbar ends-->


<!--Carousel Effect Starts-->

<div id="carouselExampleInterval"  style="height:500px" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="1000">
        <img src="images/bg21.jpg" style="height: 500px;" class="d-block w-100" alt="img1">
       
      </div>
      <div class="carousel-item" data-interval="1000">
        <img src="images/bg6.png" style="height: 500px;" class="d-block w-100" alt="img2">
      </div>
      <div class="carousel-item" data-interval="1000">
        <img src="images/bg19.jpg" style="height: 500px;" class="d-block w-100" alt="img3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!--carousel Effect Ends-->
<!--About Us and Rules section-->
<div class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col" style="margin-bottom: 70px;align-items: center;text-align: center;"  id="about">
          <h2 style="background-color: #acea6385;color:darkblue;padding:10px;border-radius:5px;text-align: center;" >About विविधEkyam Bharat</h2>
        <img src="images/about.png" style="justify-content: center;">
      
      </div>
      <div class="col" style="align-items: center;text-align: center;" id="rules">
        <h2 style="background-color: #acea6385;color:darkblue;padding:10px;border-radius:5px;text-align: center;" >Rules</h2>
        <img src="images/rules.png">
        <br>
      </div>
    </div>
  </div>
  <!--Section ends about us-->
<!--footer-->
<footer style="background: #477076;text-align: center;color: white;padding: 5px;" >
    © CopyRight 2021 || Created and Maintained by Code Linguistics
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>