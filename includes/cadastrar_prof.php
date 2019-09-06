<?php
    session_start();
    include('dbh.php');

    $prof_name = mysqli_real_escape_string($conn, trim($_POST['prof_usu']));
    $prof_senha = mysqli_real_escape_string($conn, trim(md5($_POST['prof_senha'])));
    $prof_email = mysqli_real_escape_string($conn, trim($_POST['prof_email']));
    $prof_localtrabalho = mysqli_real_escape_string($conn, trim($_POST['prof_localtrabalho']));
    $prof_foto = $_FILES['arquivo']['name'];

    $sql = "SELECT count(*) as total from prof where prof_name = '$prof_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
      $_SESSION['Usuario ja existe'] = true;
      header('location: cadastro_prof.html');
      exit();
    }

    $result = "INSERT INTO prof (prof_name, prof_senha, prof_email, prof_localtrabalho, prof_foto, data_cadastro) VALUES ('$prof_name', '$prof_senha', '$prof_email', '$prof_localtrabalho', '$prof_foto', NOW())";
    $result_perfil = mysqli_query($conn, $result);

    $pastausu = 'usersprof/'.$prof_name.'/';
    mkdir($pastausu, 0777);

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'],$pastausu.$prof_foto)) {
      if ($conn->query($sql) == TRUE) {
          $_SESSION['status_cadastro'] = true;
        }
        $conn->close();
        header('location: login.html');
        exit();
    }
?>