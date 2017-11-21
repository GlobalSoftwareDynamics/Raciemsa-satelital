<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>MASTER-NUEVO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        .slider{
            background: url(images/bg-3.png);
            background-size: cover;
            background-position: center;
            height: 400px;
        }

    </style>
</head>
<body>
    <div class="container-fluid bg-dark fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="images/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                Bootstrap
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link mr-4" href="#">Disabled</a>
                        <div><a href="#" class="btn btn-danger">Contacto</a></div>
                    </div>
            </div>
        </nav>
    </div>
    <!--fin menu-->
    <!--slider-->
    <div class="container-fluid slider d-flex flex-column justify-content-center align-items-center">
        <div class="text-center text-white">
        <h3>Lorem ipsum dolor sit</h3>
        <h1 class="display-4">Lorem ipsum dolor</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
        </div>
        <form action="" class="form-inline">
            <div class="form-group mr-4">
                <input type="text" placeholder="Lorem ipsum dolor" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-danger" value="Enviar">
            </div>
        </form>
    </div>
    <!--fin slider-->
    <!--main-->
    <div class="container mb-5">
        <h3>Blog</h3>
        <p>Lorem ipsum dolor sit amet, consectetur</p>
        <hr>
        <div class="row">
        <!--articulos-->
        <div class="col-9">
            <div class="row mb-5">
                <div class="col-3">
                <img src="images/cards1.png" alt="" class="img-fluid">
                <p class="lead text-center">Fecha</p>
                </div>
                <div class="col-9">
                    <a href="#"><h3>Lorem ipsum dolor sit amet jah</h3></a>
                    <a href=""> <span class="badge badge-primary">Primary</span></a>
                    <a href=""> <span class="badge badge-secondary">Secondary</span></a>
                    <a href=""> <span class="badge badge-success">Success</span></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut beatae consequuntur,
                        culpa, deleniti dolore eaque earum enim error et excepturi explicabo facere fugit in incidunt
                        ipsa magni maxime molestiae nisi obcaecati officiis quam quasi quibusdam repellendus sint soluta
                        ut vel voluptas voluptatem voluptates. Aut iusto nulla perspiciatis placeat voluptate.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, voluptatibus!</p>
                    <a href="#" class="btn btn-warning btn-sm">Leer mas...</a>
                </div>
            </div>
                <div class="row mb-5">
                    <div class="col-3">
                        <img src="images/cards1.png" alt="" class="img-fluid">
                        <p class="lead text-center">Fecha</p>
                    </div>
                    <div class="col-9">
                        <a href="#"><h3>Lorem ipsum dolor sit amet jah</h3></a>
                        <a href=""> <span class="badge badge-primary">Primary</span></a>
                        <a href=""> <span class="badge badge-secondary">Secondary</span></a>
                        <a href=""> <span class="badge badge-success">Success</span></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut beatae consequuntur,
                            culpa, deleniti dolore eaque earum enim error et excepturi explicabo facere fugit in incidunt
                            ipsa magni maxime molestiae nisi obcaecati officiis quam quasi quibusdam repellendus sint soluta
                            ut vel voluptas voluptatem voluptates. Aut iusto nulla perspiciatis placeat voluptate.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, voluptatibus!</p>
                        <a href="#" class="btn btn-warning btn-sm">Leer mas...</a>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-3">
                        <img src="images/cards1.png" alt="" class="img-fluid">
                        <p class="lead text-center">Fecha</p>
                    </div>
                    <div class="col-9">
                        <a href="#"><h3>Lorem ipsum dolor sit amet jah</h3></a>
                        <a href=""> <span class="badge badge-primary">Primary</span></a>
                        <a href=""> <span class="badge badge-secondary">Secondary</span></a>
                        <a href=""> <span class="badge badge-success">Success</span></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aut beatae consequuntur,
                            culpa, deleniti dolore eaque earum enim error et excepturi explicabo facere fugit in incidunt
                            ipsa magni maxime molestiae nisi obcaecati officiis quam quasi quibusdam repellendus sint soluta
                            ut vel voluptas voluptatem voluptates. Aut iusto nulla perspiciatis placeat voluptate.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, voluptatibus!</p>
                        <a href="#" class="btn btn-warning btn-sm">Leer mas...</a>
                    </div>
                </div>
            <!--menu numero-->
            <div class="btn-toolbar d-flex justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary active">Inicio</button>
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>
                    <button type="button" class="btn btn-secondary">3</button>
                    <button type="button" class="btn btn-secondary">4</button>
                    <button type="button" class="btn btn-secondary active">Final</button>
                </div>
            </div>
            <!--fin menu numero-->
        </div>
        <!--fin articulos-->
        <!-- aside-->
        <div class="col-3">
        <!--cards-->
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Primary card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Secondary card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Success card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h4 class="card-title">Danger card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        <!--fin cards-->
        </div>
        <!--fin aside-->
        </div>
        </div>
    <!--fin main-->
    <!--footer-->
    <footer class="container-fluid bg-dark text-white py-3 text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

    </footer>
    <!--fin footer-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/
    Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-
    vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script> src="js/bootstrap.min.js"</script>
</body>
</html>