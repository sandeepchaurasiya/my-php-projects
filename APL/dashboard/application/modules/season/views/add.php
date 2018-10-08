


     
<?php include('assets/include/header.php');?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Season</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add  season
                        </div>
	<div class="panel-body">
                            <div class="row">
		<?=form_open('season/add')?>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Start Date</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="date" name="start_date" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('start_date','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">End Date</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="date" name="end_date" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('end_date','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Insert Season</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="text" name="season" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('season','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Add Season'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
<?php include('assets/include/footer.php');?>
