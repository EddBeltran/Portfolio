<?php
require_once 'init.php';

if(isset($_POST)){
    
    $data = file_get_contents('php://input');
    $data = json_decode( $data );
    var_dump ($data[0]);

    $published_on = date( 'Y-m-d H:i:s' );

    //agregar productos
    $sql = '';

    foreach($data as $i => $i_value) {
        //echo $i_value->nombre;
        if($sql != '') $sql.= ',';
        $sql .= '("'. $i_value->precio .'", "'. $i_value->nombre .'", "'. $i_value->cantidad .'")';
    }
    
    //cargar en db --> PENDIENTE
    // if($sql != '') {
    //     $query = "INSERT INTO posts (author, content, published_on) VALUES ". $sql;
    //     $result = mysqli_query( $app_db, $query );
    //      if ( ! $result ) {
    //          die( mysqli_error( $app_db ) );
    //     }
    // }
}