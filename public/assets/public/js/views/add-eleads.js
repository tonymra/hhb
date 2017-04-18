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
	$(".btn-add-elead").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Sending...');
		
		
		var ename = $('input[name=ename]').val();
		var ecell = $('input[name=ecell]').val();
		var eemail = $('input[name=eemail]').val();
		var ebaby_dob = $('input[name=ebaby_dob]').val();
		var emessage = $('textarea[name=emessage]').val();
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "leads/add_pro",
			type: 'POST',
			data: {
				   
				   name: ename,
			       cell: ecell,
			       email: eemail,
				   baby_dob: ebaby_dob,
				   message: emessage,
				  
				   },
			success: function(data) {
				
				
				$("form.ename").closest(".input-group").removeClass("has-error");
				$("form .ecell").closest(".input-group").removeClass("has-error");
				$("form .eemail").closest(".input-group").removeClass("has-error");
				$("form.ebaby_dob").closest(".input-group").removeClass("has-error");
				$("form.emessage").closest(".input-group").removeClass("has-error");
				
			 if(data.error == 292) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#ename-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
				} else if(data.error == 293) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#eemail-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
						
				} else if(data.error == 294) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#eemail-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
						
				} else if(data.error == 295) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#ecell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
						
				} else if(data.error == 296) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#ebabydob-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
						
				} else if(data.error == 297) {
					$(".alert-error-addlead").removeClass("hidden");
					$(".alert-error-addlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#emessage-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
						
				
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Message sent !');
					
					window.location  = base_url + "booking" + "?uWSQfGM35oP7vmnEhi0sjmXWHm2l8Hpo";
					window.scroll(0,findPosSuc(SuccessDiv));
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});