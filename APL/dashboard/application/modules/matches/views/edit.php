 
		<?php include('assets/include/header.php');?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Matches</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			   <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update  matches
                        </div>
	<div class="panel-body">
                            <div class="row">	
		<?=form_open('matches/edit/'.$data->id)?>
		
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Season Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <select class="form-control" name="season_id">
                                            <?php 

                                            foreach($seasons as $row)
                                            { 
                                            	// echo $data->captain_id.'=='.$row->id;
                                              echo '<option value="'.$row->s_id.'" '.(($data->season_id==$row->s_id)?'selected':'').'>'.$row->season.'</option>';
                                            }
                                            ?>
	                                        </select><br/>
										</div>	    
										<div class="col-lg-4">
										<?php echo form_error('season_id','<div class="alert alert-danger ">', '</div>'); ?>
										</div>
                                	</div>
								</div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Match Date</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="date" name="match_date" value="<?=$data->match_date?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('match_date','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">1st Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                           
                                            <select class="form-control" name="team_a_id">
                                            <?php 

                                            foreach($teams as $row1)
                                            { 
                                            	
                                              echo '<option value="'.$row1->id.'" '.(($data->team_a_id==$row1->id)?'selected':'').'>'.$row1->tname.'</option>';
                                            }
                                            ?>
                                        </select><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('team_a_id','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">1st Team Score</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="team_a_score" value="<?=$data->team_a_score?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('team_a_score','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">2nd Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                           
                                            <select class="form-control" name="team_b_id">
                                            <?php 

                                            foreach($teams as $row1)
                                            { 
                                            	
                                              echo '<option value="'.$row1->id.'" '.(($data->team_b_id==$row1->id)?'selected':'').'>'.$row1->tname.'</option>';
                                            }
                                            ?>
                                        </select><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('team_b_id','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">2nd Team Score</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="team_b_score" value="<?=$data->team_b_score?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('team_b_score','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Winner Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                           <!-- <input type="text" name="winner_team_id" value="<?=$data->winner_team_id?>" class="form-control "></div><br/>-->
                                           <select class="form-control" name="winner_team_id">
                                            <?php 
                                            echo '<option value="">Select Winner</option>';
                                              echo '<option value="Tie">Tie</option>';
                                            foreach($teams as $row1)
                                            { 
                                            	
                                              echo '<option value="'.$row1->id.'" '.(($data->winner_team_id==$row1->id)?'selected':'').'>'.$row1->tname.'</option>';
                                            }
                                            ?>
                                        </select><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('winner_team_id','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							</div>	
							
				
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Update matches'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
		<?php include('assets/include/footer.php');?>
		