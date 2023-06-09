<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoja de vida | perfil</title>
    <script src="https://kit.fontawesome.com/80573cd677.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <?php include 'partials/navbar.php'; ?>
    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <div class="card-header shadow rounded bg-dark text-white mb-5">
                    <h5 class="card-title">Perfil Profesional</h5>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <?php include 'components/index/list-group.php'; ?>
                    </div>
                    <div class="col-lg-4 col-sm-12 my-lg-0 my-sm-5">
                        <div class="text-center">
                            <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="" class="img-fluid rounded shadow" width="50%">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <img src="https://talently.tech/blog/wp-content/uploads/2022/02/%C2%BFQue-es-un-framework-en-programacion-scaled-1200x675.jpg" alt="" class="img-fluid rounded shadow mb-5">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php include 'components/index/card.php'; ?>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <i class="fa-solid fa-copyright"></i> Todos los derechos reservados
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>