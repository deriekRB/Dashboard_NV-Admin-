<!--<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->

  <!-- Bootstrap CSS v5.2.1 -->
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">-->
    <?php require('./layout/header.php')?>

    <link  rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
    .home-section{
  position: relative;
	
 
  left: 200px;

  
  transition: all 0.5s ease;
 
}
</style>

<main>
<?php require('./layout/menu.php')?>
    <!--menu-->  
    <!-- Button trigger modal -->
  <div class="text-center mt-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Asignar categoria de usuario
    </button>
  </div>
  
  <div class="text-center mt-5">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
    Actualizar categoria de usuario
    </button>
  </div>
  
  
  <!-- Modal registro-->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Registrar categoría de usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post">
                <div class="row mb-3">
                    <label for="nombre_usuario" class="col-3 col-form-label">Nombre de usuario</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="user_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="categoria" class="col-3 col-form-label">Ingrese la categoria de este usuario</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="categoria">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="categoria2" class="col-3 col-form-label">Ingrese segunda categoria (opcional)</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="categoria2">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Confirmar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Modal actualizar-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Actualizar categoría de usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="post">
                <div class="row mb-3">
                    <label for="nombre_usuario" class="col-3 col-form-label">Nombre de usuario</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="user_name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="categoria" class="col-3 col-form-label">Ingrese nueva categoria para este usuario</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="categoria">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="categoria2" class="col-3 col-form-label">Actualizar segunda categoria (opcional)</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="categoria2">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Confirmar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  </main>
  <script src="bootstrap/js/bootstrap.min.js">

  </script>
 
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <!--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>-->
  


