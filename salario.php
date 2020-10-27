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
                        <a class="nav-link" href="pares.php">Pares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="salario.php">Salario</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">SALARIO</h5>
                <p class="card-text">Módulo para calcular el salario de un empleado.</p>
                <p>Valor hora: $20.000</p>
                <p>Valor hora extra: $25.000</p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <form action="salario.php" method="POST">
                                <div class="form-group">
                                    <label for="horas">Horas laboradas:</label>
                                    <input type="number" class="form-control" name="horas" id="horas" placeholder="Introduzca las horas laboradas en la semana">
                                </div>                                
                                <button type="submit" class="btn btn-primary mt-4" name="botonCalcular">Calcular salario</button>
                            </form>
                            <div class="mt-2">
                                <?php if(isset($_POST["botonCalcular"])): ?>
                                        <?php
                                        $valorHora = 20000;
                                        $valorHoraExtra = 25000;
                                        $horasTrabajadas = $_POST["horas"];
                                        if($horasTrabajadas<=40):
                                            $salario = $horasTrabajadas * $valorHora;
                                        else:
                                            $salario = (40 * $valorHora) + (($horasTrabajadas - 40) * $valorHoraExtra);
                                        endif ?>
                                        <?php $salarioForm = number_format($salario, 0, ',', '.'); ?>
                                        <h4 class="text-primary"><?php echo "Su salario semanal es $$salarioForm"; ?></h4>
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