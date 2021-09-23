<!-- Edit shedule -->
<div class="modal fade" id="editshedule<?php echo $row1['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: #000;">Edit shedule</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editshedule.php?shedule=<?php echo $row1['id']; ?>" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label" style="color: #000;">shedule Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" style="color: #000;" class="form-control" value="<?php echo $row1['shedule_name']; ?>" name="pname">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label" style="color: #000;">Reps:</label>
                            </div>
                            <div class="col-md-9">
                            <input type="text" style="color: #000;" class="form-control" name="res">
    
                            </div>
                        </div>
                    </div>
                    
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="editshedule" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Update</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Delete shedule -->
<div class="modal fade" id="deleteshedule<?php echo $row1['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: #000;">Delete shedule</h4></center>
            </div>
            <div class="modal-body">
                <h3 class="text-center" style="color: #000;"><?php echo $row1['shedule_name']; ?></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <a href="delete_shedule.php?shedule=<?php echo $row1['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>