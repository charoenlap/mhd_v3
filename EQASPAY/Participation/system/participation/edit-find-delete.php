<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php require("../../tools/css/scripts.php") ?>
<title>Edit Find</title>

</head>

<body>
<?php require("headPanel.php") ;
date_default_timezone_set("Asia/Bangkok");
?>
<form method="post" action="delete-form.php">

	
	
<div style="padding-top: 130px; padding-left: 20px; padding-right: 20px">
<h1 class="ft-prompt"><i class="far fa-edit"></i> EDITING</h1> 	
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
    <li class="breadcrumb-item"><a href="participation.php">Participation</a></li>
	<li class="breadcrumb-item"><a href="register.php">Register</a></li>  
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>


<div class="form-row">
   <div class="form-group col-3">ID
      <input type="text" class="form-control form-control-sm" name="id" placeholder="ID" autofocus required>
    </div>
	</div>	
  
		</tbody>
	</table>

	<button class="btn btn-lg btn-success mt-3 mb-5" style="width: 10%"><i class="fas fa-user-plus"></i> ENTER</button>	
	
	</div>   



	
</form>
</body>
</html>