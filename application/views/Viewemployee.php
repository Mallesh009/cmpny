<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>
<body>

  
<div class="container">
  <div class="row" >
    <div class="col-sm-4">
     <div id="reports" style="">
<?php
	$details=array();
	echo "<table class=' display' id='tables2' style='width:auto' border=2px>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>SlNo</th>";
	echo "<th>First Name </th>";
	echo "<th>Lasr Name</th>";
	echo "<th>Company Name</th>";
	echo "<th>Email</th>";
	echo "<th>Mobile Number</th>";
	echo "<th colapsn=''>Action</th>";
	echo"</tr>";
	
	echo "</thead>";
	echo "<tbody>";
	if(!empty($cpmdtls))
	{
		foreach($cpmdtls as $cpmdtlss)
		{
			echo "<tr>";
			echo "<td>$cpmdtlss->id</td>";
			echo "<td>$cpmdtlss->fname</td>";
			echo "<td>$cpmdtlss->lname</td>";
			echo "<td>$cpmdtlss->cname</td>";
			echo "<td>$cpmdtlss->eemail</td>";
			echo "<td>$cpmdtlss->mnumber</td>";
			echo "<td><button class='btn btn-primary' id='$cpmdtlss->id'onclick='edit1(this.id)'>Edit</button>";
			echo "<button class='btn btn-Danger' id='$cpmdtlss->id'onclick='deleteemp(this.id)'>Delete</button></td></tr>";
		}
		
	}
	else
	{
		
		echo "No Data Found";
		
	}
	echo "</tbody></table>"
?>
    </div>
  </div>
</div>

</body>
</html>
	
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dataTables.css">
	<script type="text/javascript"  src="<?php echo base_url(); ?>js/dataTables.js"></script>
<script>
$('#tables2').DataTable({
         "searching": true,
            "ordering": true,
            "pagingType": "full_numbers",
			 dom: 'Bfrtip',
        buttons: [
           'excel', 'print'
        ]

    });
</script>