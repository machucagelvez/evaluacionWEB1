<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller WEB1</title>
    <link rel="stylesheet" href="estilos.css">
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
                        <a class="nav-link active" href="index.php">Calculadora</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gimnasio.php">Gimnasio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pares.php">Pares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salario.php">Salario</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">CALCULADORA</h5>
                <p class="card-text">Módulo para realizar operaciones básicas.</p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">                    
                            <form action="index.php" method="POST">
                                <div class="row mt-5">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Número 1" name="numero1">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Número 2" name="numero2">
                                    </div>
                                </div>
                                <select class="form-control mt-4" id="operacion" name="operacion">
                                    <option>Sumar</option>
                                    <option>Restar</option>
                                    <option>Multiplicar</option>
                                    <option>Dividir</option>
                                </select>
                                <button type="submit" class="btn btn-primary mt-4" name="botonIgual">=</button>
                            </form>
                            <div class="text-primary mt-2">
                            <?php if(isset($_POST["botonIgual"])): ?>
                                <?php 
                                    $numero1 = $_POST["numero1"];
                                    $numero2 = $_POST["numero2"];                  
                                    switch($_POST["operacion"]){
                                        case "Sumar":
                                            $suma = $numero1 + $numero2; ?>
                                            <h4><?php echo($numero1." + ".$numero2." = ".$suma); ?></h4>                                        
                                        <?php break;
                                        case "Restar":
                                            $resta = $numero1 - $numero2; ?>
                                            <h4><?php echo($numero1." - ".$numero2." = ".$resta); ?></h4>
                                        <?php break;
                                        case "Multiplicar":
                                            $multiplicacion = $numero1 * $numero2; ?>
                                            <h4><?php echo($numero1." x ".$numero2." = ".$multiplicacion); ?></h4>
                                        <?php break;
                                        case "Dividir":
                                            $division = $numero1 / $numero2; ?>
                                            <h4><?php echo($numero1." / ".$numero2." = ".$division); ?></h4>
                                        <?php break;
                                        }?>
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