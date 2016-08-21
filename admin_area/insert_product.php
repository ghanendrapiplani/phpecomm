<!DOCTYPE html>
<?php 
	include("includes/connection.php");
?>
<html>
<head>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
	<title>Insert Product.</title>
</head>
<body bgcolor="skyblue">
	<form action="insert_product.php" method="post" enctype="multipart/form-data">
		<table align="center" width="1000px" border="2" bgcolor="gray">
			<tr>
				 <th colspan="2"><h2 align="center">Insert new product here</h2></th>
			</tr>
			<tr>
				<td align="right"><b>Product Title:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Product Category:</b></td>
				<td>
					<select name="product_cat">
						<option>Select a category</option>
						<?php  
							$get_cats = "select * from categories";
							$run_cats_query = mysqli_query($con, $get_cats);

							while($row_cats_result=mysqli_fetch_array($run_cats_query)){
								$cat_id=$row_cats_result['cat_id'];
								$cat_title=$row_cats_result['cat_title'];
								echo "<option>$cat_title</option>";
							}
						?>	
					</select>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product Brand:</b></td>
				<td>
				<select name="prod_brand">
					<option>Select Brand</option>
					<?php
						$get_brands="select * from brands";
						$run_brands_query=mysqli_query($con,$get_brands);

						while($row_brands_results=mysqli_fetch_array($run_brands_query)){
							$brand_id=$row_brands_results['brand_id'];
							$brand_title=$row_brands_results['brand_title'];
							echo "<option>$brand_title</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="right"><b>Product Image:</b></td>
				<td><input type="file" name="product_image" size="60" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Product Description:</b></td>
				<td><textarea name="prod_desc" cols="20" rows="10" required="true"></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Product Price:</b></td>
				<td><input type="text" name="product_price" size="60" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Product Keywords:</b></td>
				<td><input type="text" name="product_key" size="60" required/></td>
			</tr>
			<tr>
				<td colspan="8" align="center"><input type="submit" name="insert_post" value="Insert Now"></input></td>
			</tr> 
		</table>
	</form>
</body>
</html>