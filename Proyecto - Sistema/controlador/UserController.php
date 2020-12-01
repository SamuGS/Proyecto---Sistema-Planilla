<?php

    if(isset($_POST['submit'])){
        $username = $_POST['usu'];
        $password = sha1(md5($_POST['contra']));

        if(empty($username) || empty($password)){
            echo '<div class="alert alert-danger" data-dismiss="alert">Usuario o contraseña vacios!</div>';

        }else{
                $user = new User;

                if($user->getUser($username, $password)){
                    session_start();
                    $_SESSION['usuario'] = $username;
                    header('Location: index.php');
                }else{
                    echo '<div class="alert alert-danger" data-dismiss="alert">El usuario ingresado no existe!</div>';
                }

        }
    }
?>