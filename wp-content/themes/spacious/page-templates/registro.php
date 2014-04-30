<?php
/**
 * Template Name: Registro customizado
 *
 * Displays the Contact Page Template of the theme.
 *

 */
?>
<?PHP get_header(); ?>
<div id="primary">
    <div id="content" class="clearfix">




        <?php
# Template name: Registro

        if (isset($_POST['registro'])) {
            $usuario = $_POST['usuario'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (strlen($usuario) < 4) {
                // Comprobamos que el nombre de usuario más de 4 caracteres
                $error = true;
                $empty_user = 'Hey! No ingresaste ningún nombre de usuario';
            }
            if (!is_email($email)) {
                // is_email() es una función de WP que chequea si el string tiene el formato de un email
                $error = true;
                $invalid_mail = 'Ups! el correo que ingresaste no es válido';
            }
            if (email_exists($email)) {
                // email_exists() verifica en la BD si el email ingresado se encuentra registrado
                $error = true;
                $exist_mail = 'Ups! el correo que ingresaste ya se encuentra registrado';
            }
            if (username_exists($usuario)) {
                // username_exists() verifica en la BD si el nombre de usuario ingresado se encuentra ocupado
                $error = true;
                $exist_user = 'Ups! al parecer el nombre de usuario que elegiste ya esta ocupado';
            }
            if (!validate_username($usuario)) {
                // validate_username() verifica que el nombre de usuario no tenga ningún caracter extraño
                $error = true;
                $invalid_user = 'Ups! al parecer ingresaste un nombre de usuario inválido';
            }
            if (strlen($password) < 8 && strlen($password) > 16) {
                // Con strlen verificamos que la cantidad de caracteres de la contraseña debe ser entre 8 y 16 caracteres
                $error = true;
                $password_error = 'Hey! La contraseña debe tener entre 8 y 16 caraceteres';
            }
// Si la variable (string) $error se encuentra vacia quiere decir que no hubo ningún error, entonces ejecuta el código para registrar al usuario.
            if (empty($error)) {
                // Con sanitize_email() nos encargamos de limpiar el correo solamente por las dudas
                $email = sanitize_email($email);
                // Lo mismo hacemos con el nombre de usuario usando la función sanitize_user() de WP
                $usuario = sanitize_user($usuario);
// Creamos un array pasando los datos que necesitaremos para crear el nuevo usuario
                $userdata = array(
                    'user_pass' => $password,
                    'user_email' => $email,
                    'user_login' => $usuario
                );
// wp_insert_user() agrega el nuevo usuario a WP
                wp_insert_user($userdata);
// get_user_by() lo utilizamos para obtener el ID del usuario recién creado que lo necesitaremos para wp_new_user_notification()
                $get_userdata = get_user_by('email', $email);
                // Con wp_new_user_notification() enviamos un correo al usuario que recién se registro, pasandole su nombre de usuario y contraseña. Además nos avisará cada vez que un usuario se registre
                wp_new_user_notification($get_userdata->id, $password);
            }
        }
        ?>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <label for="nombre">Nombre de usuario <input type="text" name="usuario" id="nombre" /></label>
            <?php
            echo $empty_user;
            echo $exist_user;
            echo $invalid_user;
            ?>
            <label for="email">Correo electrónico <input type="text" name="email" id="email" /></label>
                <?php echo $invalid_mail;
                echo $exist_mail;
                ?>
            <label for="password">Contraseña <input type="password" name="password" id="password" /></label>
<?php echo $password_error; ?>
            <button type="submit" name="registro">Registrame!</button>
        </form>




    </div>

</div>

<?PHP get_footer(); ?>