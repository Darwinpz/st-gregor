<?php require RUTA_RESOURCE . '/views/includes/header.php' ?>

<div class="container">

    <div class="row mt-2">

        <div class="col">
            
            <div class="card mb-2" style="background-color: #B88F23">
                
                <div class="card-body">
                
                    <h3 class="card-title text-center text-white">Nuestras Instalaciones</h3>
                
                </div>
                            
            </div>
        
        </div>

    </div>

    <div class="row">

        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 text-center mt-3 mb-3">

            <h5>Nuestros campos de cultivo se encuentran ubicados en la <span class="subrayar"><b>Isla Payana</b></span></h5>

        </div>

    </div>

    <div class="row">
        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center justify-content-center mb-2">
            
            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="<?php echo RUTA_URL;?>/img/instalaciones_1.jpg" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid"  src="<?php echo RUTA_URL;?>/img/instalaciones_2.jpg" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid"  src="<?php echo RUTA_URL;?>/img/instalaciones_3.jpg" alt="Imagen 3">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid"  src="<?php echo RUTA_URL;?>/img/instalaciones_7.jpg" alt="Imagen 4">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
        </div>
    </div>

    <div class="row mt-2">

        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 d-flex mb-2">

            <div class="card d-grid align-items-center" style="border-color:#B88F23;border-width:medium;">

                <div class="card-body">

                    <p style="text-align: justify;font-size:20px;">Nuestro equipo está capacitado para mantener las condiciones
                    óptimas de cultivo, monitoreando constantemente parámetros como la temperatura, salinidad y oxígeno.</p>

                </div>

            </div>

        </div>

        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 d-flex mb-2">

            <div class="card d-grid align-items-center" style="border-color:#B88F23;border-width:medium;">

                <div class="card-body">

                    <p style="text-align: justify;font-size:20px;">Nos comprometemos a cumplir con los estándares de bioseguridad
                    y a seguir las regulaciones locales y nacionales.</p>

                </div>

            </div>

        </div>

    </div>

    <div class="row mt-2">

        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center mb-2">

            <a data-fslightbox href="<?php echo RUTA_URL;?>/img/instalaciones_4.jpg">
                <img style="border: 3px solid #B88F23; border-radius:2px;" src="<?php echo RUTA_URL;?>/img/instalaciones_4.jpg" class="img-fluid">
            </a>
                
        </div>

        <div class="col col-12 col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center mb-2">

            <a data-fslightbox href="<?php echo RUTA_URL;?>/img/instalaciones_5.jpg">
                <img style="border: 3px solid #B88F23; border-radius:2px;" src="<?php echo RUTA_URL;?>/img/instalaciones_5.jpg" class="img-fluid">
            </a>
                
        </div>

    </div>


    <div class="row mt-2">

        <div class="col col-12 col-sm-12 col-md-12 col-lg-12 d-flex mb-2">

            <div class="card d-grid align-items-center" style="border-color:#B88F23;border-width:medium;">

                <div class="card-body">

                    <p style="text-align: center;font-size:20px;">Nuestro objetivo es contribuir al desarrollo sostenible 
                    de la industria acuícola y proveer a nuestros clientes con larvas de camarón de alta calidad y saludables.</p>

                </div>

            </div>

        </div>

    </div>

</div>


<?php require RUTA_RESOURCE . '/views/includes/footer.php' ?>