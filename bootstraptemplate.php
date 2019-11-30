<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title><?= $title ?></title>
    </head>

    <body>

<div class="card bg-dark text-white border-0 blogcard">
    <div class="card-img-overlay w-75 mx-auto my-5">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" routerLink="/">Travelex</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" routerLink="/">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" routerLink="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" routerLink="/travels">Travels</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="my-5 text-dark">
            <h3 id="blogtitle">Blog</h3>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <ul class="list-unstyled">
        <li class="media shadow rounded">
            <img
                class=""
                src="https://cdn.pixabay.com/photo/2014/07/01/12/34/street-381227_1280.jpg"
                alt="Generic placeholder image">
                <div class="media-body p-5 text-center align-self-center">
                    <p class="font-italic text-muted">
                        <span class="mr-2">by Autor</span>
                        <span>Oct 22, 2019</span>
                    </p>
                    <h5 class="mt-0 mb-1">List-based media object</h5>
                    <p class="text-muted">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                        felis in faucibus...</p>
                    <hr>
                        <p class="text-muted">#Lorem #Ipsum</p>
                    </div>
                </li>
                <li class="media my-4 shadow rounded">
                    <div class="media-body p-5 text-center align-self-center">
                        <p class="font-italic text-muted">
                            <span class="mr-2">by Autor</span>
                            <span>Oct 22, 2019</span>
                        </p>
                        <h5 class="mt-0 mb-1">List-based media object</h5>
                        <p class="text-muted">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                            felis in faucibus...</p>
                        <hr>
                            <p class="text-muted">#Lorem #Ipsum</p>
                        </div>
                        <img
                            class=""
                            src="https://cdn.pixabay.com/photo/2014/07/10/10/20/golden-gate-bridge-388917_1280.jpg"
                            alt="Generic placeholder image"></li>
                        <li class="media shadow rounded">
                            <img
                                class=""
                                src="https://cdn.pixabay.com/photo/2016/11/29/06/20/blonde-1867768_1280.jpg"
                                alt="Generic placeholder image">
                                <div class="media-body p-5 text-center align-self-center">
                                    <p class="font-italic text-muted">
                                        <span class="mr-2">by Autor</span>
                                        <span>Oct 22, 2019</span>
                                    </p>
                                    <h5 class="mt-0 mb-1">List-based media object</h5>
                                    <p class="text-muted">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus...</p>
                                    <hr>
                                        <p class="text-muted">#Lorem #Ipsum</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <footer class="page-footer mt-4 py-4 px-0">
                            <div class="row">
                                <div class="col-12 text-center col-md-4 text-md-right p-0">
                                    <p class="mt-2">
                                        @Copyright 2019 | Barbara Schuch
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 mt-2 text-center p-0">
                                    <div class="socialmedia-icon">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="socialmedia-icon">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </div>
                                    <div class="socialmedia-icon">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </div>
                                    <div class="socialmedia-icon">
                                        <a href="#">
                                            <i class="fab fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
</footer>
<!--JQuery<--->
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!--popper.js--->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<!--bootstrap.js--->
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<!---JS--->
<!-- <script type="text/javascript" src="../JS/script.js"></script> -->
<script type="text/javascript" src="../JS/script-ajax.js" charset="UTF-8"></script>
</body>

</html>