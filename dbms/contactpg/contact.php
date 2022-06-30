<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @font-face {
      font-family: 'Zen';
      src: url(../font/SourceCodePro-ExtraBoldItalic.ttf);
    }

    body {
      font-family: "Zen";
      font-size: 20px;
    }

    * {
      box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      font-family: "Zen";
      background-color: #aaceec;
      color: black;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      color: white;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    .alert{
      background-color: red;
      color: white;
    }
    ul {
    font-family: "Zen";
    font-size: 20px;
  list-style-type: none;
  margin: 0px;
  padding: 0px;
  overflow: hidden;
  bottom: 50px;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  color:#aaceec;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #aaceec;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {color: white;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);}

.dropdown:hover .dropdown-content {
  display: block;
}
  </style>
</head>

<body>
<ul>
            <li><a href="http://localhost:8080/dbms/homepg.html">Home</a></li>
            <li class="dropdown">
              <a href="javascript:void(0)" class="dropbtn">Surveys</a>
              <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
                <a href="#">Link 4</a>
              </div>
            </li>
            <li><a href="http://localhost:8080/dbms/admin/admin.html">Admin</a></li>
            <li><a href="http://localhost:8080/dbms/contactpg/contact.php">Contact</a></li>
          </ul>
  <h3>Contact Us</h3>
  <?php
  $Msg = "";
  if(isset($_GET['error']))
  {
      $Msg= "Please fill all the feilds";
      echo '<div class="alert">'.$Msg.'</div>';
  }
  if(isset($_GET['success']))
  {
      $Msg= "Your message has been sent.";
      echo '<div class="alert">'.$Msg.'</div>';
  }
  ?>
  <div class="container">
    <form action="conne.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name">

      <label for="lname">Email</label>
      <input type="text" id="lname" name="email" placeholder="Your email">
      <label for="lname">Subject</label>
      <input type="text" id="subject" name="subject" placeholder="Subject">
      <label for="subject">Message</label>
      <textarea id="subject" name="mess" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" name="Submit" value="Submit">
    </form>
  </div>
</body>

</html>