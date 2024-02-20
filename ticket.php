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
<script src="js/tickets.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container">    
    <div class="row home-sections">
        <h2 class="text-center">Sistema de Incidencias</h2>    
        <?php include('menus.php'); ?>        
    </div> 
    <div class="panel panel-default">       
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-10">
                    <h3 class="panel-title">Ver y Administrar Tickets</h3>
                </div>
                <div class="col-md-2 text-right">
                    <button type="button" name="add" id="createTicket" class="btn btn-success btn-xs">Crear Ticket</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <p class="lead">Aquí puedes ver y administrar los tickets que pueden tener respuestas del equipo de soporte.</p>   
            <table id="listTickets" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Ticket ID</th>
                        <th>Tema</th>
                        <th>Departamento</th>
                        <th>Creado por</th>                  
                        <th>Creado</th>    
                        <th>Estatus</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Detalles</th>                   
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí se mostrarán los tickets -->
                </tbody>
            </table>
        </div>
    </div>
    <?php include('add_ticket_model.php'); ?>
</div>  
<?php include('inc/footer.php');?>
