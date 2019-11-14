<?php
include("conexion.php") ?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5faa3200c2.js"></script>
    <title>Store</title>


  </head>
  <tbody>
  <div class="row">
	<?php 
    $con=conectar();
    $sql="SELECT *
    FROM produc u";
    $result=mysqli_query($con,$sql);
    while($file=mysqli_fetch_array($result)){
?>
        <div class="col-4 col-md-4 col-lg-4">
					<div class="card" style="width: 18rem;">
						<img src="<?php echo $file['img'] ?>" class="card-img-top" alt="...">
							<div class="card-body">
								<center><h5 class="card-title">Nitro Tech</h5></center>
								<center><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero, laborum quam, nostrum deleniti esse!</p></center>
							<center><div class="container">
							<a href="" data-toggle="modal" data-target="#agregarModal" class="btn btn-success">solicitar</a>
          <div class="modal fade" id="agregarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <form action="compra.php" method="post">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">confirmar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                    
                  <div class="form-group">
                          <input type="text" name="nombre" id="" placeholder="nombre">
                      </div>
                      <div class="form-group">
                          <input type="text" name="usuario" id="" placeholder="usuario ">
                      </div>
                      
                      <div class="form-group">
                          <input type="text" name="direccion" id="" placeholder="direccion">
                      </div>
                      <div class="form-group">
                          <input type="text" name="contraseña" id="" placeholder="contraseña">
                      </div>
											<input type="hidden" name="id" value="<?php echo $file['id_producto'] ?>" id="">
                    
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button class="btn btn-success" type="submit">Aceptar</button>
                </div>
                </form>

							</div></center> 
							</div>
					</div>

				</div>
				<?php 
    }
?>

 
   </div>
      
    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </tbody>
  </body>
</html>