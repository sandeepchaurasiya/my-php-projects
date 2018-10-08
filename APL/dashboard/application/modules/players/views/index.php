





<?php include('assets/include/header.php');?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Players</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2 text-center">
				<a class="btn btn-primary" href='<?=base_url('players/add')?>'>Add Players</a>
					<p></p>
			</div>
	<div class="col-lg-10">	
		<?php if($this->session->flashdata('msg')){ ?>
						<div class="alert alert-success">
							<a href="#" class="close" data-dismiss="alert">&times;</a>
							<strong><?php echo $this->session->flashdata('msg'); ?></strong> 
						</div>
					<?php } ?>
							
			</div>				
		</div>
	</div>
             
        <!-- page-wrapper -->
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
							All Players
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			
			<th>Name</th>
			<th>Image</th>
			<th>Category</th>
			<th>Team Name</th>
			<th>Lifetime Sale</th>
			<th>Is Active</th>
			<th>Created At</th>
			<th>Updated At</th><th>Update</th><th>Delete</th>
		</thead>
		<tbody>
			<?php foreach ( $datas->result() as $data ): ?>
				<tr>
					
					<td><?=$data->name?></td>
					
					<td><img src="<?= base_url('players/'.$data->image)  ?>" width=80 height=80></td>
					<td><?=$data->category?></td>
					<td>
						<?php
						 foreach($teams as $row) 
					if($data->team_id==$row->id)
						{ echo $row->tname;}
					?>

						</td>
					<td><?=$data->lifetime_sale?></td>
					<td><?=$data->is_active?></td>
					<td><?=$data->created_at?></td>
					<td><?=$data->updated_at?></td>
					
					<td class="text-center"><a class="btn btn-success"  href='<?=base_url('players/edit/'.$data->id);?>'>Update</a></td>
					<td class="text-center"><a class="delete btn btn-danger" data-url='<?=base_url('players/delete/'.$data->id);?>/<?=$data->image;?>' href='javascript:void(0)' class='delete btn btn-danger btn-sm'>Delete</a></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
		<div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
					</div>
				</div>	
			</div>	
	</div>
        <!-- /#page-wrapper -->				
   
    <!-- /#wrapper -->



<?php include('assets/include/footer.php');?>

		