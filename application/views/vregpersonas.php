
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
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>cregpersonas/registrar">
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
                  <div class="col-sm-2"></div>
                  <div class="col-sm-3">
                  <label>Evento: </label>
                  <select id="cboevento" class="form-control">
                    <option value="">Eliga Evento</option>
                  </select>
                  </div>
                  <div class="col-sm-3">
                  <label>Sub Evento: </label>
                  <select id="cbosubevento" class="form-control">
                    <option value="">Eliga Sub Evento</option>
                  </select>
                  <br><br><br>
                  </div>

                </div>
                  <div class="form-group">

                  <div class="col-sm-2">
                  <label>DNI</label>
                  <input type="text" class="form-control" placeholder="Dni" name="txtdni">
                  </div>
                  <div class="col-sm-3">
                  <label>NOMBRES</label>
                  <input type="text" class="form-control" placeholder="Nombres" name="txtnombres">
                  </div>
                  <div class="col-sm-3">
                  <label>APELLIDO PATERNO</label>
                  <input type="text" class="form-control" placeholder="Apellido Paterno" name="txtapp">
                  </div>
                  <div class="col-sm-3">
                  <label>APELLIDO MATERNO</label>
                  <input type="text" class="form-control" placeholder="Apellido Materno" name="txtapm">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default pull-right" onclick="<?php echo base_url(); ?>cregpersonas">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" value="Ingresar">Ingresar</button>
                <br><br>
              </div>
              <!-- /.box-footer -->
              <div class="col-md-12">
              <div class="box">

            <!-- /.box-header -->
            <div class="box box-primary">
              <table id="tblAsistencia" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 5%;background-color: #006699; color: white;">#</th>
                  <th style="width: 10%;background-color: #006699; color: white;">Dni</th>
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
            </form>
          </div>
      <!-- /.box -->
    </div>
  </div>
</section>

<script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
</script>

<?php
    require("reniec/curl.php");
    require("reniec/reniec.php");

    $persona = new Reniec();
    $dni     ="46907987";

    print_r($persona->search($dni));
