<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller WEB1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <header>
        
    </header>

    <main>
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gimnasio.php">Gimnasio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pares.php">Pares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salario.php">Salario</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">PARES</h5>
                <p class="card-text">Módulo para calcular números pares.</p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <form action="pares.php" method="POST">
                                <div class="form-group">
                                    <label for="cantidad">Cantidad de números pares a calcular</label>
                                    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="Números de pares">
                                </div>                                
                                <button type="submit" class="btn btn-primary mt-4" name="botonCalcular">Calcular</button>
                            </form>
                            <div class="mt-2">
                                <?php if(isset($_POST["botonCalcular"])): ?>
                                    <?php
                                    $cantidad = $_POST["cantidad"];                                    
                                    if ($cantidad<=0) {
                                        $pares = [];
                                    }else {
                                        for ($i=0; $i < $cantidad; $i++) { 
                                            $pares[$i] = ($i+1)*2;
                                        }
                                        if (count($pares)%5!=0) {
                                            $gap = 5 - count($pares)%5;
                                            for ($i=0; $i<$gap; $i++) { 
                                                array_push($pares, null);
                                            }
                                        }
                                    }
                                    ?>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Decena</th>
                                                <th scope="col">Par 1</th>
                                                <th scope="col">Par 2</th>
                                                <th scope="col">Par 3</th>
                                                <th scope="col">Par 4</th>
                                                <th scope="col">Par 5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $inicio = 0;
                                        $filas = $cantidad / 5;
                                        for ($i=1; $i<$filas+1; $i++) { ?> 
                                            <tr>
                                                <th scope="row"><?php echo $i ?></th>                                                
                                                    <td><?php echo($pares[$inicio]); ?></td>
                                                    <td><?php echo($pares[$inicio+1]); ?></td>
                                                    <td><?php echo($pares[$inicio+2]); ?></td>
                                                    <td><?php echo($pares[$inicio+3]); ?></td>
                                                    <td><?php echo($pares[$inicio+4]); ?></td>
                                            </tr>
                                            <?php $inicio += 5; ?>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>