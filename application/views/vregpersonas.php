
<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Asistencia a eventos</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">

                  <label class="col-sm-1 control-label">DNI</label>
                  <div class="col-sm-2">
                  <div class="box-tools">
				            <div class="input-group input-group-sm" style="width: 150px;">
					            <input type="text" name="txtBuscarCiudad" id="txtBuscarCiudad" class="form-control pull-right" placeholder="Buscar DNI">
        					    <div class="input-group-btn">
        					    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        					    </div>
        				    </div>
        			    </div>
                  </div>
                  <div class="col-sm-3"></div>
                  <div class="col-sm-3">
                  <label>Evento: </label>
                  <select id="cbociudad" class="form-control">
                    <option value="">Eliga Evento</option>
                  </select>
                  </div>
                  <div class="col-sm-3">
                  <label>Sub Evento: </label>
                  <select id="cbociudad" class="form-control">
                    <option value="">Eliga Sub Evento</option>
                  </select>
                  <br><br><br>
                  </div>

                </div>
                  <div class="form-group">
                  <div class="col-10"></div>
                  <div class="col-sm-2">
                  <label>DNI</label>
                  <input type="text" class="form-control" placeholder="Dni">
                  </div>
                  <div class="col-sm-3">
                  <label>NOMBRES</label>
                  <input type="text" class="form-control" placeholder="Nombres">
                  </div>
                  <div class="col-sm-3">
                  <label>APELLIDO PATERNO</label>
                  <input type="text" class="form-control" placeholder="Apellido Paterno">
                  </div>
                  <div class="col-sm-3">
                  <label>APELLIDO MATERNO</label>
                  <input type="text" class="form-control" placeholder="Apellido Materno">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default pull-right">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Ingresar</button>
                <br><br>
              </div>
              <!-- /.box-footer -->
              <div class="col-md-12">
              <div class="box">

            <!-- /.box-header -->
            <div class="box box-primary">
              <table id="tblPersonas" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;background-color: #006699; color: white;">#</th>
                  <th style="width: 10%;background-color: #006699; color: white;">dni</th>
                  <th style="width: 15%;background-color: #006699; color: white;">Nombre</th>
                  <th style="width: 10%;background-color: #006699; color: white;">Paterno</th>
                  <th style="width: 10%;background-color: #006699; color: white;">Materno</th>
                  <th style="width: 10%;background-color: #006699; color: white;">Sub Evento</th>
                  <th style="width: 10%;background-color: #006699; color: white;">Hora de Ingreso</th>

                </tr>
              </thead>
              <tbody></tbody>

              </table>
            </div>

          </div>
        </div>
              <table border="1">
                <tr>
                  <th>DNI</th>
                  <th>NOMBRE</th>
                  <th>Ap Paterno</th>
                  <th>Ap Materno</th>
                  <th>Car. Verificacion</th>
                  <th>Car. Ver Anterior</th>
                </tr>
              </table>
            </form>
          </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<?php
	require ("reniec/curl.php");
	require ("reniec/reniec.php");

	$persona = new Reniec();
	$dni     ="46741457";

	print_r( $persona->search($dni) );
