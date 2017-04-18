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
var SupportDiv = document.getElementById('errormsgaddbooking');
var SuccessDiv = document.getElementById('successmsg');



	// Subscribe Form
	$(".btn-add-booking").click(function(e) {
		e.preventDefault();
		
		//$(this).html('<i class="theme_btn btn-add-elead"></i>&nbsp; Submit');
		$(this).html('<div class="loader"></div> Submit Registration Form');
		
		var course_type = $('select[name=course_type]').val();
		var course_id = $('select[name=course_id]').val();
		var card_id = $('select[name=card_id]').val();
		
		var name = $('input[name=name]').val();
		var cell = $('input[name=cell]').val();
		var email = $('input[name=email]').val();
		var address = $('input[name=address]').val();
		
		var source = $('input[name=source]').val();
		var disclaimer = $('input[name=disclaimer]').val();
		
		var baby_name = $('input[name=baby_name]').val();
		var baby_dob = $('input[name=baby_dob]').val();
		var crawling = $('select[name=crawling]').val();
		var walking = $('select[name=walking]').val();
		
		var emergency_name = $('input[name=emergency_name]').val();
		var emergency_phone = $('input[name=emergency_phone]').val();
		
		var answer_postnatal = $('select[name=answer_postnatal]').val();
		var comments_postnatal = $('textarea[name=comments_postnatal]').val();
		
		var answer_prof = $('select[name=answer_prof]').val();
		var comments_prof = $('textarea[name=comments_prof]').val();
		
		var answer_gentle = $('select[name=answer_gentle]').val();
		var comments_gentle = $('textarea[name=comments_gentle]').val();
		
		var answer_immun = $('select[name=answer_immun]').val();
		var comments_immun = $('textarea[name=comments_immun]').val();
		
		var answer_allergies = $('select[name=answer_allergies]').val();
		var comments_allergies = $('textarea[name=comments_allergies]').val();
		
		var answer_health = $('select[name=answer_health]').val();
		var comments_health = $('textarea[name=comments_health]').val();
		
		var answer_info = $('select[name=answer_info]').val();
		var comments_info = $('textarea[name=comments_info]').val();
		
		var comments_birth = $('textarea[name=comments_birth]').val();
		
		var full_term = $('input[name=full_term]').val();
		var premature = $('input[name=premature]').val();
		var premature_days = $('input[name=premature_days]').val();
		var overdue = $('input[name=overdue]').val();
		var overdue_days = $('input[name=overdue_days]').val();
		
		var born = $('select[name=born]').val();
		
		
				
		var that = $(this);
		
		$.ajax({
			url: base_url + "booking/add_pro",
			type: 'POST',
			data: {
				   course_type: course_type,
				   card_id: card_id,
				   course_id: course_id,
				   
				   name: name,
			       cell: cell,
			       email: email,
				   address: address,
				   
				   source: source,
				   disclaimer: disclaimer,
				   
				   baby_name: baby_name,
				   baby_dob: baby_dob,
				   crawling: crawling,
				   walking: walking,
				   
				   emergency_name: emergency_name,
				   emergency_phone: emergency_phone,
				   
				   answer_postnatal: answer_postnatal,
			       comments_postnatal: comments_postnatal,
				   
				   answer_prof: answer_prof,
			       comments_prof: comments_prof,
				   
				   answer_gentle: answer_gentle,
			       comments_gentle: comments_gentle,
				   
				   answer_immun: answer_immun,
			       comments_immun: comments_immun,
				   
				   answer_allergies: answer_allergies,
			       comments_allergies: comments_allergies,
				   
				   answer_health: answer_health,
			       comments_health: comments_health,
				   
				   answer_info: answer_info,
			       comments_info: comments_info,
				   
				   
				   comments_birth: comments_birth,
				   
			       full_term: full_term,
			       premature: premature,
				   premature_days: premature_days,
				   overdue: overdue,
				   overdue_days: overdue_days,
				   
				    born: born,
				   
				   
				  
				   },
			success: function(data) {
				
				$("form.course_type").closest(".input-group").removeClass("has-error");
				$("form.course_id").closest(".input-group").removeClass("has-error");
				$("form.card_id").closest(".input-group").removeClass("has-error");
				
				$("form.name").closest(".input-group").removeClass("has-error");
				$("form.cell").closest(".input-group").removeClass("has-error");
				$("form.email").closest(".input-group").removeClass("has-error");
				$("form.address").closest(".input-group").removeClass("has-error");
				
				$("form.source").closest(".input-group").removeClass("has-error");
				$("form.disclaimer").closest(".input-group").removeClass("has-error");
				
				$("form.baby_name").closest(".input-group").removeClass("has-error");
				$("form.baby_dob").closest(".input-group").removeClass("has-error");
				$("form.crawling").closest(".input-group").removeClass("has-error");
				$("form.walking").closest(".input-group").removeClass("has-error");
				
				$("form.emergency_name").closest(".input-group").removeClass("has-error");
				$("form.emergency_phone").closest(".input-group").removeClass("has-error");
				
				$("form.answer_postnatal").closest(".input-group").removeClass("has-error");
				$("form.comments_postnatal").closest(".input-group").removeClass("has-error");
				
				$("form.answer_prof").closest(".input-group").removeClass("has-error");
				$("form.comments_prof").closest(".input-group").removeClass("has-error");
				
				$("form.answer_gentle").closest(".input-group").removeClass("has-error");
				$("form.comments_gentle").closest(".input-group").removeClass("has-error");
				
				$("form.answer_immun").closest(".input-group").removeClass("has-error");
				$("form.comments_immun").closest(".input-group").removeClass("has-error");
				
				$("form.answer_allergies").closest(".input-group").removeClass("has-error");
				$("form.comments_allergies").closest(".input-group").removeClass("has-error");
				
				$("form.answer_health").closest(".input-group").removeClass("has-error");
				$("form.comments_health").closest(".input-group").removeClass("has-error");
				
				$("form.answer_info").closest(".input-group").removeClass("has-error");
				$("form.comments_info").closest(".input-group").removeClass("has-error");
				
				$("form.comments_birth").closest(".input-group").removeClass("has-error");
				
				$("form.full_term").closest(".input-group").removeClass("has-error");
				$("form.premature").closest(".input-group").removeClass("has-error");
				$("form.premature_days").closest(".input-group").removeClass("has-error");
				$("form.overdue").closest(".input-group").removeClass("has-error");
				$("form.overdue_days").closest(".input-group").removeClass("has-error");
				
				$("form.born").closest(".input-group").removeClass("has-error");
				
				
				
				if(data.error == 391) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#coursetype-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
				
					
				} else if(data.error == 392) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#course-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
				} else if(data.error == 393) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#card-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 291) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#name-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
				} else if(data.error == 292) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
						
						
				} else if(data.error == 293) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#email-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 294) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#cell-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
						
				} else if(data.error == 295) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#address-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 296) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#disclaimer-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
						
				} else if(data.error == 394) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#babyname-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
			} else if(data.error == 395) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#babydob-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
				
				} else if(data.error == 396) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#crawling-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
				} else if(data.error == 397) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#walking-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
				} else if(data.error == 398) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#emergencyname-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 399) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#emergencyphone-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 491) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answerpostnatal-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 492) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentspostnatal-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 493) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answerprof-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 494) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentsprof-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
													
				} else if(data.error == 495) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answergentle-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 496) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentsgentle-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 497) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answerimmun-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 498) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentsimmun-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
			
					
					
			} else if(data.error == 591) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answerallergies-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
																																						
				} else if(data.error == 592) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentsallergies-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 593) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answerhealth-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
				} else if(data.error == 594) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentshealth-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
				} else if(data.error == 596) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#answerinfo-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
			} else if(data.error == 597) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#commentsinfo-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
					
					
					
			} else if(data.error == 691) {
					$(".alert-error-addbooking").removeClass("hidden");
					$(".alert-error-addbooking").html('<span style="color: #C00"><i class="fa fa-warning (alias)"></i>&nbsp;' + data.error_msg + '</span>').fadeIn();
					 //Scroll to booking of error message SupportDiv on load
                    window.scroll(0,findPos(SupportDiv));
					$('#born-group').addClass('has-error');
					that.html('<i class="icon-check position-left"></i>Submit Registration Form');
																																
																													
																						
				
				} else if (data.error == 290){
					that.prop("disabled", true);
					that.html('<i class="icon-check position-left"></i> Successfully submitted !');
					
					window.location  = base_url + "booking" + "?uWSQfGM35oP7vmnbaMjXH5gl2A04tbwmSEhi0sjmXWHm2l8Hpo";
					window.scroll(0,findPosSuc(SuccessDiv));
				}
				
			}
		});
		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});
	
	
	
	
});