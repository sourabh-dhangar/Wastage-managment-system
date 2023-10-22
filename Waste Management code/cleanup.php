<?php


?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container12 {
        padding: 64px;
    }

    .row12:after {
        content: "";
        display: table;
        clear: both
    }

    .column-661 {
        float: left;
        width: 66.66666%;
        padding: 20px;
    }

    .column-3312 {
        float: left;
        width: 33.33333%;
        padding: 20px;
    }

    .large-font12 {
        font-size: 48px;
    }

    .xlarge-font12 {
        font-size: 64px
    }

    .button12 {
        border: none;
        color: white;
        padding: 14px 28px;
        font-size: 16px;
        cursor: pointer;
        background-color: #04AA6D;
    }

    img {
        display: block;
        height: auto;
        max-width: 100%;
    }

    @media screen and (max-width: 1000px) {

        .column-661,
        .column-3312 {
            width: 100%;
            text-align: center;
        }

        img {
            margin: auto;
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
                                <a class="nav-link" href="lernmore.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Contact</a>
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
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook" style="float: right;"></a>
                            <a href="https://www.instagram.com/sourabh_dhangar_/"><img src="img/icons/instagram.png"
                                    alt="inatagram" style="float: right;"></a>
                            <a href="https://www.youtube.com/channel/UCx-vgLHI2kkNhQ9eg9Wexjg"><img
                                    src="img/icons/youtube.png" alt="youtube" style="float: right;"></a>
                            <a href="https://www.linkedin.com/in/sourabh-dhangar-899086242/"><img
                                    src="img/icons/linkedin.png" alt="linkedin" style="float: right;"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail" style="float: right;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div style="text-align:center">
        <h2>Responsive Zig Zag Layout Example</h2>
        <p>Resize the browser window to see the effect.</p>
    </div>

    <!-- The App Section -->
    <div class="container12">
        <div class="row12">
            <div class="column-661">
                <h1 class="xlarge-font12"><b>Wet Waste</b></h1>
                <h1 class="large-12" style="color:MediumSeaGreen;"><b>Why manage wet waste ?</b></h1>
                <p><span style="font-size:36px">"Organic waste: compost, reduce, recycle."</span> Wet waste management
                    involves the proper disposal and
                    treatment of organic and biodegradable waste materials such as food
                    scraps and yard waste. It typically includes methods like composting and anaerobic
                    digestion to reduce landfill waste and produce valuable resources like compost and biogas,
                    contributing to environmental sustainability.
                </p>
                <button class="button12"><a href="wet.php" style="color: white;">Complain</a></button>
            </div>
            <div class="column-3312">
                <img src="wet.jpg" width="335" height="471">
            </div>
        </div>
    </div>

    <!-- Clarity Section -->
    <div class="container12" style="background-color:#f1f1f1">
        <div class="row12">
            <div class="column-661">
                <img src="dry.jpg" alt="App" width="335" height="471">
            </div>
            <div class="column-3312">
                <h1 class="xlarge-font12"><b>Dry Waste</b></h1>
                <h1 class="large-12" style="color:red;"><b>Why manage Dry waste ?</b></h1>
                <p><span style="font-size:24px">"Recycle and manage non-biodegradable waste."</span> Dry waste
                    management focuses on the collection and handling of non-biodegradable waste materials like paper,
                    plastics, glass, and metals. It involves recycling, reusing, and proper disposal to minimize
                    environmental impact and conserve resources. Recycling facilities and sorting processes play a
                    crucial role in diverting dry waste from landfills, promoting sustainability
                </p>
                <button class="button12" style="background-color:red"><a href="dry.php"
                        style="color: white;">Complain</a></button>
            </div>
        </div>
    </div>

    <!-- The App Section -->
    <div class="container12">
        <div class="row12">
            <div class="column-661">
                <h1 class="xlarge-font12"><b>Solid Waste</b></h1>
                <h1 class="large-font12" style="color:MediumSeaGreen;"><b>Why manage solid waste ?</b></h1>
                <p><span style="font-size:36px">"Efficiently handle, treat, and dispose."</span> Solid waste management
                    encompasses the efficient collection, transportation, treatment, and disposal of all types of waste
                    generated by communities and industries. It aims to minimize environmental and health risks by
                    employing strategies such as recycling, landfilling, incineration, and composting while promoting
                    sustainable practices to reduce waste generation and pollution.</p>
                <button class="button12"><a href="solid.php" style="color: white;">Complain</a></button>
            </div>
            <div class="column-3312">
                <img src="solid.jpg" width="335" height="471">
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php">Donations</a></li>
                            <li><a href="index.php">Missions</a></li>
                            <li><a href="index.php">About us</a></li>
                            <li><a href="index.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="col-one">
                        <h4>Social Media</h4>
                        <div class="social">
                            <a href="#"><img src="img/icons/facebook.png" alt="facebook" style="float: right;"></a>
                            <a href="#"><img src="img/icons/instagram.png" alt="inatagram" style="float: right;"></a>
                            <a href="#"><img src="img/icons/youtube.png" alt="youtube" style="float: right;"></a>
                            <a href="#"><img src="img/icons/linkedin.png" alt="linkedin" style="float: right;"></a>
                            <a href="#"><img src="img/icons/gmail.png" alt="gnail" style="float: right;"></a>
                        </div>
                        <p>Copyright &copy; 2023 | All Right Reserved cleanWorldfoundation@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>