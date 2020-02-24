<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#nextone").on("click",function(e){
			e.preventDefault();
			$("#form-step2").show();
			$("#form-step1").hide();
		})


		$("#nextwo").on("click",function(e){
			e.preventDefault();
			$("#form-step1").hide();
			$("#form-step2").hide();
			$("#form-step3").show();
		})



		//final stage
		$("#final_submit").click(function(e){
			e.preventDefault();

			var getName = document.getElementById('name').value;
			var getPhone = document.getElementById('phone').value;
			var getEmail = document.getElementById('email').value;

			var getFullname = document.getElementById('fullname').value;
			var getFulladdress = document.getElementById('fulladdress').value;

			var dataString = 'name='+ getName + '&phone=' + getPhone + '&email='+ getEmail + '&fullname=' + getFullname + '&fulladdress=' + getFulladdress;
			//document.getElementById('loaddata').innerHTML = dataString;

			$.ajax({
				type:'POST',
				url:'http://localhost/seatplan/submit.php',
				data:dataString,
				success:function(result){
					console.log(result);
					$('#ajaxLoader-inner').html('<img src="http://localhost/seatplan/lodder.gif" /><p>Please Wait For Booking..</p>');
					$('#ajaxLoader-inner').show();
					setTimeout(function(){window.top.location="http://localhost/seatplan/index.php"} , 5000);
				}

			})

		})






	})
</script>

<style type="text/css">
	.form-step2{
		display:none;
	}
	.form-step3{
		display:none;
	}
	.ajaxLoader-inner {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background: rgba(255,255,255,0.8);
		display: none;
		text-align: center;
		padding: 170px 0;
		z-index: 999;
	}
</style>
<div id="ajaxLoader-inner" class="ajaxLoader-inner"></div>


<section class="seat-plan" style="width: 1170px; margin: 0 auto">
	<h2 style="visibility: hidden;">Choose Your Seats</h2>
	<div style="display: flex;">
		<div style="border:1px solid #cccccc; width:170px;min-height:500px;padding: 10px;max-width: 300px;">
			<table style="border: none; width: 100%;" cellpadding="0" cellspacing="0">
				<thead>
					<tr><th colspan="5" style="text-align: right;"><img src="images/car-handle.jpg" /></th></tr>
					<tr><th colspan="5" height="20px">&nbsp;</th></tr>
				</thead>
				<tbody>
					<tr>
						<td><a href="#" data-id="a1" id="a1" title="A1"><img src="images/seat.jpg"  /></a></td>
						<td style="padding-left: 10px;"><a href="#" data-id="a2" id="a2" title="A2"><img src="images/seat.jpg"  /></a></td>
						<td style="width: 100px;"></td>
						<td><a href="#" data-id="a3" id="a3" title="A3"><img src="images/seat.jpg"  /></a></td>
						<td style="padding-left: 10px;"><a href="#" data-id="a4" id="a4" title="A4"><img src="images/seat.jpg"  /></a></td>
					</tr>

					<tr><th colspan="5" height="20px">&nbsp;</th></tr>
					<tr>
						<td><a href="#" data-id="b1" id="b1" title="B1"><img src="images/seat.jpg"  /></a></td>
						<td style="padding-left: 10px;"><a href="#" data-id="b2"  id="b2" title="B2"><img src="images/seat.jpg"  /></a></td>
						<td style="width: 100px;"></td>
						<td><a href="#" data-id="b3"  id="b3" title="B3"><img src="images/seat.jpg"  /></a></td>
						<td style="padding-left: 10px;"><a href="#"  data-id="b4"   id="b4" title="B4"><img src="images/seat.jpg"  /></a></td>
					</tr>

					<tr><th colspan="5" height="20px">&nbsp;</th></tr>
					<tr>
						<td><a href="#"  data-id="c1" id="c1" title="C1"><img src="images/seat.jpg"  /></a></td>
						<td style="padding-left: 10px;"><a href="#" data-id="c2" id="c2" title="C2"><img src="images/seat.jpg"  /></a></td>
						<td style="width: 100px;"></td>
						<td><a href="#" data-id="c3"  id="c3" title="C3"><img src="images/seat.jpg"  /></a></td>
						<td style="padding-left: 10px;"><a href="#" data-id="c4" id="c4" title="C4"><img src="images/seat.jpg"  /></a></td>
					</tr>




				</tbody>
			</table>
		</div>
		<div style="background-color: #eeeeee; margin-left: 20px; width: 200px; padding: 10px; position: relative;">
			<table style="border: none; width: 100%;" cellpadding="0" cellspacing="0">
				<tr>
					<td style="text-align: center;">Seat</td>
					<td style="padding: 0 10px;text-align: center;">Rate</td>
					<td style="text-align: center;">Type</td>
				</tr>
				<tr><th colspan="5" height="20px">&nbsp;</th></tr>
		  </table>

			<style type="text/css">
				.seat-content {
					width: 100%;
					font-family: arial;
				}
				.seat-content td{
					text-align: center;
				}
				.seat-content td:nth-of-type(2){
					padding: 0 10px;
				}
			</style>



