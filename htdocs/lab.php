
<?php
	session_start();
	if($_SESSION['sid']==session_id())
	{
	
		
	}
	else
	{
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELL M-track</title>
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
</head>
<body>



	<div class="container" style="
    width: 1240px;">
      <div class="">
		
        <div class="col-sm-16">

		<div class="well clearfix">
			
 <form action="" method="post" enctype="multipart/form-data"> <img src="dell.jpg" alt="DELL Hardware M-track" width="200" height="40">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
	<a href="PartSearchResult_buildteam.xlsx" download="PartSearchResult_buildteam.xlsx">
  <img border="0" src="reddy.gif" alt="Download" width="174" height="47">    

<span title="Jenkins job need to be run for the excel sheet to be reflected with changes made on WEB page"><i class="material-icons" on>&#xe88e; </i></span>
</a>
			<div class="pull-right"> <button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
			
			<span class="glyphicon glyphicon-plus"></span> Add-Record</button> &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  <a href="index.php">LogOut</a></div></div> </form>
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="40%" cellspacing="0" data-toggle="bootgrid"> 
			<thead>

				<tr>
					
					<th data-column-id="id" data-type="numeric" data-identifier="true">id</th>
					<th data-column-id="Serial_Number">Serial_Number</th>
					<th data-column-id="Part">Part</th>
					<th data-column-id="Revision">Revision</th>
					<th data-column-id="Project">Project</th>
					<th data-column-id="Borrower">Borrower</th>
					<th data-column-id="Status">Status</th> 
					<th data-column-id="Category">Category</th>
					<th data-column-id="Other_fileds1">Actual location</th>

					<th data-column-id="User_Defined_Description">User_Defined_Description</th>
				
					
					<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
				</tr>
			</thead>
		</table>
    </div>
      </div>
    </div>
	
<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
				<input type="hidden" value="add" name="action" id="action">
                  <div class="form-group">
                    <label for="Serial_Number" class="control-label">Serial_Number:</label>
                    <input type="text" class="form-control" id="Serial_Number" name="Serial_Number"/>
                  </div>
                  <div class="form-group">
                    <label for="Part" class="control-label">Part:</label>
                    <input type="text" class="form-control" id="Part" name="Part"/>
                  </div>
				  <div class="form-group">
                    <label for="Revision" class="control-label">Revision:</label>
                    <input type="text" class="form-control" id="Revision" name="Revision"/>
                  </div>
				  <div class="form-group">
                    <label for="Project" class="control-label">Project:</label>
                    <input type="text" class="form-control" id="Project" name="Project"/>
                  </div>

				  <div class="form-group">
                    <label for="Borrower" class="control-label">Borrower:</label>
                    <input type="text" class="form-control" id="Borrower" name="Borrower"/>
                  </div>
				  <div class="form-group">
                    <label for="Status" class="control-label">Status:</label>
                    <input type="text" class="form-control" id="Status" name="Status"/>
                  </div>
				  <div class="form-group">
                    <label for="Category" class="control-label">Category:</label>
                    <input type="text" class="form-control" id="Category" name="Category"/>
                  </div>
                 
				  <div class="form-group">
                    <label for="Other_fileds1" class="control-label">Actual location:</label>
                    <input type="text" class="form-control" id="Other_fileds1" name="Other_fileds1"/>
                  </div>
				  <div class="form-group">
                    <label for="User_Defined_Description" class="control-label">User_Defined_Description:</label>
                    <input type="text" class="form-control" id="User_Defined_Description" name="User_Defined_Description"/>
               </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Employee</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_edit">
				<input type="hidden" value="edit" name="action" id="action">
				<input type="hidden" value="0" name="edit_id" id="edit_id">
                  <div class="form-group">
                    <label for="Serial_Number" class="control-label">Serial_Number:</label>
                    <input type="text" class="form-control" id="edit_Serial_Number" name="edit_Serial_Number"/>
                  </div>
                  <div class="form-group">
                    <label for="Part" class="control-label">Part:</label>
                    <input type="text" class="form-control" id="edit_Part" name="edit_Part"/>
                  </div>
                  <div class="form-group">
                    <label for="Revision" class="control-label">Revision:</label>
                    <input type="text" class="form-control" id="edit_Revision" name="edit_Revision"/>
                  </div>
			      <div class="form-group">
                    <label for="Project" class="control-label">Project:</label>
                    <input type="text" class="form-control" id="edit_Project" name="edit_Project"/>
                  </div>		

			      <div class="form-group">
                    <label for="Borrower" class="control-label">Borrower:</label>
                    <input type="text" class="form-control" id="edit_Borrower" name="edit_Borrower"/>
                  </div>


			      <div class="form-group">
                    <label for="Status" class="control-label">Status:</label>
                    <input type="text" class="form-control" id="edit_Status" name="edit_Status"/>
                  </div>
			      <div class="form-group">
                    <label for="Category" class="control-label">Category:</label>
                    <input type="text" class="form-control" id="edit_Category" name="edit_Category"/>
                  </div>
			      <div class="form-group">
                    <label for="Other_fileds1" class="control-label">Actual location:</label>
                    <input type="text" class="form-control" id="edit_Other_fileds1" name="edit_Other_fileds1"/>
                  </div>


				  <div class="form-group">
                    <label for="User_Defined_Description" class="control-label">User_Defined_Description:</label>
                    <input type="text" class="form-control" id="edit_User_Defined_Description" name="edit_User_Defined_Description"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
$( document ).ready(function() {
	var grid = $("#employee_grid").bootgrid({
		ajax: true,
		rowSelect: true,
		post: function ()
		{
			/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
		                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
		        }
		    }
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
			var ele =$(this).parent();
			var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
console.log(g_id);
                    console.log(g_name);

		//console.log(grid.data());//
		$('#edit_model').modal('show');
					if($(this).data("row-id") >0) {
							
                                // collect the data
                                $('#edit_id').val(ele.siblings(':first').html()); // in case we're changing the key
                                $('#edit_Serial_Number').val(ele.siblings(':nth-of-type(2)').html());
                                $('#edit_Part').val(ele.siblings(':nth-of-type(3)').html());
                                $('#edit_Revision').val(ele.siblings(':nth-of-type(4)').html());
						        $('#edit_Project').val(ele.siblings(':nth-of-type(5)').html());
  								$('#edit_Borrower').val(ele.siblings(':nth-of-type(6)').html());
								$('#edit_Status').val(ele.siblings(':nth-of-type(7)').html());
								$('#edit_Category').val(ele.siblings(':nth-of-type(8)').html());
								$('#edit_Other_fileds1').val(ele.siblings(':nth-of-type(9)').html());

	                            $('#edit_User_Defined_Description').val(ele.siblings(':nth-of-type(10)').html());
					} else {
					 alert('Now row selected! First select row, then click edit button');
					}
    }).end().find(".command-delete").on("click", function(e)
    {
	
		var conf = confirm('Delete ' + $(this).data("row-id") + ' items?');
					alert(conf);
                    if(conf){
                                $.post('response.php', { id: $(this).data("row-id"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
										$("#employee_grid").bootgrid('reload');
                                }); 
								//$(this).parent('tr').remove();
								//$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});

function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#employee_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
});
</script>
