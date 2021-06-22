<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!DOCTYPE html>
<html>

<head>
    <title>
        Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        html {
            margin: 0;
            padding: 0;
            /* height: 1000px; */
            margin-top: 0px;
        }
        body {
            /* font-family: "Times New Roman", Times, serif; */
            font-family: "Lucida Console", "Courier New", monospace,cursive;
            /* font-family: serif; */
            font-family: cursive;
            /* font-size: 30px; */
        }


        body {


            background-color: #6cdce7;
            margin: 0;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 500px 500px;
            margin-top: 0px;
        }

        .center p{
            text-align: center;
            font-size: 60px;
            color:darkblue;
        }

        #introduction p {
            font-size: 40px;
            /* color: darkblue; */
            color: rgb(160, 0, 32) ;
            text-align: center;
        }

        .column3 {
            float: left;
            width: 50%;
            padding: 5px;
        }


        .row3::after {
            content: "";
            clear: both;
            display: table;
        }

        .column {
            float: left;
            width: 600px;
            height: 600px;
            padding: 50px;
            margin-top: 100px;
        }

        .top {
            padding-top: 0px;
            margin-top: 5px;
        }

        /* .column1 {
            text-align: center;
            width: 600px;
            height: 600px;
            padding: 50px;
            margin-top: 0px;
        } */

        /* .row::after {
            content: "";
            clear: both;
            display: table;
            position: left;
        } */

        .form_container {
            margin-top: 100px;
            margin-left: 100px;
            height: 750px;
        }
/* 
        .form_container1 {
            margin-top: 0px;
            height: 750px;
        } */

        .login_btn {
            width: 200px;
            height: 60px;
            background: rgb(139, 0, 0) !important;
            color: rgb(255, 255, 255) !important;
            font-size: 2rem;
            margin-left: 540px;
            margin-top: -300px;
            border-radius: 25px;
            
        }

        .login_btn:focus {
            box-shadow: none !important;
            outline: 10px !important;
        }

        .login_container {
            padding: 5 0rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="
            text-align: center;
            text-transform: uppercase;
            color: #0f002b;
            text-shadow: 1px 1px 2px;
            padding-left: 3px;" href="#">विविधEkyam Bharat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav navbar-right ml-auto">
                <a class="nav-item nav-link active" style="color:darkblue" href="Home.php">Home <span
                        class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" style="color:darkblue" href="Home.php">About Us</a>
                <a class="nav-item nav-link" style="color:darkblue" href="Home.php">Rules</a>
                <a href="login.php" class="btn" style="background:  rgb(160, 0, 32);color: white;">Logout</a>
            </div>
        </div>
    </nav>
    <div class="center">
        <p>सुस्वागतम(Welcome)</p>
    </div>
    <div id="CarousalDemo" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active"
                style="background-image: url(./gateway-india_78361-4513.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
            <div class="carousel-item "
                style="background-image: url(./Mumbai.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
            <div class="carousel-item "
                style="background-image: url(./Takht_Shri_Hazoor_Sahib_Gurudwara_Nanded-1024x752.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
            <div class="carousel-item "
                style="background-image: url(./549511394Aurangabad_Main.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
            <div class="carousel-item "
                style="background-image: url(./Nashik.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
            <div class="carousel-item "
                style="background-image: url(./shirdi.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
            <div class="carousel-item "
                style="background-image: url(./shutterstock_1073721995_20191213105915_20191213105938.jpg); height: 400px;background-repeat: no-repeat;background-position: center;">
            </div>
        </div>
        <a class="carousel-control-prev" href="#CarousalDemo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#CarousalDemo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div id="introduction">
        <p>म्हणून तुम्ही महाराष्ट्राला भेटायला तयार आहात का?
            (So are you ready to visit maharashtra?) </p>
    </div>
    <div class="row3">
        <div class="column3">
          <img src="girl.png" alt="girl" >
        </div>
        <!-- <div class="column3">
            <button type="button" name="button" class="btn login_btn">NEXT</button>
        </div> -->
        <div class="column3">
          <img src="boy.png" alt="boy" >
        </div>
        <div class="column3">
            <a href="category.php" class="btn login_btn">NEXT</a>
        </div>
    </div>
    

    <!-- <div class="form_container1 h-100">
        <div class="top">
            <div class="row">
                <div class="column1">
                    <div class="d-flex justify-content-left mt-3 login_container">

                    </div>
                </div>
                <div class="column1">
                    <div class="d-flex justify-content-left mt-3 login_container">
                        <button type="button" name="button" class="btn login_btn">NEXT</button>
                    </div>
                </div>

            </div>
        </div>

    </div> -->
    <footer style="background: #477076;text-align: center;color: white;padding: 5px;">
        © CopyRight 2021 || Created and Maintained by Code Linguistics
    </footer>


</body>

</html>