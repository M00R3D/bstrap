<?php
if (isset($_POST['Action'])) {
    switch ($_POST['Action']) {
        case 'login':
            $correo = $_POST['Email'];
            $contrasena = $_POST['Password'];
            break;
    }
}

class AuthController {
    public function login($correo, $contrasena) {
    }
}
?>
