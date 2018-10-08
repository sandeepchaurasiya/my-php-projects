

<?php include('assets/include/header.php'); ?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Scores</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Search Players by Date
                </div>
                <div class="panel-body">
                    <div class="row">                            
                        <?= form_open('scores/add') ?>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label class="control-label">Team</label>
                                </div>   
                                <div class="col-lg-3">
                                    <div class="controls">
                                        <select name="teams" class="form-control">
                                            <option>Select Team</option>
                                            <?php foreach ($teams as $trow) { ?>
                                                <option value="<?= $trow->id ?>" <?=($team_id==$trow->id)?'selected':''?>><?= $trow->tname ?></option>
                                            <?php } ?>
                                        </select>
                                    </div><br/>
                                </div>    
                                <div class="col-lg-3">
                                    <label class="control-label">Match Date</label>
                                </div>   
                                <div class="col-lg-3">
                                    <div class="controls"><input type="date" name="match_date" class="form-control" value="<?=$match_date;?>"></div><br/>
                                </div>    
                                <div class="col-lg-4">
                                    <input type="submit" name="search" class="btn btn-primary" value='Search'>
                                    <!-- <?php // echo form_error('date','<div class="alert alert-danger ">', '</div>');   ?> -->
                                </div> 
                            </div>
                        </div>                                    
                        <?= form_close(); ?>                           
                    </div>
                </div>                                  
            </div>  
        </div>  
    </div>
    <!-- /.row -->
    <?php if(isset($player)):?>
    <?= form_open('scores/add') ?>
    <input type="hidden" name="match_date" value="<?=$match_date;?>">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Update  scores
            </div>

            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Players</th>
                            <th>Teams</th>
                            <th>No. Of Sales</th>
                        </tr>
                    </thead>
                    <?php foreach ($player as $row): ?>
                        <tbody>
                            <tr class="odd gradeX">
                                <td><?= $row->name ?></td>
                                <td><?= $row->tname ?></td>
                                <td>
                                    <input type="number" name="score[]" value="<?= $row->score ?>" class="form-control">
                                    <input type="hidden" name="score_id[]" value="<?= $row->sid ?>" class="form-control">
                                    <input type="hidden" name="player[]" value="<?= $row->id ?>" class="form-control">
                                    <input type="hidden" name="team[]" value="<?= $row->tid ?>" class="form-control">
                                    <input type="hidden" name="match[]" value="<?= $row->mid ?>" class="form-control">

                                </td>
                            </tr>
                        <?php endforeach; ?> 
                    </tbody>


                </table>
            </div>
            <div style="text-align:center;">
                <input type="submit" name="update" class="btn btn-primary" value="Add scores">
            </div><br/>

        </div>
    </div>
    <?= form_close() ?>
    <?php endif; ?>
</div>
</div>
<?php include('assets/include/footer.php'); ?>
                        
