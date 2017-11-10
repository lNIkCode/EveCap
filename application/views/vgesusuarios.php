<div class="row">
<div class="col-md-8">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <form action="<?php echo base_url(); ?>cgesusuarios/Registrarpersona" method="POST" class="form-horizontal">
                 <div class="box-body">
                <?php echo "Usuario de Inicio:" . $this->session->userdata('s_usuario'); ?>
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">DNI/label></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txtdniper" id="inputEmail3" placeholder="Ingrese su nimero de DNI">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nombre/label></label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txtnomper" id="inputEmail3" placeholder="Ingrese su nombre">
                  </div>
                  </div>


                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Paterno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtappper" id="inputEmail3" placeholder="Ingrese apellido paterno">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Apellido Materno</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txtapmper" id="inputEmail3" placeholder="Ingrese Apellido Materno">
                  </div>
                  </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Teléfono </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txttelper" id="inputEmail3" placeholder="Ingrese su numero de telefono">
                  </div>
                  </div>

                   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txtemailper" id="inputEmail3" placeholder= "ingrese su Email">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control"  name="txtfnacper" id="inputEmail3" placeholder= "ingrese su fecha de nacimiento">
                  </div>
                </div>

                <div class="form-group">
                <label class=" col-sm-2 control-label">Perfil: </label>
                <select id="cboperfil" name="cboperfil" class="form-control">
                  <option value="">Eliga un Perfil</option>
                </select>
              </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  name="txtuserper" id="inputEmail3" placeholder= "ingrese su Usuario">
                  </div>
                </div>


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Clave</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control"  name="txtupassper" id="inputEmail3" placeholder= "ingrese su Usuario">
                  </div>
                </div>

                  </div>
                </div>

              <div class="box-footer">
                <div class="col-sm-10 pull-right">
                <button type="submit" class="btn btn-info pull-right">Registar</button>
              </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
</div>

<script type="text/javascript">
  var baseurl = "<?php echo base_url(); ?>";
</script>
