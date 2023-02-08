<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario Mascota</title>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="Pagina Principal.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="form-cliente.php">Cliente</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="form-mascota.php">Mascotas</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="Form-medicam.php">Medicamento</a>
                    </li>
                    <li class="nav-item fw-bold">
                        <a class="nav-link active" aria-current="page" href="Index Login.php">Exit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="recive-mascotas.php" method="post">

        <div class="container" style="margin-top: 30px;">
            <div>
                <center> <img src="mascota-amigable.png" alt="" width="80px" height="80px"> </center>
            </div>
        </div>

        <div class="container mt-3" style="width: 600px;">

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Nombre.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ploky" name="NombreM" autofocus>
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Apellido.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Perdomo" name="ApellidoM">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Color.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Negro" name="Color">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Edad.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="2" name="Edad">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Raza.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="BullDog" name="Raza">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Sexo.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Macho" name="Sexo">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Altura.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="25cm" name="Altura">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Datos de Consulta.</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Detalles"></textarea>
            </div>

            <br>

            <div>
                <center>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </center>
            </div>

            <br><br>

        </div>


    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>