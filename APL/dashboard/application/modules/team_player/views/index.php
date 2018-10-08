





<?php include('assets/include/header.php');?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Team Player</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2 text-center">
				<a class="btn btn-primary right" href='<?=base_url('team_player/add')?>'>Add Team Player</a>
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
							All Team Player
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			<th>Team Name</th>
			<th>Player Name</th>
			<th>Is Active</th>
			<th>Creted At</th>
			<th>Ended At</th><th>Update</th><th>Delete</th>
		</thead>
		<tbody>
			<?php foreach ( $datas->result() as $data ): ?>
				<tr>
					
					<td>

						<?php
						 foreach($teams as $row) 
					if($data->team_id==$row->id)
						{ echo $row->tname;}?>

						</td>
					<td>

						<?php
						 foreach($players as $row) 
					if($data->player_id==$row->id)
						{ echo $row->name;}?>
						
						</td>
					<td><?=$data->is_active?></td>
					<td><?=$data->created_at?></td>
					<td><?=$data->ended_at?></td>
					
					<td class="text-center"><a class="btn btn-success"  href='<?=base_url('team_player/edit/'.$data->id);?>'>Update</a></td>
					<td class="text-center"><a class="delete btn btn-danger" data-url='<?=base_url('team_player/delete/'.$data->id);?>' href='javascript:void(0)' class='delete btn btn-danger btn-sm'>Delete</a></td>
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

		