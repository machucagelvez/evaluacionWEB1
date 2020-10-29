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
                        <a class="nav-link active" href="gimnasio.php">Gimnasio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pares.php">Pares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salario.php">Salario</a>
                    </li>
                </ul>
            </div>
            <div class="card-body bg-light">
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4 bg-dark text-white">
                            <h5 class="card-title text-primary mt-2">GIMNASIO</h5>
                            <p class="card-text">Módulo para calcular el Índice de Masa Corporal (IMC).</p>
                            <p>IMC = Peso / Altura^2</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-4 bg-dark mt-2 text-white">
                            <form action="gimnasio.php" method="POST">
                                <div class="form-group mt-2">
                                    <label for="peso">Peso (kg)</label>
                                    <input type="number" step=any class="form-control" name="peso" id="peso" placeholder="Peso en kilogramos">
                                </div>
                                <div class="form-group">
                                    <label for="altura">Altura (m)</label>
                                    <input type="number" step=any class="form-control" name="altura" id="altura" placeholder="Altura en metros">
                                </div>
                                <button type="submit" class="btn btn-outline-primary mt-2 mb-2" name="botonCalcular">Calcular IMC</button>
                            </form>
                            <div class="mt-2">
                                <?php if(isset($_POST["botonCalcular"])): ?>
                                    <?php 
                                        $peso = $_POST["peso"];
                                        $altura = $_POST["altura"];
                                        $imc = number_format($peso / ($altura * $altura), 2, ',', '.'); ?>
                                        <h4><?php echo("Su IMC es: ".$imc); ?></h4>
                                        <?php if($imc<18.5): ?>
                                            <h4 class="text-warning"><?php echo("Peso insuficiente"); ?></h4>                                        
                                        <?php elseif($imc>=18.5 && $imc<25): ?>
                                            <h4 class="text-success"><?php echo("Normopeso"); ?></h4>                                            
                                        <?php elseif($imc>=25 && $imc<27): ?>
                                            <h4 class="text-warning"><?php echo("Sobrepeso grado I"); ?></h4>                                            
                                        <?php elseif($imc>=27 && $imc<30): ?>
                                            <h4 class="text-warning"><?php echo("Sobrepeso grado II (preobesidad)"); ?></h4>                                            
                                        <?php elseif($imc>=30 && $imc<35): ?>
                                            <h4 class="text-warning"><?php echo("Obesidad tipo I"); ?></h4>                                            
                                        <?php  elseif($imc>=35 && $imc<40): ?>
                                            <h4 class="text-warning"><?php echo("Obesidad tipo II"); ?></h4>                                            
                                        <?php elseif($imc>=40 && $imc<50): ?>
                                            <h4 class="text-danger"><?php echo("Obesidad tipo III (mórbida)"); ?></h4>                                            
                                        <?php else: ?>
                                            <h4 class="text-danger"><?php echo("Obesidad tipo IV (extrema)"); ?></h4>                                                                                    
                                        <?php endif ?>
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

