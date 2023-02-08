<?php
$vete = $_POST['VeterinarioF'];
$dueñof = $_POST['DueñoF'];
$masc = $_POST['MascotaF'];
$medic = $_POST['MedicamentoF'];
$detaf = $_POST['DetallesF'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Datos Cliente</title>
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

    <div class="container" style="margin-top: 30px;">
            <div>
                <center> <img src="papel.png" alt="" width="80px" height="80px"> </center>
            </div>
        </div>

    <div class="container mt-3">
        <table class="table ">
            <thead class="bg-info">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Veterinario</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Mascota</th>
                    <th scope="col">Medicamento</th>
                    <th scope="col">Datos de consulta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="bg-info" scope="row">1</th>
                    <td> <?php echo $vete ?> </td>
                    <td><?php echo $dueñof ?></td>
                    <td><?php echo $masc ?></td>
                    <td><?php echo $medic ?></td>
                    <td><?php echo $detaf ?></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>