<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Tasks</title>
  </head>
  <body>
    <br>
    <div class='container'>
        <div class="row">
            <div class='col'>
                <form class="form-inline" method="post" action="<?php echo site_url("taskcontroller/updateTask"); ?>">
                    <div class="form-group">
                        <label for="title">Tarea a realizar</label>
                        <input type="number" id='id' name='id' readonly value="<?php echo $id ?>">
                        <input type="text" id="title" name="title" class="form-control mx-sm-3" placeholder="titulo" >
                        <input type="text" id="desc" name="desc" class="form-control mx-sm-3" placeholder="descripcion">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
   

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>    
  </body>
</html>