<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOOLANDIA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url('public/styles/estilos.css'))?>">
</head>
<body class="fondo">

    <img src=" <?php echo(base_url('public/img/lion.png')) ?>" alt="prueba" class="mx-auto d-block">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4 text-white">

                <form class="mt-5 pb-5" action="<?php echo(base_url('public/animales/crear'))?>" method="POST">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
        
                    <div class="form-group">
                        <label for="comida">Comida</label>
                        <input type="text" class="form-control" id="comida" name="comida">
                    </div>
        
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>
        
                    <button type="submit" class="btn btn-info btn-block" id="envio" name="envio">Registrar</button>

                    <?php if(session("mensaje")):?>
                        <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                            <?= session('mensaje') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>
                </form>
            
            </div>
        </div>

        <div class="row">
         
          <table class="table table-striped table-dark">
            <thead>
             <tr>
               <th>ID</th>
               <th>NOMBRE</th>
               <th>COMIDA</th>
               <th>EDAD</th>
             </tr>
            </thead>
            
            <tbody>

            <?php foreach($animales as $clave=>$valor):?>
               <tr>
                    <td><?php echo($valor->id) ?></td>
                    <td><?php echo($valor->nombre) ?></td>
                    <td><?php echo($valor->comida) ?></td>
                    <td><?php echo($valor->edad) ?></td>
                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
               </tr>
            <?php endforeach?>

             
            </tbody>
          
          </table>
                        
        </div>

        <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($animales as $clave=>$valor):?>

                    <div class="col mb-4">
                        <div class="card h-100">
                        <img src="<?php echo($valor->url) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($valor->nombre) ?></h5>
                                <p><?php echo($valor->nombre." Es un animal de: ".$valor->edad." años") ?></p>
                                <a href="" class="btn btn-danger">Eliminar</a>
                                
                            </div>
                        </div>
                    </div>

                <?php endforeach?>


        </div>

       

        

    </div>

    





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>