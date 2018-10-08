


     
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
                            Add  Point Table
                        </div>
	<div class="panel-body">
                            <div class="row">
		<?=form_open('point_table/add')?>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">TeamName</label>
                                    </div>   
                                    <div class="col-lg-4">
                                       <select name="team_name" class="form-control">
                                        <option>Select Team</option>
                                           <?php
                                           foreach($team as $row)
                                           {
                                             echo '<option value="'.$row->id.'">'.$row->tname.'</option>';
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
                                        <div class="controls"><input type="text" name="matches" class="form-control"></div><br/>
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
                                        <div class="controls"><input type="text" name="won" class="form-control"></div><br/>
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
                                        <div class="controls"><input type="text" name="lost" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('lost','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">tied</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="text" name="tied" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('tied','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">points</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="text" name="points" class="form-control"></div><br/>
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
            <input type="submit" class="btn btn-primary" value='Add point_table'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
<?php include('assets/include/footer.php');?>
