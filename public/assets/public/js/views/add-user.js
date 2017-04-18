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
//Get the error message object
var SupportDiv = document.getElementById('errormsgadduser');



	// Subscribe Form
	$(".btn-add-user").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Saving...');
		
		var username = $('input[name=username]').val();
		var password = $('input[name=password]').val();
		var user_type = $('select[name=user_type]').val();
		var name = $('input[name=name]').val();
		var email = $('input[name=email]').val();
		var cell = $('input[name=cell]').val();
			
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/users/add_pro",
			type: 'POST',
			data: {username: username,
			       password: password,
				   user_type: user_type,
				   name: name,
				   email: email,
				   cell: cell,
				  
				   },
			success: function(data) {
				
				$("form.username").closest(".input-group").removeClass("has-error");
				$("form .password").closest(".input-group").removeClass("has-error");
				$("form .user_type").closest(".input-group").removeClass("has-error");
				$("form .name").closest(".input-group").removeClass("has-error");
				$("form .email").closest(".input-group").removeClass("has-error");
				$("form .cell").closest(".input-group").removeClass("has-error");
				
				
				if(data.error == 291) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#username-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
				} else if(data.error == 2910) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#username-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
				} else if(data.error == 292) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#password-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
				} else if(data.error == 293) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
				} else if(data.error == 294) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					} else if(data.error == 295) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					} else if(data.error == 296) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					} else if(data.error == 297) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#cell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
					} else if(data.error == 298) {
					$(".alert-error-adduser").removeClass("hidden");
					$(".alert-error-adduser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#cell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
				
					
					
				} else if (data.error == 2990){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully saved !');
					window.location = base_url + "admin/users" + "?Gr8cvc8YGhgH78lgnChH";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});