<?php include('connectsay/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1, h4 {
      margin: 15px 0 4px;
      font-weight: 400;
      }
      h4 {
      margin: 20px 0 4px;
      font-weight: 400;
      }
      span {
      color: red;
      }
      .small {
      font-size: 10px;
      line-height: 18px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form{
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover, textarea:hover, select:hover {
      outline: none;
      border: 1px solid #095484;
      background: #e6eef7;
      }
      .title-block select, .title-block input {
      margin-bottom: 10px;
      }
      select {
      padding: 7px 0;
      border-radius: 3px;
      border: 1px solid #ccc;
      background: transparent;
      }
      select, table {
      width: 100%;
      }
      option {
      background: #fff;
      }
      .day-visited, .time-visited {
      position: relative;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      input[type="time"]::-webkit-inner-spin-button {
      margin: 2px 22px 0 0;
      }
      .day-visited i, .time-visited i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      top: 8px;
      font-size: 20px;
      }
      .day-visited i, .time-visited i {
      right: 5px;
      z-index: 1;
      color: #a9a9a9;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 0;
      z-index: 2;
      opacity: 0;
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      margin-top: -2px;
      }
      th, td {
      width: 18%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 25%;
      text-align: left;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      .title-block {
      display: flex;
      justify-content: space-between;
      }
      .title-block select {
      width: 30%;
      margin-bottom: 0;
      }
      .title-block input {
      width: 31%;
      margin-bottom: 0;
      }
      th, td {
      word-break: keep-all;
      }
      }
    </style>
</head>
<body>
<div class="testbox">
      <form action="" method="POST">
        <h1>Travel Customer Feedback Form</h1>
        <h4>Travel Agency Name<span>*</span></h4>
        <input type="text" name="TAname" required/>
        <h4>Type of Feedback<span>*</span></h4>
        <select name = "FeedbackType" reuired>
          <option selected hidden value=" "></option>
          <option value="1">Enquiry</option>
          <option value="2">Complaint</option>
          <option value="3">Compliment</option>
          <option value="4">Suggestion</option>
        </select>
        <h4>Feedback/Enquiry on<span>*</span></h4>
        <select name="Feedback_EnquiryOn">
          <option selected hidden value=" "></option>
          <option value="1">Traveling Pakage</option>
          <option value="2">Guideman</option>
         
        </select>
        <h4>Name<span>*</span></h4>
        <div class="title-block">
          <select name = "title">
            <option value="title" selected hidden>Title</option>
            <option value="ms">Ms</option>
            <option value="miss">Miss</option>
            <option value="mrs">Mrs</option>
            <option value="mr">Mr</option>
          </select>
          <input class="name" type="text" name="Fname" placeholder="First" required />
          <input class="name" type="text" name="Lname" placeholder="Last" required/>
        </div>
        <h4>Email Address<span>*</span></h4>
        <input type="email" name="Email" required />
        <h4>Contact Number<span>*</span></h4>
        <input type="number" name="Contact" required />
        <h4>Name of the Guideman who served you</h4>
        <input type="text" name="Gname"/>
        <h4>Place You have visited</h4>
        <input type="text" name="Pname"/>
        <h4>Feedback/Enquiry</h4>
        <input type = "text" name="FeedBack" />
        <h7>Thank you for your time and valuable feedback.</h7>
        <div class="btn-block">
          <input type="submit" name="Submit" href="/" ></input>
          <?php
          if(isset($_SESSION['failed'])){
            echo $_SESSION['failed'];
            unset($_SESSION['failed']);
          }
        ?>
        </div>
      </form>
    </div>

    <?php
      if(isset($_POST['Submit'])){
        $TAname = $_POST ["TAname"];
        $FeedbackType = $_POST ['FeedbackType'];
        $Feedback_EnquiryOn = $_POST ['Feedback_EnquiryOn'];
        $title = $_POST ['title'];
        $Fname = $_POST ['Fname'];
        $Lname = $_POST ['Lname'];
        $email = $_POST ['Email'];
        $contact = $_POST ['Contact'];
        $Gname = $_POST ['Gname'];
        $Pname = $_POST ['Pname'];
        $FeedBack = $_POST ['FeedBack'];
        try{
          $sql = "INSERT Into travelsurvey SET
          TAname = '$TAname',
          FeedbackType = '$FeedbackType',
          Feedback_EnquiryOn = '$Feedback_EnquiryOn',
          title = '$title',
          Fname = '$Fname',
          Lname = '$Lname',
          email = '$email',
          contact = '$contact',
          Gname = '$Gname',
          Pname = '$Pname',
          FeedBack = '$FeedBack'";

          $res = mysqli_query($conn,$sql);

          if($res==true){
            ?>
            <script>
              window.location.href = "http://localhost:8080/dbms/syed/travel.php";
            </script>
            <?php
          }
        } catch(mysqli_sql_exception $e){
          $_SESSION['failed'] = "Email ID already existed";
          ?>
          <script>
            window.location.href = "http://localhost:8080/dbms/syed/travel.php";
          </script>
          <?php
        }
      }
    ?>
</body>
</html>