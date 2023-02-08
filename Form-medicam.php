<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario Medicamento</title>
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

    <form action="recibe-medicamento.php" method="post">

        <div class="container" style="margin-top: 30px;">
            <div>
                <center> <img src="medico.png" alt="" width="100px" height="100px"> </center>
            </div>
        </div>

        <div class="container mt-3" style="width: 600px;">

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Veterinario.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vet. Daniel" name="VeterinarioF" autofocus>
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Dueño.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kelvin Eneas" name="DueñoF" autofocus>
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Mascota.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ploky" name="MascotaF">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlInput1" class="form-label">Medicamento.</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Acetaminophen" name="MedicamentoF">
            </div>

            <div class="mb-2">
                <label for="exampleFormControlTextarea1" class="form-label">Datos de Medicamento.</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="DetallesF"></textarea>
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