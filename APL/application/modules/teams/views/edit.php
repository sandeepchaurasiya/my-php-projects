 
		<?php include('assets/include/header.php');?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teams</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			   <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update  Teams
                        </div>
	<div class="panel-body">
                            <div class="row">	
		<?=form_open_multipart('teams/edit/'.$data->id)?>
		
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Logo</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                        	 <input type="hidden" name="image_old" value="<?php echo $data->logo ?>">
                                            <input type="file" name="logo" class="form-control " ><img src="<?= base_url('teams/'.$data->logo)  ?>" width=100 height=100></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('logo','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="tname" value="<?=$data->tname?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('tname','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Captain Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <select class="form-control" name="captain_id">
                                            <?php 

                                            foreach($groups as $row)
                                            { 
                                            	// echo $data->captain_id.'=='.$row->id;
                                              echo '<option value="'.$row->id.'" '.(($data->captain_id==$row->id)?'selected':'').'>'.$row->name.'</option>';
                                            }
                                            ?>
                                        </select><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('captain_id','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Team Score</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="lifetime_score" value="<?=$data->lifetime_score?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('lifetime_score','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
											
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Is Active</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="is_active" value="<?=$data->is_active?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('is_active','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Update Teams'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
		<?php include('assets/include/footer.php');?>
		