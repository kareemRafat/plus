<?php 
	
	include 'includes/navbar.php';
	include 'includes/sidebar.php';

 ?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<a class="btn btn-primary" href="">Add user</a>
				<br>
				<br>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>username</th>
							<th>email</th>
							<th>address</th>
							<th>gender</th>
							<th>privliges</th>
							<th>controlls</th>
						</tr>
					</thead>
					<tbody>
			<?php 
			include "functions/connect.php";
			$users = "SELECT * FROM users";
			$users = $conn -> query($users);
			// show error if the query return false
			if(!$users) die($conn->error) ;

			$id = 0 ;
			foreach($users as $user) {
			 ?>
			<tr>
				<td><?= ++$id ?></td>
				<td><?= $user['username']; ?></td>
				<td><?= $user['email']; ?></td>
				<td><?= $user['address']; ?></td>
				<td><?php 

				if ($user['gender'] == 0) {
					echo "Male";
				}else {
					echo "Female";
				}


				 ?></td>
				<td><?= $user['priv']== 0 ? "Admin" : 'User' ?></td>
				<td>
					<a class="btn btn-primary" href="">Edit</a>
					<!-- <a class="btn btn-danger" href="functions/delete_user.php?id=<?= $user['id'] ?>">Delete</a> -->

					<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $user['id'] ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $user['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure you want to delete user : <?= $user['username'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="functions/delete_user.php?id=<?= $user['id'] ?>">Delete</a>
      </div>
    </div>
  </div>
</div>
				</td>
			</tr>
			<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>	<!--/.main-->
<?php 

	include "includes/footer.php";

 ?>