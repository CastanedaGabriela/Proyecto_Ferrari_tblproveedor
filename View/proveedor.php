<h1 class="page-header">Proveedor</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Crud">Agregar Proveedor</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Direccion</th>
            <th>Nombre de la Empresa</th>
            <th>Ciudad</th>
            <th >Estado</th>
            <th >Transporte</th>
            <th >Fecha de Llegada</th>
            <th >Correo</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->direccion; ?></td>
            <td><?php echo $r->nomempresa; ?></td>
            <td><?php echo $r->ciudad; ?></td>
            <td><?php echo $r->estado; ?></td>
            <td><?php echo $r->transporte; ?></td>
            <td><?php echo $r->fechallegada; ?></td>
            <td><?php echo $r->correo; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=proveedor&a=Crud&idfabrica=<?php echo $r->idfabrica; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=proveedor&a=Eliminar&idfabrica=<?php echo $r->idfabrica; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
