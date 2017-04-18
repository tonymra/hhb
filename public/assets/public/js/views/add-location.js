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
var SupportDiv = document.getElementById('errormsgaddlocation');



	// Subscribe Form
	$(".btn-add-location").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Saving...');
		
		var name = $('input[name=name]').val();
		var address = $('textarea[name=address]').val();
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/locations/add_pro",
			type: 'POST',
			data: {name: name,
			       address: address,
				   
				   },
			success: function(data) {
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form .address").closest(".input-group").removeClass("has-error");
				
				if(data.error == 291) {
					$(".alert-error-addlocation").removeClass("hidden");
					$(".alert-error-addlocation").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
				
					
				} else if(data.error == 292) {
					$(".alert-error-addlocation").removeClass("hidden");
					$(".alert-error-addlocation").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
					
				} else if(data.error == 293) {
					$(".alert-error-addlocation").removeClass("hidden");
					$(".alert-error-addlocation").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to location of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#address-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Submit');
					
			
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully saved !');
					window.location = base_url + "admin/locations" + "?Gr8cvc8YGhgH78lgnChH";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});