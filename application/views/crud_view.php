<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>Assets/css/bootstrap.min.css">
</head>
<body>
<div class="jumbotron">
	<h1 align="center">Project</h1>
</div>
<div class="container">
	<div class="clear-fix">
		<h3 style="float:left">Add All Product</h3>
		<a href="#" class="btn btn-primary" style="float: right" data-toggle="modal" data-target="#exampleModalLong">Add Product</a>
 
	</div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
			<th>Product Name</th>
			<th>Product Price</th>
			<th>Product Quantity</th>
			<th>Action</th>
		</tr>
		</thead>
	<tbody>
		<?php foreach ($product_details as $product):?>
			<tr>
				<td>
					<?php echo $product->name; ?>
				</td>
					<td>
					<?php echo $product->price; ?>
				</td>
					<td>
					<?php echo $product->quantity; ?>
				</td>
				<td>
					<a href="<?php echo base_url();?>cont/editProduct/<?php echo $product->id; ?>"class="btn btn-success">Edit</a>
					<a href="<?php echo base_url();?>cont/deleteProduct/<?php echo $product->id; ?>"class="btn btn-danger">Delete</a>
				</td>
			</tr>
           <?php endforeach;?>
	</tbody>
</table>
</div>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="<?php echo base_url();?>cont/addProduct" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="form-group">
      	<label for="name">Name</label>
      		<input type="text" name="name" placeholder="product name" class="form-control">
      </div>
      <div class="form-group">
      	<label for="price">price</label>
      	<input type="text" name="price" placeholder="00" class="form-control"> 
      </div>
      <div class="form-group">
      	<label for="quantity">Quantity</label>
      		<input type="text" name="quantity" placeholder="Quantity" class="form-control">
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Add Product" class="btn btn-info"> 
      </div>
      </form>
    </div>
  </div>
</div>

<?php if($this->session->flashdata('error')):?>
<div align="center" style="#fff" class="bg-danger">
<?php echo $this->session->flashdata('error');?>
</div>

<?php endif; ?>

<?php if($this->session->flashdata('inserted')):?>
<div align="center" style="#fff" class="bg-success">
<?php echo $this->session->flashdata('inserted');?>
</div>

<?php endif; ?>

<?php if($this->session->flashdata('updated')):?>
<div align="center" style="#fff" class="bg-success">
<?php echo $this->session->flashdata('updated');?>
</div>

<?php endif; ?>

<?php if($this->session->flashdata('deleted')):?>
<div align="center" style="#fff" class="bg-success">
<?php echo $this->session->flashdata('deleted');?>
</div>

<?php endif; ?>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>



</body>
</html>