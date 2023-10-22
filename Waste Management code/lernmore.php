<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Convent Foundation
    </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
        margin-top: 100px;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
    </style>
</head>

<body>
    <div class="fixed-top">

        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="index.php">Clean World</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Donations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="misson.php">Missions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reword1.php">Contact</a>
                            </li>
                            <li class="nav-item" class="certi">
                                <a class=" nav-link" href="\certi\certificate.html">Certificate</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="cont-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>Contact No : <a href="tel: +9198659****59">+91 6263****43</a></p>
                    </div>
                    <div class="col-lg-6">
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/sourabh_dhangar_/"><img src=" img/icons/instagram.png"
                                    alt="inatagram"></a>
                            <a href="https://www.youtube.com/channel/UCx-vgLHI2kkNhQ9eg9Wexjg"><img
                                    src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="https://www.linkedin.com/in/sourabh-dhangar-899086242/"><img
                                    src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>

    <h2 style="text-align:center">Our Team</h2>
    <div class="row">
        <div class="column">
            <div class="card">
                <img src="sourabh.jpg" alt="Jane" style="width:100%">
                <div class="container">
                    <h2>Sourabh</h2>
                    <p class="title">Backend Devloper</p>
                    <p></p>
                    <p>sourabhdhangar187@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="sourabh.jpg" alt="Mike" style="width:100%">
                <div class="container">
                    <h2>Aadarsh</h2>
                    <p class="title">Frontend &Designer</p>
                    <p></p>
                    <p>aadarshthakurt@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <img src="sourabh.jpg" alt="John" style="width:100%">
                <div class="container">
                    <h2>Arpan</h2>
                    <p class="title">Tester</p>
                    <p></p>
                    <p>arpan12@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Clean World foundation</h4>
                        <p>Address : 3, Gyan Ganga institute of technology jabalpur M.P. </p>
                        <p>Contact No : <a href="tel: +91 98659****59">+91 6263****43</a></p>
                        <p>Email : <a href="mailto:foundation@code.com">sourabhdhangar187@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-two">
                        <h4>Important Links</h4>
                        <ul>
                            <li><a href="index.php">Donations</a></li>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="misson.php">Missions</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="index.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook"></a>
                            <a href="https://www.instagram.com/sourabh_dhangar_/"><img src="img/icons/instagram.png"
                                    alt="inatagram"></a>
                            <a href="https://www.youtube.com/channel/UCx-vgLHI2kkNhQ9eg9Wexjg"><img
                                    src="img/icons/youtube.png" alt="youtube"></a>
                            <a href="https://www.linkedin.com/in/sourabh-dhangar-899086242/"><img
                                    src="img/icons/linkedin.png" alt="linkedin"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail"></a>
                        </div>
                        <p>Copyright &copy; 2023 | All Right Reserved cleanWorldfoundation@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>