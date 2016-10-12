<?php
$name = $email = $gender = $comment = $cellphone = "";
include('index.html');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    echo '<script language="javascript">';
    echo 'alert("Nombre requerido")';
    echo '</script>';
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    echo '<script language="javascript">';
    echo 'alert("Email requerido")';
    echo '</script>';
  }
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      echo '<script language="javascript">';
      echo 'alert("Formato de email invalido")';
      echo '</script>';
    }
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

  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    echo '<script language="javascript">';
    echo 'alert("Curso requerido")';
    echo '</script>';
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
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


?>
