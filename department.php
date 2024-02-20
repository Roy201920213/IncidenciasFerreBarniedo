<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
    header("Location: login.php");    
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>Sistema de incidencias FerreBarniedo</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>        
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/general.js"></script>
<script src="js/department.js"></script>
<link rel="stylesheet" href="css/style.css" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: 'Montserrat', sans-serif;
    }
    .panel-title {
        font-size: 20px;
    }
    .btn-success {
        background-color: #4CAF50;
        border: none;
    }
    .btn-success:hover {
        background-color: #45a049;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
    }
    .table th, .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .table th {
        background-color: #f2f2f2;
        color: #333;
    }
    .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .table tbody tr:hover {
        background-color: #ddd;
    }
</style>
<?php include('inc/container.php');?>
<div class="container">    
    <div class="row home-sections">
        <div class="col-md-12">
            <h2 class="text-center">Sistema de Incidencias</h2>
            <?php include('menus.php'); ?>        
        </div>
    </div> 
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title">Lista de Departamentos</h3>
                </div>
                <div class="col-md-2 text-right">
                    <button type="button" name="add" id="addDepartment" class="btn btn-success btn-xs">Agregar Nuevo</button>
                </div>
            </div>
        </div>
                    
        <table id="listDepartment" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Departamento</th>                    
                    <th>Estatus</th>
                    <th></th>
                    <th></th>                                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Departamento A</td>
                    <td>Activado</td>
                    <td><button type="button" class="btn btn-primary btn-xs">Editar</button></td>
                    <td><button type="button" class="btn btn-danger btn-xs">Eliminar</button></td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>
    
    <div id="departmentModal" class="modal fade">
        <div class="modal-dialog">
            <form method="post" id="departmentForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i> Agregar Departamento</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="department" class="control-label">Departamento</label>
                            <input type="text" class="form-control" id="department" name="department" placeholder="Departamento" required>            
                        </div>
                        <div class="form-group">
                            <label for="status" class="control-label">Estatus</label>
							<label for="status" class="control-label">Editar</label>                  
                            <select id="status" name="status" class="form-control">
                                <option value="1">Activado</option>                
                                <option value="0">Desactivado</option>    
                            </select>                        
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="departmentId" id="departmentId" />
                        <input type="hidden" name="action" id="action" value="" />
                        <input type="submit" name="save" id="save" class="btn btn-info" value="Guardar" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
<?php include('inc/footer.php');?>
