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
				url:'http://localhost/ajax/submit.php',
				data:dataString,
				success:function(result){
					console.log(result);
					$('#ajaxLoader-inner').html('<img src="http://localhost/ajax/lodder.gif" /><p>Please Wait For Booking..</p>');
					$('#ajaxLoader-inner').show();
					setTimeout(function(){window.top.location="http://localhost/ajax/step1.php"} , 5000);
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
}
</style>
<div id="ajaxLoader-inner" class="ajaxLoader-inner"></div>
<form method="post">
      <div id="form-step1">
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


