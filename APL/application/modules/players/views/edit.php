 
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
                            Update  Players
                        </div>
	<div class="panel-body">
                            <div class="row">	
		<?=form_open_multipart('players/edit/'.$data->id)?>
		
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
                                        <label class="control-label">Image</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control " ><input type="hidden" name="image_old" value="<?php echo $data->image ?>"> <img src="<?= base_url('players/'.$data->image)  ?>" width=100 height=100></div><br/>
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
                                        <div class="controls">
                                            <select name="category" class="form-control"><option value="">Select Category</option><option value="Premium"  <?=(($data->category == 'Premium')?"selected":"")?> >Premium</option><option value="Semi-Premium"  <?=(($data->category == 'Semi-Premium')?"selected":"")?> >Semi-Premium</option><option value="Mid-Level"  <?=(($data->category == 'Mid-Level')?"selected":"")?> >Mid-Level</option><option value="New Bees"  <?=(($data->category == 'New Bees')?"selected":"")?> >New Bees</option><option value="Foreign"  <?=(($data->category == 'Foreign')?"selected":"")?> >Foreign</option></select></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('category','<div class="alert alert-danger ">', '</div>'); ?>
									</div>
                                </div>
							</div>
							

				
							<div class="col-lg-12">
                                <div class="form-group">
									<div class="col-lg-4">
                                        <label class="control-label">Team Name</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <select class="form-control" name="team_id">
                                            <?php 
                                            echo"<option >Select</option>";
                                            foreach($teams as $row)
                                            { 
                                            	// echo $data->captain_id.'=='.$row->id;
                                              echo '<option value="'.$row->id.'" '.(($data->team_id==$row->id)?'selected':'').'>'.$row->tname.'</option>';
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
                                        <label class="control-label">Lifetime Sale</label>
                                    </div>   
                                    <div class="col-lg-4">
                                        <div class="controls">
                                            <input type="text" name="lifetime_sale" value="<?=$data->lifetime_sale?>" class="form-control "></div><br/>
									</div>	    
									<div class="col-lg-4">
									<?php echo form_error('lifetime_sale','<div class="alert alert-danger ">', '</div>'); ?>
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
            <input type="submit" class="btn btn-primary" value='Update Players'   >
        </div>
		
	</div>
</div>
</div>
</div>
</div>
		<?php include('assets/include/footer.php');?>
		