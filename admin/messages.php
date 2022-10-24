<?php 

	$current = 'users';
	include 'includes/navbar.php';
	include 'functions/helper.php';
	include 'includes/sidebar.php';

	
 ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Messages</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
							<th>phone</th>
							<th>email</th>
							<th>view</th>
							<th>controlls</th>
						</tr>
					</thead>
					<tbody>
		<?php 

		include_once "functions/connect.php";
		$selectMess = "SELECT * FROM messages ORDER BY view ASC";
		$query = $conn -> query($selectMess);
		foreach($query as $message) {

		 ?>
						<tr>
							<td><?= $message['id'] ?></td>
							<td><?= $message['name'] ?></td>
							<td><?= $message['phone'] ?></td>
							<td><?= $message['email'] ?></td>
							<td class="view"><?= $message['view'] == 0  ? 'unread' : 'read' ?></td>
							<td>
								<!-- Button trigger modal -->
<button type="button" class="btn btn-primary showMessBtn" data-toggle="modal" data-target="#<?= $message['id']  ?>" data-id="<?= $message['id']  ?>">
  Show message
</button>

<!-- Modal -->
<div class="modal fade" id="<?= $message['id']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?= $message['message'] ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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

 <script src="js/adminAjax.js"></script>