





<?php include('assets/include/header.php');?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Matches</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2 text-center">
				<a class="btn btn-primary right" href='<?=base_url('matches/add')?>'>Add Matches</a>
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
							All Matches
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
	
			<th>Season Name</th>
			<th>Match Date</th>
			<th>1st Team</th>
			<th>1st Team score</th>
			<th>2nd Team</th>
			<th>2nd Team score</th>
			<th>Winner Team Name</th><th>Update</th><th>Delete</th>
		</thead>
		<tbody>
			<?php foreach ( $datas->result() as $data ): ?>
				<tr>
				

					<td>
						<?php
						 foreach($seasons as $row) 
					if($data->season_id==$row->s_id)
						{ echo $row->season;}?>
						</td>

					<td><?=$data->match_date?></td>
					
					<td>
							<?php
							 foreach($teams as $row1) 
						if($data->team_a_id==$row1->id)
							{ echo $row1->tname;}?>
					</td>
					
					<td><?=$data->team_a_score?></td>
					
					<td>
							<?php
							 foreach($teams as $row1) 
						if($data->team_b_id==$row1->id)
							{ echo $row1->tname;}?>
					</td>
					
					<td><?=$data->team_b_score?></td>
					
					<td>
							<?php
							 foreach($teams as $row1) 
						if($data->winner_team_id==$row1->id)
							{ echo $row1->tname;}?>
					</td>
					
					
					<td class="text-center"><a class="btn btn-success"  href='<?=base_url('matches/edit/'.$data->id);?>'>Update</a></td>
					<td class="text-center"><a class="delete btn btn-danger " data-url='<?=base_url('matches/delete/'.$data->id);?>' href='javascript:void(0)' class='delete btn btn-danger btn-sm'>Delete</a></td>
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

		