<!DOCTYPE html>
<html>

<head>
  <title>Insert Page page</title>
</head>

<body>
  <center>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");

    // Check connection
    if ($conn === false) {
      die("ERROR: Could not connect. "
        . mysqli_connect_error());
    }

    $firstName = $_REQUEST['first_name'];
    $lastName = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $phoneNumber = $_REQUEST['Number'];
    $message = $_REQUEST['Message'];


    $sql = "INSERT INTO user VALUES ('$firstName',
            '$lastName','$email','$phoneNumber','$message')";

    if (mysqli_query($conn, $sql)) {
      echo "<h3>Thank you, Mr. $firstName, the message was sent successfully</h3>";

      echo nl2br("\n $firstName $lastName\n $email\n $phoneNumber\n $message\n");
    } else {
      echo "something went wrong $sql. "
        . mysqli_error($conn);
    }


    mysqli_close($conn);
    ?>
  </center>
</body>

</html>