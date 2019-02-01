<?php
    $pageTitle = 'Checkout';
	session_start();
	ini_set('display_errors', '1');
	if(isset($_SESSION['username']) && !$_GET['Book_ID'] == '' && !$_GET['Books'] == '' ){
		require "dbconnect/connect_to_signups.php";

		$type = $con->real_escape_string($_POST['Type']);
		$book = $con->real_escape_string($_GET['Books']);
		$bookid = $con->real_escape_string($_GET['Book_ID']);

		$query = "SELECT * FROM Users WHERE Email='{$_SESSION['email']}'";
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
					<input class="input100" type="text" name="phone" value="<?php echo $data['Phone']; ?>" placeholder="" required>
				</div>

				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">College</span>
					<div>
						<select class="js-select2" name="college" onchange="show_vnit(this)">
							<option value="0">Choose your college</option>
							<option id="vnit" value="VNIT">VNIT</option>
							<option value="RKNEC">BRC</option>
							<option value="Other">Other</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none" id="show_vnit" style="display:none;">
				        <div class="wrap-input100 validate-input bg1">
				            <span class="label-input100">Department</span>
							<select class="js-select2" name="department">
                                <option name="CSE" value="CSE" >CSE</option>
                                <option name="MEC" value="MEC" >MEC</option> 
                                <option name="CHE" value="CHE" >CHE</option>
                                <option name="EEE" value="EEE" >EEE</option>
                                <option name="ECE" value="ECE" >ECE</option>
                                <option name="MME" value="MME" >MME</option>
                                <option name="MIN" value="MIN" >MIN</option>
                                <option name="CIV" value="CIV" >CIV</option>
                                <option name="ARCH" value="ARCH" >ARCH</option>  
                            </select>
						</div>
						<div class="wrap-input100 validate-input bg1">
							<span class="label-input100">College ID *</span>
							<input class="input100" type="text" name="collegeid" value="<?php echo $data['Room']; ?>" placeholder="">
						</div>
						<div class="wrap-input100 validate-input bg1">
							<span class="label-input100">Section *</span>
							<input class="input100" type="text" name="section" value="<?php echo $data['Room']; ?>" placeholder="">
						</div>
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">You Are A?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="staytype" value="Hostellite" onclick="show_hostel()">
							<label class="label-radio100" for="radio1">
								Hostellite
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="staytype" value="dayski" onclick="show_hostel()">
							<label class="label-radio100" for="radio2">
								Dayski
							</label>
						</div>
					</div>
					<div class="w-full dis-none" id="show_hostel" style="display:none;">
						<div class="wrap-input100 validate-input bg1">
							<span class="label-input100">Room Number *</span>
							<input class="input100" type="text" name="room" value="<?php echo $data['Room']; ?>" placeholder="">
						</div>

						<div class="wrap-input100 validate-input bg1">
							<span class="label-input100">Hostel Block *</span>
							<input class="input100" type="text" name="hostel" value="<?php echo $data['Hostel_Block']; ?>" placeholder="">
						</div>
					</div>

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
