<?php 
	//getting categories
	
	$con = mysqli_connect("localhost:3306","root","","ecommerce");

	function getCats(){
		global $con;
		$get_cats = "select * from categories";
		$run_cats_query = mysqli_query($con, $get_cats);

		while($row_cats_result=mysqli_fetch_array($run_cats_query)){
			$cat_id=$row_cats_result['cat_id'];
			$cat_title=$row_cats_result['cat_title'];
			echo "<li><a href='#'>$cat_title</a></li>";
		}	
	}

	function getBrands(){
		global $con;
		$get_brands="select * from brands";
		$run_brands_query=mysqli_query($con,$get_brands);

		while($row_brands_results=mysqli_fetch_array($run_brands_query)){
			$brand_id=$row_brands_results['brand_id'];
			$brand_title=$row_brands_results['brand_title'];
			echo "<li><a href='#'>$brand_title</a></li>";
		}
	}
?>