<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
  // sql to create table
  $sql = "CREATE TABLE MyForms (
  nombre VARCHAR(50) NOT NULL,
  email VARCHAR(30) NOT NULL,
  telefono VARCHAR(10),
  curso VARCHAR(10) NOT NULL,
  mensaje VARCHAR(1000),
  reg_date TIMESTAMP
)";

    /*
  echo "Connected successfully"."<br>";
  if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully"."<br>";
  } else {
      echo "Error creating table: " . $conn->error."<br>";
  }



  if ($conn->query($sql) === TRUE) {
      echo "Table MyForms inserted successfully";
  } else {
      echo "Error inserting table: " . $conn->error;
  }

  */

  $name = $email = $gender = $comment = $cellphone = "";
  include('index.html');
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      echo '<script language="javascript">';
      echo 'alert("Nombre requerido")';
      echo '</script>';
    } else {
      $name = test_input($_POST["name"]);
      $name=mysql_real_escape_string($name);
    }

    if (empty($_POST["email"])) {
      echo '<script language="javascript">';
      echo 'alert("Email requerido")';
      echo '</script>';
    }
      else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo '<script language="javascript">';
          echo 'alert("Formato de email invalido")';
          echo '</script>';
        }
        $email=mysql_real_escape_string($email);
      }

      if (empty($_POST["cellphone"])) {
        $cellphone = "";
      } else {
        $cellphone = test_input($_POST["cellphone"]);
        $cellphone = preg_replace("/[^0-9]/", '', $cellphone);
        if(!preg_match("/^[0-9]{10}$/", $cellphone)) {
          echo '<script language="javascript">';
          echo 'alert("Longitud invalida")';
          echo '</script>';
        }
        $cellphone=mysql_real_escape_string($cellphone);

      }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
        $comment=mysql_real_escape_string($comment);
      }

      if (empty($_POST["gender"])) {
        echo '<script language="javascript">';
        echo 'alert("Curso requerido")';
        echo '</script>';
      } else {
        $gender = test_input($_POST["gender"]);
        $gender=mysql_real_escape_string($gender);
      }

      /*
      echo $name."<br>";
      echo $email."<br>";
      echo $cellphone."<br>";
      echo $gender."<br>";
      echo $comment."<br>";
      */
      if ($name!=""&&$email!=""&&$gender!=""){
        echo "<hr><h2>Informacion enviada:</h2>";
        echo "<div>";
        echo "Estimad@ <strong>".$name."</strong>: <br>Tan pronto como podamos te enviaremos a tu correo la info relacionada a ";
        if ($gender=="tamp"){
          echo "curso TAMP-B ";
        }
        else{
          echo "<strong>otro curso </strong>";
        }
        echo "a la siguiente direccion: <strong>".$email.".</strong> <br> Del mismo modo, trataremos de localizarte via celular (<strong>".$cellphone."</strong>) en las proximas 24 hrs para atender cualquier duda que pudiera tener. <br>Agradecemos su tiempo para habernos escrito. <br>Estamos en contacto.";
        echo "</div>";
        include('questions.html');

        $sql = "INSERT INTO MyForms (nombre, email, telefono,curso,mensaje)
        VALUES ('$name', '$email', '$cellphone','$gender','$comment')";
        if ($conn->query($sql) === TRUE) {
            //echo "Table MyForms2 inserted successfully";
            echo '<script language="javascript">';
            echo 'alert("ENVIADO CORRECTAMENTE")';
            echo '</script>';
        } else {
            //echo "Error inserting table2: " . $conn->error;
            echo '<script language="javascript">';
            echo 'alert("ERROR al enviar, favor de intentar más tarde")';
            echo '</script>';
        }
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
