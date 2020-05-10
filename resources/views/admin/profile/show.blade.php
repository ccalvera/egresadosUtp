@extends('layouts.admin.layout')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Perfil de Administrador</h1>
<p class="mb-4"> A continuación encontrará sus datos personales y las opciones correspondientes para modificarlos. </p>

<!-- Content Row -->
<div class="row">

  <div class="col-xl-8 col-lg-7">

    <!-- Area Chart -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Información personal</h6>
      </div>

      <div>

        <div class="card-body">
          
          
          <form action="" method="POST">
                <div class="row">
                    <div class="col form-group">
                        <label for="pillInput">Cedula o DNI</label>
                        <input type="text" class="form-control input-pill" id="dni" placeholder="12345.." disabled>
                    </div>

                    <div class="col form-group">
                        <label for="email">Direccion de Correo</label>
                        <input type="email" class="form-control input-pill" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@magic.co" disabled>
                    </div>

                </div>

                <div class="row">
                    <div class="col form-group">
                        <label for="pillInput">Nombres</label>
                        <input type="text" class="form-control input-pill" id="primerNombre" placeholder="ej: Pepito" disabled>
                    </div>
                    <div class="col form-group">
                        <label for="pillInput">Apellidos</label>
                        <input type="text" class="form-control input-pill" id="primerApellido" placeholder="ej: Perez" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col form-group">
                        <label for="direccion">Telefono</label>
                        <input type="text" class="form-control input-pill" id="direccion" placeholder="tel:312312313" disabled>
                    </div>
                    <div class="col form-group">
	            	        <label for="direccion">Direccion Fisica</label>
	            	        <input type="text" class="form-control input-pill" id="direccion" value="Cll 13 #123-213" disabled>
                    </div>
                </div>

          </form>
          
        </div>

        <div align="center">
          <!-- Button Change profile Photo -->
          
          <a href="#" class="btn btn-primary btn-icon-split" style="margin-bottom: 20px;">
            <span class="icon text-white-50">
              <i class="fas fa-flag"></i>
            </span>
            <span class="text">Modificar información personal</span>
          </a>

        </div>

      </div>
    </div>

    
  </div>

  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">César Jaramillo</h6>
      </div>
      
      
      <!-- Card Body -->
      <div class="card-body" >
        <div class="imgPeople pt-4" >
          
          <div align="center" >
            
            <!-- Profile  Photo -->
            <img src="/img/people.png" style="width:60%" >



          </div>

        </div>
          



      </div>
    </div>
  </div>
</div>

</div>
<!-- end main content -->

@endsection