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
var SupportDiv = document.getElementById('errormsgedituser');



	// Subscribe Form
	$(".btn-edit-user").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-cog fa-spin"></i>&nbsp; Updating...');
		
		var username = $('input[name=username]').val();
		var password = $('input[name=password]').val();
		var user_type = $('select[name=user_type]').val();
		var name = $('input[name=name]').val();
		var email = $('input[name=email]').val();
		var cell = $('input[name=cell]').val();
		var id = $(this).attr("data-id");
		
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/users/edit_pro",
			type: 'POST',
			data: {username: username,
			       password: password,
				   user_type: user_type,
				   name: name,
				   email: email,
				   cell: cell,
				   id: id,
				  
				   },
			success: function(data) {
				
				$("form.username").closest(".input-group").removeClass("has-error");
				$("form .password").closest(".input-group").removeClass("has-error");
				$("form .user_type").closest(".input-group").removeClass("has-error");
				$("form .name").closest(".input-group").removeClass("has-error");
				$("form .email").closest(".input-group").removeClass("has-error");
				$("form .cell").closest(".input-group").removeClass("has-error");
				
				
				
				if(data.error == 391) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#username-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				} else if(data.error == 3910) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#username-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				} else if(data.error == 392) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#password-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				} else if(data.error == 393) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				} else if(data.error == 394) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					} else if(data.error == 395) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					} else if(data.error == 396) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					} else if(data.error == 397) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#cell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					
					} else if(data.error == 398) {
					$(".alert-error-edituser").removeClass("hidden");
					$(".alert-error-edituser").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#cell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				
					
					
				} else if (data.error == 3990){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully updated !');
					window.location = base_url + "admin/users" + "?02Gy4bDO2QBpxEpQpZOmN2jr9gFwO6lqWAr6lVLp";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});