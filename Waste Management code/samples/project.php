<?php

session_start();
if(!isset($_SESSION['username']))
{
    echo" You are Loged Out";
    header('loaction:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THe tribute web sites | A.P J abdul kalam</title>

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        background-color: rgb(193, 193, 212);
        min-height: 100vh;
        border: 10px solid black;
    }

    .content {
        max-width: 900px;
        margin: 0 auto;
    }

    .top_section {
        margin-top: 100px;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }

    .top_section,
    h1 {
        font-size: 50px;
        font-weight: bold;
        color: black;
        text-transform: uppercase;

    }

    .top_section,
    h4 {
        font-size: 20px;
        text-align: end;
    }

    .image_container {
        border-radius: 50%;
        overflow: hidden;
    }

    .image_container,
    img {
        width: 300px;
        height: 300px;
    }

    .about_section {
        margin-top: 50px;
    }

    .about_section h2 {
        font-size: 60px;
        font-weight: 400px;
        margin-bottom: 20px;
    }

    .about_section p {
        font-size: 20px;
        line-height: 30px;
        letter-spacing: 1.2;
        text-align: justify;

    }

    .biography_section {
        margin: 50px 0;
    }

    .biography_section h3 {
        margin-bottom: 20px;
    }

    .biography_section ul {
        margin-left: 50px;
    }

    .biography_section li {
        margin-bottom: 15px;
    }

    footer {
        margin: 50px 0;
    }

    footer p {
        text-align: end;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="content">
            <section class="top_section">
                <div class="image_container">
                    <img src="./images/A._P._J._Abdul_Kalam.jpg" alt="tribute">
                </div>
                <div>
                    <h1>A.P.J Abdul Kalam</h1>
                    <h4>
                        1931-2015
                    </h4>
                </div>
            </section>
            <h1>
                <a href="logout.php">Log out</a>

            </h1>
            <section class="about_section">
                <h2>Missile Man Of India <?php echo $_SESSION['username'];   ?></h2>
                <p>
                    <b>Avul Pakir Jainulabdeen Abdul Kalam </b>BR ( 15 October 1931 – 27 July 2015) was an Indian
                    aerospace scientist and statesman who served as the 11th president of India from 2002 to 2007.
                    He
                    was born and raised in Rameswaram, Tamil Nadu and studied physics and aerospace engineering. He
                    spent the next four decades as a scientist and science administrator, mainly at the Defence
                    Research
                    and Development Organisation (DRDO) and Indian Space Research Organisation (ISRO) and was
                    intimately
                    involved in India's civilian space programme and military missile development efforts.[1] He
                    thus
                    came to be known as the Missile Man of India for his work on the development of ballistic
                    missile
                    and launch vehicle technology.[2][3][4] He also played a pivotal organisational, technical, and
                    political role in India's Pokhran-II nuclear tests in 1998, the first since the original nuclear
                    test by India in 1974.[5]
                </p>

            </section>
            <section class="biography_section">
                <h3>Biographies</h3>
                <ul>
                    <li>
                        Eternal Quest: Life and Times of Dr Kalam by S Chandra; Pentagon Publishers, 2002.
                    </li>
                    <li>President A P J Abdul Kalam by R K Pruthi; Anmol Publications, 2002</li>
                    <li>A P J Abdul Kalam: The Visionary of India by K Bhushan, G Katyal; A P H Pub Corp, 2002</li>
                    <li>A Little Dream (documentary film) by P. Dhanapal; Minveli Media Works Private Limited, 2008
                    </li>
                    <li>
                        The Kalam Effect: My Years with the President by P M Nair; HarperCollins, 2008.
                    </li>
                    <li>
                        The People's President: Dr A P J Abdul Kalam by S M Khan; Bloomsbury Publishing, 2016
                    </li>


                </ul>

            </section>
            <footer>
                <p>read more about A._P._J._Abdul_Kalam <a href=" https://en.wikipedia.org/wiki/A._P._J._Abdul_Kalam">
                        wikipedia</a> </p>
            </footer>
        </div>
    </div>
</body>

</html>