<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/css/styles.css">
    <title>Simulador de enfrentamientos - Liga Española</title>

</head>
<body>

<div class="container">
    <h1>Simulador de enfrentamientos - Liga Española</h1>

    <h2>Enfrentamientos de Hoy</h2>
    <table>
        <tr>
            <th>Equipo Local</th>
            <th>VS</th>
            <th>Equipo Visitante</th>
        </tr>
        <tr>
            <!-- Aquí se mostrará el próximo enfrentamiento -->
            <td>Real Madrid C.F.</td>
            <td>VS</td>
            <td>F.C. Barcelona</td>
        </tr>
    </table>

    <h2>Resultado Último Enfrentamiento</h2>
    <p>Aquí se mostrará el resultado del último enfrentamiento.</p>

    <form action="index.php?ctl=enfrentamiento" method="POST">
    <button type="submit" name="enviar" value="Enviar">Ir a Enfrentamiento</button>
    </form>
</div>

</body>
</html>
