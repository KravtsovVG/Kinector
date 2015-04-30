<html>
<head>
	<title>User Dashboard</title>
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.container {
			width: 70%;
			margin:0 auto;
		}
		button{
			margin-top:4%;
		}
	</style>
</head>
<body>
<?php $this->load->view('partials/welcome_header') ?>	
	<div class='container'>
		<div class='header'>
			<div class='col-md-6'>
				<h3>Manage Users</h3>
			</div>
			<div class='col-md-6'>
				<form action='dashboard/add_user' method='post'>
					<button type="submit" class="btn btn-primary pull-right head">Add new</button>
				</form>
			</div>
	
		</div>
			<table class='table table-striped table-bordered' >
				<thead>
					<th>ID</th>
					<th>Name</th>
					<th>email</th>
					<th>created_at</th>
					<th>user_level</th>
					<th>actions</th>
				</thead>
<?php 
		foreach ($users as $user) { ?>
				<tr>	
					<td><?= $user['id'] ?></td>
					<td><a href=""><?= $user['first_name']." ".$user['last_name']; ?></a></td>
					<td><?= $user['email'] ?></td>
					<td><?= $user['created_at'] ?></td>
					<td><?= $user['user_level'] ?></td>
					<td><a href="edit/<?= $user['id']?>">edit</a> | <a href="remove/<?= $user['id']?>">remove</a></td>
				</tr>	
<?php		}

 ?>				
			</table>
	</div> <!-- end of container -->
</body>
</html>