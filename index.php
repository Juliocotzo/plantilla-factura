<?php
require 'vendor/autoload.php';
$latte = new Latte\Engine;
?>

<?php
$facturaDatos = array(
    'nombreEmpresa' => 'Mayfer, Sociedad Anonima',
    'nit' => '12345678',
    'nombre' => 'Mayfer',
    'direccion' => 'Guatemala, Guatemala',
    'numeroAutorizacion' => 'DC403F2E-FBB0-4CB3-A998-896D3B18A4AA',
    'serie' => 'PRUEBAS',
    'no' => '87654321',
    'fecha' => '15-02-2021',
    'nitCliente' => '32165487',
    'nombreCliente' => 'Julio Cotzojay',
    'direccionCliente' => 'Guatemala',
    'productos' => array(
        array(
            'cantidad' => 3,
            'descripcion' => 'Prod1',
            'total' => 100.00
        ),
        array(
            'cantidad' => 2,
            'descripcion' => 'Prod2',
            'total' => 200.00
        )
    ),
    'total' => 300.00,
    'fechaCertificacion' => '15-02-2021',
    'certificadorNombre' => 'G4S DOCUMENTA, S.A.',
    'certificadorNit' => 'NIT: 600102007'

);
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="grid-container">
        <div class="grid-item"></div>
        <div class="grid-item">
            <h1 style="text-align: center">Factura</h1>

            <?php
            $html = $latte->renderToString('template.latte', $facturaDatos);
            echo $html;
            ?>
        </div>
        <div class="grid-item"></div>
    </div>


</body>

</html>