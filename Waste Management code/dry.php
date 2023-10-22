<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->

    <style>
    /* Import Google font - Poppins */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        background: rgb(53, 15, 244);
    }

    .container {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

    .container header {
        font-size: 1.5rem;
        color: #333;
        font-weight: 500;
        text-align: center;
    }

    .container .form {
        margin-top: 30px;
    }

    .form .input-box {
        width: 100%;
        margin-top: 20px;
    }

    .input-box label {
        color: #333;
    }

    .form :where(.input-box input, .select-box) {
        position: relative;
        height: 50px;
        width: 100%;
        outline: none;
        font-size: 1rem;
        color: #707070;
        margin-top: 8px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 0 15px;
    }

    .input-box input:focus {
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
        display: flex;
        column-gap: 15px;
    }

    .form .gender-box {
        margin-top: 20px;
    }

    .gender-box h3 {
        color: #333;
        font-size: 1rem;
        font-weight: 400;
        margin-bottom: 8px;
    }

    .form :where(.gender-option, .gender) {
        display: flex;
        align-items: center;
        column-gap: 50px;
        flex-wrap: wrap;
    }

    .form .gender {
        column-gap: 5px;
    }

    .gender input {
        accent-color: rgb(130, 106, 251);
    }

    .form :where(.gender input, .gender label) {
        cursor: pointer;
    }

    .gender label {
        color: #707070;
    }

    .address :where(input, .select-box) {
        margin-top: 15px;
    }

    .select-box select {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        color: #707070;
        font-size: 1rem;
    }

    .form button {
        height: 55px;
        width: 100%;
        color: #fff;
        font-size: 1rem;
        font-weight: 400;
        margin-top: 30px;
        border: none;
        cursor: pointer;
        transition: all 0.2s ease;
        background: rgb(53, 15, 244);
    }

    .form button:hover {
        background: rgb(53, 15, 244);
    }

    /*Responsive*/
    @media screen and (max-width: 500px) {
        .form .column {
            flex-wrap: wrap;
        }

        .form :where(.gender-option, .gender) {
            row-gap: 15px;
        }
    }
    </style>
</head>

<body>
    <section class="container">
        <header>Dry Waste Complain</header>
        <form method="POST" action=" #" class="form">
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" placeholder="Enter full name" name="your_name" />
            </div>

            <div class=" input-box">
                <label>Mobile Number</label>
                <input type="number" placeholder="Enter Mobile Number" name="your_number" />
            </div>
            </div>
            <div class="input-box address">
                <label>Address</label>
                <input type="text" placeholder="Enter street address " name=" your_street1" />
                <input type="text" placeholder="Enter street address line 2" name="your_street2" />
                <div class="column">
                    <div class="select-box">
                        <select name="your_country">
                            <option hidden>Country</option>
                            <option>America</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Nepal</option>
                        </select>
                    </div>
                    <input type=" text" placeholder="Enter your city" name="your_city" />
                </div>
                <div class="column">
                    <input type="text" placeholder="Enter your region" name="your_region" />
                    <input type="number" placeholder="Enter postal code" name="your_pin" />
                </div>
            </div>
            <button name="s1"> Submit</button>
            <p style=" text-align: center;">Go to <a href="index.html">Home</a></p>
        </form>
    </section>
</body>

</html>
<?php
 include 'connection2.php';
 if(isset($_POST['s1']))
 {
    $y_name=$_POST['your_name'];
    $y_mobile=$_POST['your_number'];
    $y_street1=$_POST['your_street1'];
    $y_street2=$_POST['your_street2'];
    $y_country=$_POST['your_country'];
    $y_city=$_POST['your_city'];
    $y_region=$_POST['your_region'];
    $y_pin=$_POST['your_pin'];
    $insert_data1="INSERT INTO
     manage( name, mobile, street1, street2, cuntry, city, region, pin)
      VALUES
     ('$y_name','$y_mobile','$y_street1','$y_street2','$y_country','$y_city','$y_region','$y_pin')";
     $result=mysqli_query($con,$insert_data1); 
     
}

?>