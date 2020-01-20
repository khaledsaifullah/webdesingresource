jQuery(document).ready(function($){
				$("#frm_details").on("submit", function(event) {
                    event.preventDefault();
 
                    $.ajax({
                        url: "somefile.php",
                        type: "post",
                        data: $(this).serialize(),
                        success: function(d) {
                            alert(d);
                        }
                    });
                });
	

});









