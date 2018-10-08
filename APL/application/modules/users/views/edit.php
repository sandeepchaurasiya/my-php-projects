 
		<?php include('assets/include/header.php');?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Users</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			   <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update  Users
                        </div>
	<div class="panel-body">
                            <div class="row">	
		<?=form_open('users/edit/'.$data->u_id)?>
		
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="name" value="<?=$data->name?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('name','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							 <div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Username</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="username" value="<?=$data->username?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('username','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div> 
							
				
						<!--<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Password</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="password" name="password" value="=//$data->password" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									 //echo form_error('password','<div class="alert alert-danger ">', '</div>'); 
									</div>
                                </div>
							</div>-->
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">User Group</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <select name="user_group" class="form-control"><option value="">Select User Group</option><option value="Admin"  <?=(($data->user_group == 'Admin')?"selected":"")?> >Admin</option><option value="Member"  <?=(($data->user_group == 'Member')?"selected":"")?> >Member</option><option value=""  <?=(($data->user_group == '')?"selected":"")?> ></option></select></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('user_group','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Update Users'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
		<?php include('assets/include/footer.php');?>
		