<?php
// Configura la salida de errores por pantalla
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

setlocale( LC_TIME, 'es', 'spa', 'es_MX' );
date_default_timezone_set( 'America/Mexico_City' );

// Conexión a la base de datos PENDIENTE EN PRODUCCION
// $host = 'localhost';
// $user = 'root';
// $password = '';
// $database = 'intento';
// $port = '3306';

//servicio web
$usernameService = 'user_pruebas';
$passwordService = 'Pru3B@5.';
$urlProducts = 'https://www.infofast.com.mx/Erick/service/productos/';
$urlClients = 'https://www.infofast.com.mx/Erick/service/clientes/';


//pendiente
// $app_db = mysqli_connect( $host, $user, $password, $database, $port );
// if ( $app_db === false ) {
// 	die( 'Error al conectar con la base de datos' );
// }