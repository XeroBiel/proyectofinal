<?php
if(isset($_POST['enviar'])){
    if (!empty(['name']) && !empty($_POST['apellido']) && !empty($_POST['numero']) && !empty($_POST['direccion']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $apellido = $_POST['apellido'];
        $numero = $_POST['numero'];
        $direccion = $_POST['direccion'];
        $email = $_POST['email'];
        $header = "From: grigorth6767@gmail.com" . "\r\n";
        $header.= "Reply-To: grigorth6767@gmail.com" . "\r\n";
        $header.= "x-Mailer: PHP/" . phpversion();
        $mail = @mail($name,$apellido,$numero,$direccion,$email);
        if ($mail){
            echo "<h2>!Mail enviado exitosamente!</h2>";
        }
    }
}
?>