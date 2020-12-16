<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/css/bootstrap.min.css">

</head>
<body>
<div class="jumbotron">
	<h1 align="center">crud in api</h1>
</div>
<div class="container">
	<h1 align="center">Edit View</h1>
	
	<form action="<?php echo base_url();?>cont/update/<?php echo $singleProduct->id;?>" method="">
		 <div class="form-group">
      	<label for="name">Name</label>
      		<input type="text" name="name" placeholder="product name" value="<?php echo $singleProduct->name;?>" class="form-control">
      </div>
      <div class="form-group">
      	<label for="price">price</label>
      	<input type="text" name="price" placeholder="00" value="<?php echo $singleProduct->price;?>" class="form-control"> 
      </div>
      <div class="form-group">
      	<label for="quantity">Quantity</label>
      		<input type="text" name="quantity" placeholder="Quantity" value="<?php echo $singleProduct->quantity;?>" class="form-control">
      </div>
     
		<input type="submit" name="edit" value="update" class="btn btn-primary">
   </form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
</body>
</html>