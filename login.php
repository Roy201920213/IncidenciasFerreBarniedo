<<?php 
include 'init.php';
if($users->isLoggedIn()) {
    header('Location: ticket.php');
}
$errorMessage = $users->login();
include('inc/header.php');
?>
<title>Sistema de incidencias FerreBarniedo</title>
<?php include('inc/container.php');?>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .contact {
        margin: 0 auto;
        text-align: center;
    }
    .login-form {
        margin: 0 auto;
        max-width: 400px; /* Ajusta el ancho del formulario según tus preferencias */
    }
    .title {
        margin-bottom: 20px; /* Agrega espacio entre el título y el formulario */
    }
</style>
<div class="container contact">    
    <h2 class="text-center title">Sistema de Incidencias</h2>    
    <div class="col-md-6 login-form">                    
        <div class="panel panel-info">
            <div class="panel-heading" style="background:#00796B;color:white;">
                <div class="panel-title">Inicio de sesión de usuario</div>                        
            </div> 
            <div style="padding-top:30px" class="panel-body" >
                <?php if ($errorMessage != '') { ?>
                    <div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
                <?php } ?>
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" style="background:white;" required>                                        
                    </div>                                
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password"placeholder="password" required>
                    </div>
                    <div style="margin-top:10px" class="form-group">                               
                        <div class="col-sm-12 controls">
                          <input type="submit" name="login" value="Login" class="btn btn-success">                          
                        </div>                      
                    </div>  

                </form>   
            </div>                     
        </div>  
    </div>
</div>  
<?php include('inc/footer.php');?>
