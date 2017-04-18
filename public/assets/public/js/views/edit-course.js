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
var SupportDiv = document.getElementById('errormsgeditcourse');



	// Subscribe Form
	$(".btn-edit-course").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-cog fa-spin"></i>&nbsp; Updating...');
		
		var name = $('input[name=name]').val();
		var location_id = $('select[name=location_id]').val();
		var min_quantity = $('input[name=min_quantity]').val();
		var max_quantity = $('input[name=max_quantity]').val();
		var id = $(this).attr("data-id");
		
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/courses/edit_pro",
			type: 'POST',
			data: { name: name,
			       location_id: location_id,
				   min_quantity: min_quantity,
				   max_quantity: max_quantity,
				   id: id,
				  
				   },
			success: function(data) {
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form .location").closest(".input-group").removeClass("has-error");
				$("form .min_quantity").closest(".input-group").removeClass("has-error");
				$("form .max_quantity").closest(".input-group").removeClass("has-error");
				
				
				if(data.error == 291) {
					$(".alert-error-editcourse").removeClass("hidden");
					$(".alert-error-editcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				
				
					
				
					
				} else if(data.error == 295) {
					$(".alert-error-editcourse").removeClass("hidden");
					$(".alert-error-editcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#location-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					
				} else if(data.error == 296) {
					$(".alert-error-editcourse").removeClass("hidden");
					$(".alert-error-editcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#minquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					
				} else if(data.error == 297) {
					$(".alert-error-editcourse").removeClass("hidden");
					$(".alert-error-editcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#maxquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
					
				
					
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully updated !');
					window.location = base_url + "admin/courses" + "?02Gy4bDO2QBpxEpQpZOmN2jr9gFwO6lqWAr6lVLp";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});