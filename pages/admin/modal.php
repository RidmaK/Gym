<!-- Add shedule -->
<div class="modal fade" id="addshedule" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: #000;">Add New shedule</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label" style="color: #000;">shedule Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" style="color: #000;" class="form-control" name="pname" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label" style="color: #000;" >Category:</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" style="color: #000;" name="category">
                                    <?php
                                        $sql="select * from category order by categoryid asc";
                                        $query=$conn->query($sql);
                                        while($row=$query->fetch_array()){
                                            ?>
                                            <option style="color: #000;" value="<?php echo $row['categoryid']; ?>"><?php echo $row['catname']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="newshedule" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Add Category -->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel" style="color: #000;">Add New Category</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group" style="margin-top:10px;">
                        <div class="row">
                            <div class="col-md-3" style="margin-top:7px;">
                                <label class="control-label" style="color: #000;">Category Name:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" style="color: #000;" class="form-control" name="cname" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                <button type="submit" name="newcategory" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php
include('../../php/basic/connection.php');

	
    if(isset($_POST['newshedule'])){
        $pname=$_POST['pname'];
	
        $category=$_POST['category'];
	
	
	$sql="insert into shedule (shedule_name, categoryid) values ('$pname', '$category')";
	$conn->query($sql);
    echo "<script>window.location.assign('admin-shedule.php?success=1')</script>";
    //header('location:admin-shedule.php');
    }

?>
<?php

	
    if(isset($_POST['newcategory'])){
        $cname=$_POST['cname'];
	$sql="insert into category (catname) values ('$cname')";
	$conn->query($sql);

    echo "<script>window.location.assign('admin-shedule.php?success=1')</script>";
    }
?>