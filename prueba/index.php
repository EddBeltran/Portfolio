<?php
require_once 'backend/init.php';
require('backend/funciones.php' );
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Órdenes de venta</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="navbar">
        <nav class="container navbar__container">
            <div class="navbar__container__logo">
                <img src="img/logo.svg" alt="logo">
                <h1>InfoShop</h1>
            </div>
            <div class="bag">
                <span id="bag-counter">0</span>
                <img src="img/shopping_bag.svg" alt="shoping bag">
            </div>
        </nav>
    </header>



    <?php
     
    $productos = get_data($urlProducts, $usernameService, $passwordService);
    $clientes = get_data($urlClients, $usernameService, $passwordService); 
    
    //$productos = json_decode($products_local, true);
    //$clientes = json_decode($clients_local, true);
    //var_dump($clients)
    ?>
    
    <div class="splitter container">
        <main class="main">
            <div class="header">
                <h2 class="header__title">Productos</h2>
            </div>

            <div class="products grid grid--1x3">
                <?php foreach ( $productos as $producto ): ?>
                <div class="card">
                    <div class="card__image"></div>
                    <div class="card__text">
                        <h4 class="card__text__product"><?php echo( $producto['nombre'] );?></h4>
                        <div class="card__text__footer">
                            <div class="card__text__footer__input">
                                <p class="card__text__footer__input__price"><?php echo( $producto['Precio'] );?></p>
                                <!-- <div class="card__text__footer__input__buttons">
                                   <button class="btn-counter btn-counter--back">-</button>
                                   <input class="input-text" type="text" value="1">
                                   <button class="btn-counter btn-counter--forward">+</button>
                               </div> -->
                            </div>
                            <button class="btn btn--dark btn--shop" data-id="<?php echo( $producto['id_producto'] );?>"
                                data-nombre="<?php echo( $producto['nombre'] );?>"
                                data-precio="<?php echo( $producto['Precio'] );?>">
                                Agregar
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </main>

        <div class="sidebar">
            <!-- sidebar -->
            <div class="header">
                <h3 class="header__title">Orden de compra</h3>
            </div>
            
            <div class="cart__client">
            <label class="cart__label" for="clientes">Seleccione su usuario:</label>
            <select id="clientes" name="clientes">
                <option value="" selected disabled hidden>Seleccionar...</option>    
                <?php foreach ( $clientes as $cliente ): ?>
                    <option value=<?php echo( $cliente['nombre'] );?>><?php echo( $cliente['nombre'] );?></option>
                <?php endforeach ?>
            </select>
            </div>

            <div class="cart__products">
                <!-- Aqui van los productos agregados con js-->
            </div>
            <div class="cart__bill">
                <p id="subtotal"></p>
                <p id="taxes"></p>
                <p id="total"></p>
                
                <!-- calendario -->
                <div class="cart__calendar">
                   <label class="cart__label" for="calendar">Seleccione fecha de entrega:</label>
                   <input type="date" id="calendar" name="trip-start" value="2022-05-20" min="2022-05-11" max="2022-12-31"> 
                </div>
                
                <button class="btn btn--dark" id="post-form">Confirmar pedido</button>
                <span id="validator"></span>
            </div>
        </div>
    </div>


    <script src="js/shopActions.js"></script>
    <script src="js/sendData.js"></script>
</body>

</html>