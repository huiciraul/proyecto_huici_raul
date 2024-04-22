<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="..\assets\css\productos.css">
    <script src="https://kit.fontawesome.com/a25933befb.js" crossorigin="anonymous"></script></head>
<body>
    <section class="container container-features">
        <div class="card-features">
            <i class="fa-solid fa-plane-up"></i>
            <div class="feature-content">
                <span>
                    Envios gratuitos 
                </span>
                <p>
                    en compras mayores de $80.000
                </p>
            </div>
        </div>
        <div class="card-features">
            <i class="fa-solid fa-wallet"></i>
            <div class="feature-content">
                <span>
                    Contrareembolso 
                </span>
                <p>
                    100% garantia de devolucion de dinero
                </p>
            </div>
        </div>
        <div class="card-features">
            <i class="fa-solid fa-gift"></i>
            <div class="feature-content">
                <span>
                    Compra de manera segura 
                </span>
                <p>
                    La mejor opcion
                </p>
            </div>
        </div>
    </section>
<section class="container top-categories">
    <h1 class="heading-1">
        Mejores categorías
    </h1>
    <div class="container-categories">     
        <div class="singleDestination">
            <div class="destImage">
                <img src="../assets/img/tipoIndumentaria.jpg" alt="Indumentaria Image">
                <div class="overlayInfo">
                    <h3>Camisetas</h3>
                    <p>Indumentaria</p>
                   <a href="<?= base_url('/productos')?>"> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="destFooter">
                <div class="destText">
                    <h6>Indumentaria</h6>
                    <span class="flex">
                        <span class="dot">.</span>
                        SportClub
                    </span>
                </div>
            </div>
        </div>
        <div class="singleDestination">
            <div class="destImage">
                <img src="../assets/img/tipoAccesorios.jpg" alt="Indumentaria Image">
                <div class="overlayInfo">
                    <h3>Mochilas</h3>
                    <p>Accesorios</p>
                    <a href="<?= base_url('/productos')?>"> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="destFooter">
                <div class="destText">
                    <h6>Accesorios</h6>
                    <span class="flex">
                        <span class="dot">.</span>
                        SportClub
                    </span>
                </div>
            </div>
        </div>
        <div class="singleDestination">
            <div class="destImage">
                <img src="../assets/img/tipoCalzado.jpg" alt="Indumentaria Image">
                <div class="overlayInfo">
                    <h3>Zapatillas</h3>
                    <p>Calzados</p>
                   <a href="<?= base_url('/productos')?>"> <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="destFooter">
                <div class="destText">
                    <h6>Calzados</h6>
                    <span class="flex">
                        <span class="dot">.</span>
                        SportClub
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="container top-products">
        <h1 class="heading-1">
            Mejores productos
        </h1>
                <!-- pdto1 -->
        <div class="container-products">
            <div class="card-products">
                <div class="container-img">
                    <img src="../assets/img/producto1.jpg" alt="camiseta de river">
                    <div class="discount"> 
                        -20%
                    </div>
                    <div class="content card-product">
                        <h3>Camiseta suplente River</h3>
                        <span class="add-cart">
                            Camiseta Para Hombre
                        </span>
                        <p class="price"><strong>$78.499</strong></p>
                    </div>
                </div>
            </div>
                    <!-- pdto2 -->
            <div class="card-products">
                <div class="container-img">
                    <img src="../assets/img/producto2.jpg" alt="camiseta de river">
                    <div class="discount"> 
                        -20%
                    </div>
                    <div class="content card-product">
                        <h3><strong>Nike Mercurial Vapor 15 Academy</strong></h3>
                        <span class="add-cart">
                            Botines de pasto sintetico unisex
                        </span>
                        <p class="price"><strong>$154.499</strong></p>
                    </div>
                </div>
            </div>
                  <!-- pdto3 -->
            <div class="card-products">
                <div class="container-img">
                    <img src="../assets/img/producto3.jpg" alt="camiseta de river">
                    <div class="discount"> 
                        -20%
                    </div>
                    <div class="content card-product">
                        <h3>Nike Zoom Mercurial Superfly 9 Elite XXV FG</h3>
                        <span class="add-cart">
                        Botines de Pasto Natural Unisex
                        </span>
                        <p class="price"><strong>$383.999</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
