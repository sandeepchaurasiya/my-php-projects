





<?php include('assets/include/header.php');?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Point Table</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2">
				<a class="btn btn-primary right" href='<?=base_url('point_table/add')?>'>Add Points Table</a>
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
							All Point Table
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
			
			<th>Team Name</th>
			<th>Matches</th>
			<th>Won</th>
			<th>Lost</th>
			<th>Tied</th>
			<th>Points</th><th>Update</th><th>Delete</th>
		</thead>
		<tbody>
			<?php foreach ( $datas->result() as $data ): ?>
				<tr>
					<td>
						<?php
						 foreach($team as $row) 
					if($data->team_name==$row->id)
						{ echo $row->tname;}?>
						</td>
					<td><?=$data->matches?></td>
					<td><?=$data->won?></td>
					<td><?=$data->lost?></td>
					<td><?=$data->tied?></td>
					<td><?=$data->points?></td>
				
					<td class="text-center"><a class="btn btn-success"  href='<?=base_url('point_table/edit/'.$data->points_id);?>'>Update</a></td>
					<td class="text-center"><a class="delete btn btn-danger " data-url='<?=base_url('point_table/delete/'.$data->points_id);?>' href='javascript:void(0)' class='delete btn btn-danger'>Delete</a></td>
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

		