<?php
/**
 * verfiicar continuidad de la session 
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>MODULO DE ADMINISTRACION</title>
        <script src="../JS/jquery-1.7.2.js"></script>
        <script src="../JS/jquery.ui.core.js"></script>
        <script src="../JS/jquery.ui.widget.js"></script>
        <script src="../JS/jquery.ui.tabs.js"></script>
        <link rel="stylesheet" href="../CSS/tabs.css">

<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>

    </head>
    <body>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">Nueva Empresa</a></li>
                <li><a href="#tabs-2">Editar Empresa</a></li>
                <li><a href="#tabs-3">Usuario Visor Nuevo</a></li>
                <li><a href="#tabs-4">Usuario Visor Editar</a></li>
            </ul>
            <div id="tabs-1">
                <label>Nombre de la empresa:</label><input type="text" name="txtnombreempresa" /><br />
                <label>Contraseña de la empresa:</label><input type="text" name="txtpasswordempresa" /><br />
                <label>Pais:</label><option></option><br /><br />
                <label>Administrador:</label><input type="text" name="txtadministrador" /><br/>
                <label>Password administrador:</label><input type="password" name="txtpasswordadmin"><br />
                <label>Numero de licencias:</label><input type="text" name="txtlicencias" /><br />
                <label>Costo por licencia:</label><input type="text" name="txtcostolicencia" /><br />
                <label>Fechas de pago:</label><input type="text" name="txtfechapago" /><br />
                <label>Meses de alquiler:</label><input type="text" name="txtmesesalquiler" /><br />
                <label>Holgura para pagos(en dias)</label><input type="text" name="txtholgura" /><br />
            </div>
            <div id="tabs-2">
                <label>Nombre o Ruc de la empresa:</label><input type="text" name="txtnombreruc" /><br />
                <div id="datosEmpresa" style="display: none">
                    
                </div>    
            </div>    
            <div id="tabs-3">
                
            </div>
            <div id="tabs-4">
                
            </div>
        </div>
    </body>
</html>