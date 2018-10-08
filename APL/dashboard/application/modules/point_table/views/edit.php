 
		<?php include('assets/include/header.php');?>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Point Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			   <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update  Point Table
                        </div>
	<div class="panel-body">
                            <div class="row">	
		<?=form_open('point_table/edit/'.$data->points_id)?>
		
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                       <!--  <div class="controls">
                                            <input type="text" name="team_name" value="<?=$data->team_name?>" class="form-control "></div> -->
                                             <select class="form-control" name="team_name">
                                            <?php 

                                            foreach($team as $row1)
                                            { 
                                            	
                                              echo '<option value="'.$row1->id.'" '.(($data->team_name==$row1->id)?'selected':'').'>'.$row1->tname.'</option>';
                                            }
                                            ?>
                                        </select>
                                            <br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('team_name','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Matches</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="matches" value="<?=$data->matches?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('matches','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Won</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="won" value="<?=$data->won?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('won','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Lost</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="lost" value="<?=$data->lost?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('lost','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Tied</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="tied" value="<?=$data->tied?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('tied','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Points</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="points" value="<?=$data->points?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('points','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
				
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Update Point Table'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
		<?php include('assets/include/footer.php');?>
		