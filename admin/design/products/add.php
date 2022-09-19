
<!-- enctype xxx-urlencoded -->

<form method="post" action="functions/products/add.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" name="name" value="" class="form-control" id="exampleInputEmail1">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value="" class="form-control" id="exampleInputEmail1" >
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">sale</label>
    <input type="text" name="sale" value="" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="img" multiple value="" class="form-control" id="exampleInputEmail1" >
  </div>

<br>

  <div class="form-group">
    <label for="exampleFormControlSelect1">categories</label>
    <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
    <?php 
    include "functions/connect.php";
    $selectCat = "SELECT * FROM categories";
    $queryCat = $conn -> query($selectCat);
    foreach($queryCat as $cat){

     ?>
      <option value="<?= $cat['id'] ?>" ><?= $cat['name'] ?></option>

    <?php } ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>