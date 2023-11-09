<h1 class="page-header">
    <?php echo $alm->idfabrica != null ? $alm->direccion : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Proveedor">Proveedor</a></li>
  <li class="active"><?php echo $alm->idfabrica != null ? $alm->direccion : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=proveedor&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idfabrica" value="<?php echo $alm->idfabrica; ?>" />
    
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="Ingrese su direccion" data-validacion-tipo="requerido|direccion" />
    </div>
    
    <div class="form-group">
        <label>Nombre de la Empresa</label>
        <input type="text" name="nomempresa" value="<?php echo $alm->nomempresa; ?>" class="form-control" placeholder="Ingrese el nombre de la Empresa" data-validacion-tipo="requerido|nomempresa" />
    </div>
    
    <div class="form-group">
        <label>Ciudad</label>
        <input type="text" name="ciudad" value="<?php echo $alm->ciudad; ?>" class="form-control" placeholder="Ingrese su ciudad" data-validacion-tipo="requerido|ciudad" />
    </div>
    
    <div class="form-group">
        <label>Estado</label>
        <input type="text" name="estado" value="<?php echo $alm->estado; ?>" class="form-control" placeholder="Ingrese su estado" data-validacion-tipo="requerido|estado" />
    </div>
    
    <div class="form-group">
        <label>Transporte</label>
        <input type="text" name="transporte" value="<?php echo $alm->transporte; ?>" class="form-control" placeholder="Ingrese su transporte" data-validacion-tipo="requerido|transporte" />
    </div>

    <div class="form-group">
        <label>Fecha de Llegada</label>
        <input type="date" name="fechallegada" value="<?php echo $alm->fechallegada; ?>" class="form-control" placeholder="Ingrese su fecha de llegada" data-validacion-tipo="requerido|date" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $alm->correo; ?>" class="form-control" placeholder="Ingrese su correo" data-validacion-tipo="requerido|correo" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