<form method="post">
	<div id="form-step1">
		<table id="a1-content" class="seat-content"> </table>
		<table id="a2-content" class="seat-content"> </table>
		<table id="a3-content" class="seat-content"> </table>
		<table id="a4-content" class="seat-content"> </table>


		<table id="b1-content" class="seat-content"> </table>
		<table id="b2-content" class="seat-content"> </table>
		<table id="b3-content" class="seat-content"> </table>
		<table id="b4-content" class="seat-content"> </table>

		<table id="c1-content" class="seat-content"> </table>
		<table id="c2-content" class="seat-content"> </table>
		<table id="c3-content" class="seat-content"> </table>
		<table id="c4-content" class="seat-content"> </table>

		<h2>Step One:</h2>
		Present Address:<br /><br />

		Name:<br /> <input type="text" value="" id="name"  /><br /><br />
		Phone:<br /> <input type="text" value="" id="phone"  /><br /><br />
		Email:<br /> <input type="text" value="" id="email"  />

		<br /><br />
		<button id="nextone">Next</button>
	</div>


	<div id="form-step2" class="form-step2">
		<h2>Step Two:</h2>
		Permanent Address:<br /><br />

		Full Name:<br /> <input type="text" value="" id="fullname"  /><br /><br />
		Full Address:<br /> <input type="text" value="" id="fulladdress"  />
		<br /><br />
		<button id="nextwo">Next</button>
	</div>


	<div id="form-step3" class="form-step3">
		<h2>Step Three:</h2>
		<p>Thank you so munch . Are You Confirm Sir. Please Click Submit.</p>
		<br /><br />
		<input type="submit" name="savebtn" value="Submit"   id="final_submit" />
	</div>


</form>







			<!--<button id="addtocart" style="position: absolute; right: 10px; bottom: 10px;cursor: pointer;" onclick="alert('Are Sure Buy To Seat?')">Add To Cart</button>-->
		</div>
	</div>
</section>


<script type="text/javascript">
	document.getElementById('a1').addEventListener('click',myfunction);
	document.getElementById('a2').addEventListener('click',myfunction);
	document.getElementById('a3').addEventListener('click',myfunction);
	document.getElementById('a4').addEventListener('click',myfunction);

	document.getElementById('b1').addEventListener('click',myfunction);
	document.getElementById('b2').addEventListener('click',myfunction);
	document.getElementById('b3').addEventListener('click',myfunction);
	document.getElementById('b4').addEventListener('click',myfunction);

	document.getElementById('c1').addEventListener('click',myfunction);
	document.getElementById('c2').addEventListener('click',myfunction);
	document.getElementById('c3').addEventListener('click',myfunction);
	document.getElementById('c4').addEventListener('click',myfunction);


	function myfunction() {
		var selectId = this.attributes['data-id'].value;
		if(selectId ==='a1'){
			//alert(selectId);
			document.getElementById('a1-content').innerHTML='<tr><td>a1</td><td>111</td><td>111</td></tr>';
		}
		else if(selectId ==='a2'){
			//alert(selectId);
			document.getElementById('a2-content').innerHTML='<tr><td>a2</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='a3'){
			//alert(selectId);
			document.getElementById('a3-content').innerHTML='<tr><td>a3</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='a4'){
			//alert(selectId);
			document.getElementById('a4-content').innerHTML='<tr><td>a4</td><td>222</td><td>222</td></tr>';
		}


		else if(selectId ==='b1'){
			//alert(selectId);
			document.getElementById('b1-content').innerHTML='<tr><td>b1</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='b2'){
			//alert(selectId);
			document.getElementById('b2-content').innerHTML='<tr><td>b2</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='b3'){
			//alert(selectId);
			document.getElementById('b3-content').innerHTML='<tr><td>b3</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='b4'){
			//alert(selectId);
			document.getElementById('b4-content').innerHTML='<tr><td>b4</td><td>222</td><td>222</td></tr>';
		}


		else if(selectId ==='c1'){
			//alert(selectId);
			document.getElementById('c1-content').innerHTML='<tr><td>c1</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='c2'){
			//alert(selectId);
			document.getElementById('c2-content').innerHTML='<tr><td>c2</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='c3'){
			//alert(selectId);
			document.getElementById('c3-content').innerHTML='<tr><td>c3</td><td>222</td><td>222</td></tr>';
		}
		else if(selectId ==='c4'){
			//alert(selectId);
			document.getElementById('c4-content').innerHTML='<tr><td>c4</td><td>222</td><td>222</td></tr>';
		}

	}



	document.getElementById('nextone').addEventListener('click',function () {
		alert('Are Sure Buy To Seat?')
	});
</script>