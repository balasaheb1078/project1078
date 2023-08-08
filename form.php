<?php 

include 'navbar.php';

 ?>
	<br>
	<form action="save_card.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Add New Card</h3>
			</div>
			<div class="col-md-3 mb-3">
				<label>ENTER ICON</label>
				<input type="text" class="form-control" name="icon">
			</div>
			<div class="col-md-3 mb-3">
				<label>ENTER NAME</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="col-md-3 mb-3">
				<label>ENTER MOBILE</label>
				<input type="text" class="form-control" name="mobile">
			</div>
			<div class="col-md-3 mb-3">
				<label>ENTER EMAIL</label>
				<input type="text" class="form-control" name="email">
			</div>
			<div class="col-md-12 mb-3">
				<label>ENTER ADDRESS</label>
				<textarea name="address" class="form-control"></textarea> 
			</div>
			<div class="col-md-6 mb-3">
				<label>ENTER POSITION</label>
				<input type="text" class="form-control" name="position">
			</div>
			<div class="col-md-6 mb-3">
				<label>ENTER COMPANY</label>
				<input type="text" class="form-control" name="company">
			</div>
			<div class="col-md-12 mb-3 text-center">
				<button class="btn btn-primary" >Save Card</button>
			</div>
			
		</div>
		
		


	</div>
	</form>

</body>
</html>