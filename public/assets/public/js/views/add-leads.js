$(document).ready(function() {
	
	
	
	
//Finds y value of the error message  object
function findPos(obj) {
	var curtop = -90;
	if (obj.offsetParent) {
		do {
			curtop += obj.offsetTop;
		} while (obj = obj.offsetParent);
	return [curtop];
	}
}

function findPosSuc(obj) {
	var curtop = 390;
	if (obj.offsetParent) {
		do {
			curtop += obj.offsetTop;
		} while (obj = obj.offsetParent);
	return [curtop];
	}
}
//Get the error message object
var SupportDiv = document.getElementById('errormsgaddlead');
var SuccessDiv = document.getElementById('successmsg');



	// Subscribe Form
	$(".btn-add-lead").click(function(e) {
		e.preventDefault();
		
	  $(this).html('<div class="loader"></div> Submit');
      
		
		var name = $('input[name=name]').val();
		var cell = $('input[name=cell]').val();
		var email = $('input[name=email]').val();
		var baby_dob = $('input[name=baby_dob]').val();
		var message = $('textarea[name=message]').val();
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "leads/add_pro",
			type: 'POST',
			data: {
				   
				   name: name,
			       cell: cell,
			       email: email,
				   baby_dob: baby_dob,
				   message: message,
				  
				   },
			success: function(data) {
				
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form.cell").closest(".input-group").removeClass("has-error");
				$("form.email").closest(".input-group").removeClass("has-error");
				$("form.baby_dob").closest(".input-group").removeClass("has-error");
				$("form.message").closest(".input-group").removeClass("has-error");
				
			 if(data.error == 292) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
				} else if(data.error == 293) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
						
				} else if(data.error == 294) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
						
				} else if(data.error == 295) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#cell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
						
				} else if(data.error == 296) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#babydob-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
						
				} else if(data.error == 297) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#message-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
						
				
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Message sent !');
					
					window.location  = base_url + "welcome" + "?uWSQfGM35oP7vmnbaMjXH5gl2A04tbwmSEhi0sjmXWHm2l8Hpo";
					window.scroll(0,findPosSuc(SuccessDiv));
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});