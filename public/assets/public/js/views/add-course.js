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
var SupportDiv = document.getElementById('errormsgaddcourse');



	// Subscribe Form
	$(".btn-add-course").click(function(e) {
		e.preventDefault();
		
		$(this).html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Saving...');
		
		var name = $('input[name=name]').val();
		var descp= $('textarea[name=descp]').val();
		var location_id = $('select[name=location_id]').val();
		var max_quantity = $('input[name=max_quantity]').val();
		var min_quantity = $('input[name=min_quantity]').val();
		
		var starttime = $('input[name=starttime]').val();
		var endtime = $('input[name=endtime]').val();
		
		var classdateone = $('input[name=classdateone]').val();
		var classdatetwo = $('input[name=classdatetwo]').val();
		var classdatethree = $('input[name=classdatethree]').val();
		var classdatefour = $('input[name=classdatefour]').val();
		var classdatefive = $('input[name=classdatefive]').val();
		
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "admin/courses/add_pro",
			type: 'POST',
			data: {
				   name: name,
			       location_id: location_id,
				   descp: descp,
				   min_quantity: min_quantity,
				   max_quantity: max_quantity,
				   starttime:starttime,
				   endtime:endtime,
				   classdateone:classdateone,
				   classdatetwo:classdatetwo,
				   classdatethree:classdatethree,
				   classdatefour:classdatefour,
				   classdatefive:classdatefive,
				   
				   },
			success: function(data) {
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form .location").closest(".input-group").removeClass("has-error");
				$("form .descp").closest(".input-group").removeClass("has-error");
				$("form .min_quantity").closest(".input-group").removeClass("has-error");
				$("form .max_quantity").closest(".input-group").removeClass("has-error");
				
				$("form .starttime").closest(".input-group").removeClass("has-error");
				$("form .endtime").closest(".input-group").removeClass("has-error");
				
				$("form .classdateone").closest(".input-group").removeClass("has-error");
				$("form .classdatetwo").closest(".input-group").removeClass("has-error");
				$("form .classdatethree").closest(".input-group").removeClass("has-error");
				$("form .classdatefour").closest(".input-group").removeClass("has-error");
				$("form .classdatefive").closest(".input-group").removeClass("has-error");
				
				
				
				if(data.error == 291) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
				
					
				} else if(data.error == 292) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
					
				} else if(data.error == 293) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#location-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
					
				
				} else if(data.error == 294) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#maxquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
					
				} else if(data.error == 2944) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#minquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
					
				} else if(data.error == 29444) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#minquantity-group').addClass('has-error');
					$('#maxquantity-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
					
					
					
			} else if(data.error == 151) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#starttime-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
			} else if(data.error == 152) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#endtime-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
			
			
			} else if(data.error == 171) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdateone-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
			} else if(data.error == 172) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatetwo-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
					
			} else if(data.error == 173) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatethree-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');					
					
					
					
			} else if(data.error == 174) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatefour-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
			} else if(data.error == 175) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatefive-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
					
			} else if(data.error == 181) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdateone-group').addClass('has-error');
					$('#classdatetwo-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');					
					
					
					
			} else if(data.error == 182) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdateone-group').addClass('has-error');
					$('#classdatethree-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
			} else if(data.error == 183) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdateone-group').addClass('has-error');
					$('#classdatefour-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
					
			} else if(data.error == 184) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdateone-group').addClass('has-error');
					$('#classdatefive-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');					
					
					
							
			} else if(data.error == 185) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatetwo-group').addClass('has-error');
					$('#classdatethree-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
			} else if(data.error == 186) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatetwo-group').addClass('has-error');
					$('#classdatefour-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
					
			} else if(data.error == 187) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatetwo-group').addClass('has-error');
					$('#classdatefive-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');					
					
			
			} else if(data.error == 188) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatethree-group').addClass('has-error');
					$('#classdatefour-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');	
					
			} else if(data.error == 189) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatethree-group').addClass('has-error');
					$('#classdatefive-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
					
			} else if(data.error == 190) {
					$(".alert-error-addcourse").removeClass("hidden");
					$(".alert-error-addcourse").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to course of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#classdatefour-group').addClass('has-error');
					$('#classdatefive-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i> Save Course');
			
			
			
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully saved !');
					window.location = base_url + "admin/courses" + "?uWSQfGM35oP7vmnbaMjXH5gl2A04tbwmSEhi0sjmXWHm2l8Hpo";
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});