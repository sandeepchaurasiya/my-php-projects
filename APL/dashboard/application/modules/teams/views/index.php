





<?php include('assets/include/header.php');?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Teams</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2 text-center">
				<a class="btn btn-primary " href='<?=base_url('teams/add')?>'>Add Teams</a>
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
							All Teams
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			
			<th>Logo</th>
			<th>Tname</th>
			<th>Captain Name</th>
			<th>Team Score</th>
			<th>Created At</th>
			<th>Updated At</th>
			<th>Is Active</th><th>Update</th><th>Delete</th>
		</thead>
		<tbody>
			<?php foreach ( $datas->result() as $data ): ?>
				<tr>
					
					<td><img src="<?= base_url('teams/'.$data->logo)  ?>" width=100 height=100></td>
					<td><?=$data->tname?></td>
					<td>
						<?php
						 foreach($groups as $row) 
					if($data->captain_id==$row->id)
						{ echo $row->name;}?>
							
						</td>
					<td><?=$data->lifetime_score?></td>
					<td><?=$data->created_at?></td>
					<td><?=$data->updated_at?></td>
					<td><?=$data->is_active?></td>
					
					<td class="text-center"><a class="btn btn-success"  href='<?=base_url('teams/edit/'.$data->id);?>'>Update</a></td>
					<td class="text-center"><a class="delete btn btn-danger " data-url='<?=base_url('teams/delete/'.$data->id);?>/<?=$data->logo;?>' href='javascript:void(0)' class='delete btn btn-danger btn-sm'>Delete</a></td>
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

		