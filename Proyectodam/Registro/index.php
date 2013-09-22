<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>.:: Login ::. Ejemplo autenticar usuarios</title>
     
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <script src="jquery171.js" type="text/javascript"></script> 
    <script src="jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript" src="jquery.alerts.js"></script>
    <link href="jquery.alerts.css" rel="stylesheet" type="text/css" />
     
    <script type="text/javascript">
    <!--
        $().ready(function() {
            $("#frmlogin").validate();
            $("#usuario").focus();
        });
    // -->
    </script>
     
</head>
<body>
<br /><br />
<form id="frmlogin" name="frmlogin"  method="POST" action="validarUsuario.php">
<table align="center" width="200px">
<tr>
    <td colspan="2" align="center"><h3>Iniciar sesi&oacute;n</h3></td>
</tr>
<tr>
    <td>Usuario</td>
    <td>
        <input type="text" name="usuario" id="usuario" class="required" maxlength="10">
    </td>
</tr>
 
<tr>
    <td>Password</td>
    <td>
        <input type="password" name="password" id="password" class="required"  maxlength="15">
    </td>
</tr>
<tr >
    <td colspan="2" >
        <a href="recuperarPassword.php">
            Olvide mi contrase&ntilde;a
        </a>
    </td>
</tr>
 
<tr>
    <td colspan="2" align="right">
        <input type="submit" name="enviar" value="Enviar" >
    </td>
 
</tr>
     
<tr>
    <td colspan="2" align="right" >
        <br/><a href="registro.php">Deseo registrarme</a>
    </td>
</tr> 
    <?php
     
    //Mostrar errores de validacion de usuario, en caso de que lleguen
     
        if( isset( $_POST['msg_error'] ) )
        {
            switch( $_POST['msg_error'] )
            {
                case 1:
            ?>
            <script type="text/javascript"> 
                jAlert("El usuario o password son incorrectos.", "Seguridad");
                $("#password").focus();
            </script>
            <?php
                break;          
                case 2:
            ?>
            <script type="text/javascript"> 
                jAlert("La seccion a la que intentaste entrar esta restringida.\n Solo permitida para usuarios registrados.", "Seguridad");
            </script>
            <?php       
                break;
            }       //Fin switch
        }
 
        //Mostrar mensajes del estado del registro
         
        if( isset( $_POST['status_registro'] ) )
        {
            switch( $_POST['status_registro'] )
            {
                case 1:
                if( $_POST['i_EmailEnviado'] ==1) {
                ?>
                    <script type="text/javascript"> 
                        jAlert("Gracias, ha sido registrado exitosamente.", 'Registro');
                    </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript"> 
                        jAlert("Gracias, ha sido registrado exitosamente.", 'Registro');
                    </script>
                <?php
                }
 
                    break;          
                 
                default:
            ?>
                <script type="text/javascript"> 
                    jAlert("Temporalmente NO se ha podido registrar, intente de nuevo mas tarde.", "Registro");
                </script>
            <?php       
            }       //Fin switch
        }
    ?>
     
</table>
</form>
</body>
</html>

