<?php
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //echo $email;
    $con = new mysqli("localhost", "root", "", "survey");
    if($con->connect_error){
        die("Failed to connect : " .$con->connect_error);
    }
    else {
        $stmt = $con->prepare("select * from login where email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){
            $data = $stmt_result->fetch_assoc();
            if($data['pass']=== $pass){
                //echo"<h2>Login Successful</h2>";
                ?>
                <script>
                    window.location.href = "http://localhost:8080/dbms/homepg.html";
              </script>
              <?php
            }
            else
            {
                echo "<h2>Invalid Email</h2>";
            }
    }
    else
    {
        echo "<h2>Invalid Email</h2>";
    }
}
?>