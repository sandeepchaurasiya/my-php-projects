


     
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
                            Add  Team Player
                        </div>
	<div class="panel-body">
                            <div class="row">
		<?=form_open('team_player/add')?>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Team Name</label>
                                    </div>   
                                    <div class="col-lg-4" >
                                      <!-- <div class="controls"><input type="text" name="team_id" class="form-control"></div><br/>  -->
                                      <select name="team_id" class="form-control" >
                                          <?php
                                            foreach($teams as $row)
                                            {
                                              echo '<option value="'.$row->id.'">'.$row->tname.'</option>';      
                                            }
                                          ?>
                                      </select><br/>
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
                                       <!--  <div class="controls"><input type="text" name="player_id" class="form-control"></div><br/> -->

                                        <select class="form-control" name="player_id">
                                            <?php 

                                            foreach($players as $row)
                                            { 
                                              echo '<option value="'.$row->id.'">'.$row->name.'</option>';
                                            }
                                            ?>
                                        </select><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('player_id','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Add Team Player'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
<?php include('assets/include/footer.php');?>
