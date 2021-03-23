<?php
    session_name("cv-portfolio");
    session_start();

    $page = "portfolio";
    require_once "inc/header.php";
?>

    <main class="container mt-5 mb-5">
        <div class="row mt-5 pt-5">
            <div class="col-1">
                <p id="h" class="tr">hyna</p>
                <audio id="ee">
                    <source src="son/Wind-Riders.mp3">
                </audio>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-4 text-center">
                <a href="https://dof-multiplans.com/" target="_blank"><img src="img/image-site.png" width="350px" height="200px" alt="Image du site"></a>
                <p class="sp1">Site Web Responsive<br> DOF Multiplans</p>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div id="carousel" class="carousel slide card-img-bottom" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-toggle="modal" data-target="#ModalCenter">
                            <img src="img/profil-lgf.png" class="d-block w-100 card-img-bottom mx-auto" height="200px" alt="Profil sfh">
                            
                            <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <img src="img/profil-lgf.png" width="1000px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-toggle="modal" data-target="#ModalCenter2">
                            <img src="img/form.jpeg" class="d-block w-100 card-img-bottom mx-auto" height="200px" alt="Formulaire sfh">
                            <div class="modal fade" id="ModalCenter2" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <img src="img/form.jpeg" width="1000px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-toggle="modal" data-target="#ModalCenter3">
                            <img src="img/rec-lgf.png" class="d-block w-100 card-img-bottom mx-auto" height="200px" alt="S'enregistrer sfh">
                            <div class="modal fade" id="ModalCenter3" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <img src="img/rec-lgf.png" width="1000px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
                <p class="sp1">Prototype pour les Epiceries<br>ASEB BRUXELLE</p>
            </div>
            <div class="col-12 col-md-4 text-center" data-toggle="modal" data-target="#ModalCenter4">
                <img src="img/canvas1.png" width="350px" alt="Canvas">
                <div class="modal fade" id="ModalCenter4" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <img src="img/canvas1.png" width="1000px" alt="">
                        </div>
                    </div>
                </div>
                <a href="https://github.com/hyna-fr/canvas" target="_blank"><p class="sp1">Concours Canva<br> HTML - JavaScript</p></a>
            </div>
        </div>

        <div class="row g-4 pt-1">
            <div class="col-12 col-md-6 mt-5">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <h5 class="card-title text-center"></h5>
                    </div>
                    <a href="https://github.com/hyna-fr?tab=repositories" target="_blank"><img src="img/octocat-v2.gif" width="350px" alt="Lien GitHub" class="card-img-bottom"></a>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5">
                <div class="card bg-transparent border-0">
                    <div class="card-body text-center">
                        <span class="sp1">My Little Gallery :<h6></h6></span>
                    </div>
                    <div id="carousel2" class="carousel slide card-img-bottom mt-5" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/logo-dof-multiplans2.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/logo-sfh.jpeg" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/logo-minibang2.gif" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/logo-hyna.jpg" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/hcv2.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/panneaux-hyna-discord.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/panneaux-hyna-IG.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/panneaux-hyna-twitter.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/panneaux-hyna-youtube.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/emote0.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/emote1.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/emote2.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/emote3.png" class="d-block w-50 card-img-bottom mx-auto" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

<?php
    include "inc/footer.php";
?>
