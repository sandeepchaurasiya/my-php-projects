
 
 
 
 <!DOCTYPE html>
<html lang="en">
<?php
if (isset($this->session->userdata['logged_in'])) {

redirect(base_url());
}
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url();?>assets/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url();?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

   <div class="container">
   <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?php echo base_url(); ?>main/login_validation">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus><br/>
									<span class="text-danger"><?php echo form_error('username','<div class="alert alert-danger ">', '</div>'); ?></span> 
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value=""><br/>
									 <span class="text-danger"><?php echo form_error('password','<div class="alert alert-danger ">', '</div>'); ?></span>  
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                              
								 <div class="form-group">  
									<input type="submit" name="insert" value="Login" class="btn btn-lg btn-success btn-block" />  <br/>
								<?php  
								echo '<label class="alert-danger">'.$this->session->flashdata('error').'</label>';  
								?>  
								</div>  
							</fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('assets/include/footer.php');?>