 
		<?php include('assets/include/header.php');?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Team Player</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			   <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update  Team Player
                        </div>
	<div class="panel-body">
                            <div class="row">	
		<?=form_open('team_player/edit/'.$data->id)?>
		
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
	                                        <select class="form-control" name="team_id">
	                                            <?php 
	                                            foreach($teams as $row)
	                                            { 
	                                            	// echo $data->captain_id.'=='.$row->id;
	                                              echo '<option value="'.$row->id.'" '.(($data->team_id==$row->id)?'selected':'').'>'.$row->tname.'</option>';
	                                            }
	                                            ?>
	                                        </select>
	                                            <br/>
                                  		</div>
                                    </div>	    
									<div class="col-lg-4">
									<?php echo form_error('team_id','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Player Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                        <!--     <input type="text" name="player_id" value="<?=$data->player_id?>" class="form-control "> -->

                                         <select class="form-control" name="player_id">
	                                            <?php 
	                                            foreach($players as $row)
	                                            { 
	                                            	// echo $data->captain_id.'=='.$row->id;
	                                              echo '<option value="'.$row->id.'" '.(($data->player_id==$row->id)?'selected':'').'>'.$row->name.'</option>';
	                                            }
	                                            ?>
	                                    </select><br/>

                                        </div>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('player_id','<div class="alert alert-danger ">', '</div>'); ?>
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
                                             <input type="text" name="is_active" value="<?=$data->is_active?>" class="form-control "></div> 
                                       
                                            <br/>
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
            <input type="submit" class="btn btn-primary" value='Update Team Player'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
		<?php include('assets/include/footer.php');?>
		