<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Asesores-App: Ingresar</title>
</head>
<body>
    

    <div class="container mt-5" id="cont_logi">
        <div class="row">
            <div class="col-md-6" id="cont_img_log">
                <h2 class="title_app">Asesores App</h2>
                <small class="desc_app">Sistema rápido y eficaz para la gestion de la información de tus asesores</small>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,224L120,208C240,192,480,160,720,122.7C960,85,1200,43,1320,21.3L1440,0L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
                <img src="../img/aplicacion-movil.png" width="200px" alt="">
            </div>
            <div class="col-md-6" id="cont_form">
                <h5 class="text-center mt-4 mb-3" id="title_log">Bienvenido</h5>
                <form action="<?=site_url('/login')?>" method="post">
                    <div class="input-group mb-4">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" class="form-control" name="Usuario" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                        <input type="password" class="form-control" name="clave" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <button class="btn btn-primary" type="submit">Acceder <i class="fa-solid fa-right-to-bracket"></i></button>
                </form>
            </div>
        </div>    
    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>
</body>
</html>