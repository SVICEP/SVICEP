<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">

	<title></title>

    <!-- Bootstrap core CSS -->
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      body{
      	background-color: #34495e;
      }

      .txwhite{
      	color: white;
      }

      .pad{
      	padding: 4rem;
      }

      .stdr{
      	display: flex;
      	height: 100%;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="sidebars.css" rel="stylesheet">

</head>
<body>

	<div class="stdr">
		<div class="d-flex flex-column col-auto flex-shrink-0 p-3 text-white bg-dark min-vh-100" style="width: 280px;">
		    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
		      <span class="fs-4">SVICEP</span>
		    </a>
		    <hr>
		    <ul class="nav nav-pills flex-column mb-auto">
		      <li class="nav-item">
		        <a href="index.php" class="nav-link text-white" aria-current="page">
		          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
		          Inicio
		        </a>
		      </li>
		      <li>
		        <a href="agregarcont.php" class="nav-link text-white">
		          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
		          Agregar Registro
		        </a>
		      </li>
		      <li>
		        <a href="editarcont.php" class="nav-link active">
		          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
		           Editar Registro
		        </a>
		      </li>
		      <li>
		        <a href="eliminarcont.php" class="nav-link text-white">
		          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
		          Eliminar Regsitro
		        </a>
		      </li>
		    </ul>
		    <hr>
		    <div class="dropdown">
		      <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
		        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
		        <strong>Administrador</strong>
		      </a>
		      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
		        <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
		      </ul>
		    </div>
		</div>

		<div class="d-flex flex-column col-auto pad col-5">
	        <h4 class="mb-3 txwhite">Editar contenido de producto afcetados por el cambio cliamtico a la pagina</h4>
	        <form class="needs-validation" novalidate>
	          <div class="row g-3">
	            <div class="col-sm-6">
	              <label for="firstName" class="form-label txwhite">Nombre del producto afectado</label>
	              <input type="text" class="form-control" id="anio" placeholder="" required>
	              <div class="invalid-feedback">
	                Este campo es requerido
	              </div>
	            </div>

	            <div class="col-md-8">
	              <label for="username" class="form-label txwhite">Año</label>
	              <div class="input-group has-validation">
	                <input type="text" class="form-control" id="info" placeholder="" required>
	              <div class="invalid-feedback">
	                  Este campo es requerido
	                </div>
	              </div>
	            </div>

	            <div class="col-md-8">
              <label for="username" class="form-label txwhite">Cantidad en quintales</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="info" placeholder="" required>
              <div class="invalid-feedback">
                  Este campo es requerido
                </div>
              </div>
            </div>

	          </div>

	          <hr class="my-4">
	          <div style="width: 150px">
	           <button class="w-100 btn btn-primary btn-lg" type="submit">Editar</button>
	      	  </div>
	        </form>
    	</div>

	    <div class="d-flex flex-column col-auto pad col-5">
	    	<table class="table table-dark table-striped">
	  			<thead class="table-dark">
	   				<tr>
	   					<th scope="col"> Nombre prodcuto </th>
	   					<th scope="col"> Año </th>
	   					<th scope="col"> Cantidad de quintales </th>
	   					<th scope="col"> </th>
	   				</tr>
	  			</thead>
	  			<tbody>
	    			<tr>
	    				<td> Maiz </td>
	    				<td> 2018 </td>
	    				<td> 500,000 </td>
	    				<td><button class="btn btn-primary" type="submit"> ed </button></td>
	    			</tr>
	  			</tbody>
			</table>

	    </div>

	</div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>

</body>
</html>