<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#next_one").on("click",function(e){
			e.preventDefault();

			var r = confirm('Confirm');
			if(r == true){
				var getName = document.getElementById('name').value;
				var getPhone = document.getElementById('phone').value;
				if(getName.length>0 && getPhone.length>0){
					alert('Complete Step One ?');
					$("#steptwo").show();
				}
				else{
					alert('Please Fillup data Name')
				}
			}
			else{
				alert('Or Cancell?');
			}
		})

		//final stage
		$("#final_submit").on("click",function (e) {
			e.preventDefault();
			var dataString = 'name='+ $("#name").val() + '&phone=' + $("#phone").val() + '&fullname=' + $("#fullname").val() + '&fulladdress=' + $("#fulladdress").val();

			$.ajax({
				type:'POST',
				url:'http://localhost/ajax/submit.php',
				data:dataString,
				beforeSend:function () {
					alert('kkkkkkkkkkkkkkkkk');
				},
				success:function(result){
					if(result){
						alert('paglara available');
					}
					else{
						alert('paglara not available');
					}
				}
			})


		})



	})
</script>

<style type="text/css">
	.steptwo{
		display:none;
	}
</style>
<h2>Step One:</h2>
<form method="post">
	<div id="stepone">
		Present Address:<br /><br />

		Name:<br /> <input type="text" value="" id="name"  /><br /><br />
		Phone:<br /> <input type="text" value="" id="phone"  />

		<br /><br />
		<a href="javascript:void(0)" id="next_one">Next</a>
	</div>


	<div id="steptwo" class="steptwo">
		<hr />
		<h2>Step Two:</h2>
		Permanent Address:<br /><br />

		Full Name:<br /> <input type="text" value="" id="fullname"  /><br /><br />
		Full Address:<br /> <input type="text" value="" id="fulladdress"  />


		<br /><br />
		<input type="submit" name="savebtn" value="Submit"   id="final_submit" />
	</div>

</form>