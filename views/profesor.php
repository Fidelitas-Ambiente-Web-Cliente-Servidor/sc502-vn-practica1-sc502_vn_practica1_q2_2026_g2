<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor - TechCore Academy</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profesores.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <a href="../index.php?controller=Profesores&action=index"
       class="btn btn-secondary mb-4">
        ← Volver
    </a>

    <div class="card shadow">

        <div class="card-body">

            <img
                src="../Imagenes/<?php echo htmlspecialchars($profesor['foto']); ?>"
                alt="<?php echo htmlspecialchars($profesor['nombre']); ?>"
                class="img-fluid mb-4"
                style="max-width:250px;">

            <h1>
                <?php echo htmlspecialchars($profesor['nombre']); ?>
            </h1>

            <h4 class="text-primary">
                <?php echo htmlspecialchars($profesor['especialidad']); ?>
            </h4>

            <hr>

            <p>
                <strong>Correo:</strong>
                <?php echo htmlspecialchars($profesor['correo']); ?>
            </p>

            <p>
                <?php echo htmlspecialchars($profesor['descripcion']); ?>
            </p>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>