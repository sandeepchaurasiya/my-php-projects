


     
<?php include('assets/include/header.php');?>



<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Players</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add  Players
                        </div>
	<div class="panel-body">
                            <div class="row">
		<?=form_open_multipart('players/add')?>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Player Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="text" name="name" class="form-control"></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('name','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Player Image</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls"><input type="file" name="image" class="form-control-file" required></div><br/>
          
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('image','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                            <label class="control-label">Category</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="custom-file"><select name="category" class="form-control"><option value="">Select Category</option><option value="Premium">Premium</option><option value="Semi-Premium">Semi-Premium</option><option value="Mid-Level">Mid-Level</option><option value="New Bees">New Bees</option><option value="Foreign">Foreign</option></select></div><br/>
									</div>	   
									<div class="col-lg-4">
									<?php echo form_error('category','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
                            <!-- <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="col-lg-4">
                                            <label class="control-label">team_id</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                           <input type="text" name="team_id" class="form-control" required> 
                                        </div><br/>
                                    </div>     
                                    <div class="col-lg-4">
                                    <?php //echo form_error('team_id','<div class="alert alert-danger ">', '</div>'); ?>
                                    </div>
                                </div>
                            </div> -->
                            							
		<div class="col-lg-3">
		</div>
		<div class="col-lg-3">
            <br/>
            <input type="submit" class="btn btn-primary" value='Add Players'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
<?php include('assets/include/footer.php');?>
