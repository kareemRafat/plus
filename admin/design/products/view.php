		

		<a class="btn btn-primary" href="?action=add">Add product</a>
				<br>
				<br>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>id</th>
							<th>name</th>
							<th>price</th>
							<th>sale</th>
							<th>img</th>
							<th>category</th>
							<th>controlls</th>
						</tr>
					</thead>
					<tbody>
					<?php
						require_once("functions/connect.php");
						$query = "SELECT * FROM products ";
						$result = $conn -> query($query);
						// $row = $result -> fetch_assoc();
						// print_r($row);
						foreach ($result as $row){?>
						<tr>
							<td> <?= $row['id'] ?></td>
							<td><?= $row['name'] ?></td>
							<td><?= $row['price'] ?></td>
							<td><?= $row['sale'] ?></td>
							<td><?= $row['img'] ?></td>

							<td>
							
								<?php
									$id = $row['cat_id'];
									$catQuery = "SELECT name FROM categories WHERE id = $id";
									$catSelected = $conn -> query($catQuery);
									$catRow = $catSelected -> fetch_assoc();
									echo $catRow['name'];
									?>
								</td>
							<td>
								<a class="btn btn-primary" href="">Edit</a>
								<a class="btn btn-danger" href="">Delete</a>

							</td>
						</tr>
						<?php 
						}
					?>
					</tbody>
				</table>