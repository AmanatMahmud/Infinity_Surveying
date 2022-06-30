<?php include('connect/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    @font-face {
        font-family: 'Zen';
        src: url(font/static/SourceCodePro-ExtraBoldItalic.ttf);
    }

    .bg-img {
        /* The image used */
        background-image: url("homepg.png");

        min-height: 605px;
        min-width: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        /* Needed to position the navbar */
        position: relative;
    }

    /* Position the navbar container inside the image */
    .container {
        position: absolute;
        margin: 20px;
        width: auto;
    }

    /* The navbar */
    .topnav {
        overflow: hidden;
        float: center;
    }

    /* Navbar links */
    .topnav a {
        font-family: 'Zen';
        color: black;
        text-align: center;
        padding: 10px 25px;
        text-decoration: none;
        font-size: 20px;
    }

    .topnav a:hover {
        color: #aaceec;
    }

    .menu {
        position: relative;
        left: 25px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;

        background-color: #aaceec;
    }

    .dropdown-content a {
        padding: 12 16px;
        color: black;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        color: white;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
</head>

<body>

    <div class="bg-img">
        <div class="container">
            <div class="topnav">
                <br><br>
                <div class="menu">
                    <a href="#home">Home</a>
                    <div class="dropdown">
                        <a href="#SurveyBtn" class="dropbtn">Survey</a>
                        <div class="dropdown-content">
                            <a href="#Survey1">Survey1</a>
                            <a href="#Survey2">Survey2</a>
                            <a href="#s3">Survey3</a>
                            <a href="#s4">Survey4</a>
                            <a href="#s5">Survey5</a>
                        </div>
                    </div>
                    <a href="http://localhost:8080/dbms/admin.html">Admin</a>
                    <a href="#about">About</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['Submit'])) {
        $BankName = $_POST["BankName"];
        $FeedbackType = $_POST['FeedbackType'];
        $Feedback_EnquiryOn = $_POST['Feedback_EnquiryOn'];
        $title = $_POST['title'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $email = $_POST['Email'];
        $contact = $_POST['Contact'];
        $Stuffname = $_POST['Stuffname'];
        $Brname = $_POST['Brname'];
        $FeedBack = $_POST['FeedBack'];
        try {
            $sql = "INSERT Into bankfeedback SET
          BankName = '$BankName',
          FeedbackType = '$FeedbackType',
          Feedback_EnquiryOn = '$Feedback_EnquiryOn',
          title = '$title',
          Fname = '$Fname',
          Lname = '$Lname',
          email = '$email',
          contact = '$contact',
          Stuffname = '$Stuffname',
          Brname = '$Brname',
          FeedBack = '$FeedBack'";

            $res = mysqli_query($conn, $sql);

            if ($res == true) {
    ?>
                <script>
                    window.location.href = "http://localhost:8080/emni/";
                </script>
            <?php
            }
        } catch (mysqli_sql_exception $e) {
            $_SESSION['failed'] = "Email ID already existed";
            echo $_SESSION['failed'];
            unset($_SESSION['failed']);

            ?>
            <script>
                window.location.href = "http://localhost:8080";
            </script>
    <?php
        }
    }
    ?>
</body>
</html>