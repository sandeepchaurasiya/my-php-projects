





<?php include('assets/include/header.php');?>

	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Season</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-2 text-center">
				<a class="btn btn-primary right" href='<?=base_url('season/add')?>'>Add season</a>
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
							All season
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead>
		
			<th>Start Date</th>
			<th>End Date</th>
			<th>Season</th><th>Update</th><th>Delete</th>
		</thead>
		<tbody>
			<?php foreach ( $datas->result() as $data ): ?>
				<tr>
			
					<td><?=$data->start_date?></td>
					<td><?=$data->end_date?></td>
					<td><?=$data->season?></td>
				
					<td class="text-center"><a class="btn btn-success btn-md"  href='<?=base_url('season/edit/'.$data->s_id);?>'>Update</a></td>
					<td class="text-center"><a class="delete btn btn-danger btn-md" data-url='<?=base_url('season/delete/'.$data->s_id);?>' href='javascript:void(0)' class='delete btn btn-danger btn-sm'>Delete</a></td>
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

		