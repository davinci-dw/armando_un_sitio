<?php
$titulo = "Comics de Ms. Marvel";
$portada_titulo = "No Es Normal. Parte 1 de 5: Metamorfosis";
$portada_edicion = "Ms. Marvel Vol. 3 #1";
$portada_resumen = "Kamala Khan es una chica normal y corriente de Jersey City, hasta que, de repente, se ve dotada de dones extraordinarios. ¿Pero quién es realmente la nueva Ms. Marvel? ¿Adolescente? ¿Musulmana? ¿Inhumana?";
?>

<div class="container">
    <h1 class="text-center my-5"> <?=$titulo?></h1>
    <div class="row">

        <div class="col-3">
            <div class="card mb-3">
                <img src="img/covers/hev401.webp" class="card-img-top" alt="Portada de Ms. Marvel Vol. 3 #1">
                <div class="card-body">
                    <p class="fs-6 m-0 fw-bold text-danger"><?=$portada_edicion?></p>
                    <h5 class="card-title"><?=$portada_titulo?></h5>
                    <p class="card-text"><?=$portada_resumen?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Guion: G. Willow Wilson</li>
                    <li class="list-group-item">Arte: Adrian Alphona</li>
                    <li class="list-group-item">Publicación: Abril 2014</li>
                </ul>
                <div class="card-body">
                    <div class="fs-3 mb-3 fw-bold text-center text-danger">$1.200,00</div>
                    <a href="#" class="btn btn-danger w-100 fw-bold">COMPRAR</a>
                </div>

            </div>
        </div>
    </div>
</div>
