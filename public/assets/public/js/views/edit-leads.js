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
var SupportDiv = document.getElementById('errormsgeditlead');



	// Subscribe Form
	$(".btn-edit-lead").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-cog fa-spin"></i>&nbsp; Updating...');
		
		var name = $('input[name=name]').val();
		var address = $('textarea[name=address]').val();
		
		var id = $(this).attr("data-id");
		
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/leads/edit_pro",
			type: 'POST',
			data: {name: name,
			       address: address,
				   id: id,
				  
				   },
			success: function(data) {
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form .address").closest(".input-group").removeClass("has-error");
				
				if(data.error == 291) {
					$(".alert-error-editlead").removeClass("hidden");
					$(".alert-error-editlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
				
					
				} else if(data.error == 292) {
					$(".alert-error-editlead").removeClass("hidden");
					$(".alert-error-editlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
					
			
				} else if(data.error == 293) {
					$(".alert-error-editlead").removeClass("hidden");
					$(".alert-error-editlead").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to lead of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#address-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Update');
						
					
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully updated !');
					window.lead = base_url + "admin/leads" + "?02Gy4bDO2QBpxEpQpZOmN2jr9gFwO6lqWAr6lVLp";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});