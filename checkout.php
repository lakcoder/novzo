<?php
    $pageTitle = 'Checkout';
	session_start();
	ini_set('display_errors', '1');
	if(isset($_SESSION['username']) && !$_GET['Book_ID'] == '' && !$_GET['Books'] == '' ){
		require "dbconnect/connect_to_signups.php";

		$type = $con->real_escape_string($_POST['Type']);
		$book = $con->real_escape_string($_GET['Books']);
		$bookid = $con->real_escape_string($_GET['Book_ID']);

		$query = "SELECT * FROM Registrations WHERE Email='{$_SESSION['email']}'";
		$result = mysqli_query($con,$query);
        $num = mysqli_num_rows($result);

		if($num != 0){
			$data = mysqli_fetch_array($result);
		}
	}else{
		header('location:register.php');
	}


?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php"); ?>
<body>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form action="order.php?Book_ID=<?php echo $bookid; ?>&Books=<?php echo $book; ?>&Type=<?php echo $type; ?>" method="POST" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Verify Your Details:
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" value="<?php echo $data['Name']; ?>" placeholder="" required>
				</div>

				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" value="<?php echo $data['Email']; ?>" placeholder="" required>
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" value="<?php echo $data['Contact']; ?>" placeholder="" required>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="details">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>


<script>
	function show_vnit(nameSelect){
		if(nameSelect){
			admOptionValue = document.getElementById("vnit").value;
			if(admOptionValue == nameSelect.value){
				document.getElementById("show_vnit").style.display = "block";
			}else{
				document.getElementById("show_vnit").style.display = "none";
			}
		}else{
			document.getElementById("show_vnit").style.display = "none";
		}
	}

	function show_hostel(){
		if(document.getElementById("radio1").checked){
			document.getElementById("show_hostel").style.display = "block";
		}else{
			document.getElementById("show_hostel").style.display = "none";
		}
	}
</script>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="js/animsition.min.js"></script>
	<script src="js/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please choose") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<script src="js/main.js"></script>

</body>
</html>
