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
var SupportDiv = document.getElementById('errormsgaddclasses');



	// Subscribe Form
	$(".btn-add-classes").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Saving...');
		
		var name = $('input[name=name]').val();
		var descp= $('textarea[name=descp]').val();
		var location_id = $('select[name=location_id]').val();
		var classday = $('select[name=classday]').val();
		var min_quantity = $('input[name=min_quantity]').val();
		var max_quantity = $('input[name=max_quantity]').val();
		var starttime = $('input[name=starttime]').val();
		var endtime = $('input[name=endtime]').val();
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/classes/add_pro",
			type: 'POST',
			data: {
				   name: name,
			       location_id: location_id,
				   descp: descp,
				   classday: classday,
				   min_quantity: min_quantity,
				   max_quantity: max_quantity,
				   starttime:starttime,
				   endtime:endtime,
				   },
			success: function(data) {
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form .location").closest(".input-group").removeClass("has-error");
				$("form .descp").closest(".input-group").removeClass("has-error");
				$("form .min_quantity").closest(".input-group").removeClass("has-error");
				$("form .max_quantity").closest(".input-group").removeClass("has-error");
				$("form .classday").closest(".input-group").removeClass("has-error");
				$("form .starttime").closest(".input-group").removeClass("has-error");
				$("form .endtime").closest(".input-group").removeClass("has-error");
				
				
				if(data.error == 291) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');
					
				
					
				} else if(data.error == 292) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');
					
					
				} else if(data.error == 293) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classday-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');
					
					
				
				} else if(data.error == 294) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#location-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');
					
					
					
			} else if(data.error == 295) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#minquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');
					
			} else if(data.error == 296) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#maxquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');	
					
					
			} else if(data.error == 297) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#minquantity-group').addClass('has-error');
					$('#maxquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');					
					
			
			
			
			
			} else if(data.error == 298) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#starttime-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');
					
			} else if(data.error == 299) {
					$(".alert-error-addclasses").removeClass("hidden");
					$(".alert-error-addclasses").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to classes of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#endtime-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Class');	
					
					
			
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully saved !');
					window.location = base_url + "admin/classes" + "?uWSQfGM35oP7vmnbaMjXH5gl2A04tbwmSEhi0sjmXWHm2l8Hpo";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});