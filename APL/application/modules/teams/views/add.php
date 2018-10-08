


     
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
                            Add  teams
                        </div>
	<div class="panel-body">
                            <div class="row">
		<?=form_open_multipart('teams/add')?>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Team Logo</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="file" name="logo" class="form-control"></div><br/>
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
                                        <div class="controls"><input type="text" name="tname" class="form-control"></div><br/>
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
                                              echo '<option value="'.$row->id.'">'.$row->name.'</option>';
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
                                        <div class="controls"><input type="text" name="lifetime_score" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('lifetime_score','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Add teams'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
<?php include('assets/include/footer.php');?>
