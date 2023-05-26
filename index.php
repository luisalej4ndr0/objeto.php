<?php
    $productos = [
        [
            'nombre' => 'Tablet',
            'precio' => 200,
            'disponibilidad' => true

        ],
        [
            'nombre' => 'television 24',
            'precio' => 300,
            'disponibilidad' => true 
        ],
        [
            'nombre' => ' Monitor curve',
            'precio' => 400,
            'disponibilidad' => false 
        ]       
    ];
    $json = '{"nombre":"luis","edad":16,"ciudad":"Bucaramanga"}';

    $data = json_decode($json);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- /*
    <main>
        <pre class="resultado">
            <?php 
                var_dump($productos);
                $json = json_encode($productos.JSON_UNESCAPED_UNICODE);
            ?>
            <br>
            <?php 
                var_dump($json)
            ?>
        </pre>  
    </main>
    <table class="contenedor">
        <thead>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
        </thead>
        <tbody>
            <td><?php echo $data->nombre ?></td>
            <td><?php echo $data->edad ?></td>
            <td><?php echo $data->ciudad ?></td>

        </tbody>
    </table><br><br> -->
   
<?php
    require_once ('/home/apolm01-017/objeto.php/Productos.php');
    $Producto = array (
         new Productos('tablet',100,5,'true'),
         new Productos('television 24',200,5,'true'),
         new Productos('monitor curve',600,4,'false')
    )
    ?>
    <?php foreach ($Producto as $i): ?>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Stock</th>
            </thead>
            <tbody>
                <td> <?php echo $i->getNombre();?></td>
                <td> <?php echo $i->getPrecio();?></td>
                <td> <?php echo $i->getEstado();?></td>
                <td> <?php echo $i->getStock();?></td>
            </tbody>
        </table>
        
    <?php endforeach?>
    



   
</body>
</html>