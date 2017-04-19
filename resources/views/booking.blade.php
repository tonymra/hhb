@extends('layouts.common')




@section('header')

    @include('includes.website-header')

@endsection




@section('slider')

    <section id="booking_header" class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bg-color2 section_break">
                    <h1 class="section_break_header">Make a Booking</h1>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('content')




    <section id="contact" class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="col-md-6 col-md-offset-3 text-center">
                        <img src="{{asset('assets/public/img/hhbemail.jpg')}}" alt="Happy Healthy Baby Registration" width="235" height="151" alt=""/> </div>

                    <div class="contact-form">



                        <div id="errormsgaddbooking" class="alert alert-danger hidden col-md-12 alert-error-addbooking "><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	</div>

                        <form class="" method="post" action="/booking/add_pro/" accept-charset="utf-8" >

                            <div class="row">

                                <div class="col-sm-12 text-center">
                                    <h4>Course/Class Details</h4>
                                </div>



                                <div  id="coursetype-group" class="col-md-4">
                                    <label for="lead_type">Please select the course type <span class="required" style="color: #F00408">*</span></label>

                                </div>




                                <div  class="form-group">
                                    <div id="course-group" class="col-md-4">
                                        <label class="control-label" for="course_id"><strong>Course Name:</strong> </label>
                                        <select id="course_id" name="course_id" class="form-control text-semibold text-size-mini  border-lg  col-xs-4 input-xlg"  >
                                            <option value="0">- Select course name - </option>

                                        </select>

                                    </div>
                                </div>




                                <div class="cards_result_area form-group col-md-4" style="display:none">
                                    <div  id="card-group" class="col-md-4">
                                        <label for="card_id">Select class card <span class="required" style="color: #F00408">*</span></label>

                                    </div>
                                </div>


                            </div>





                            <div class="row">

                                <div class="col-sm-12 text-center">
                                    <h4>Mother / Father Details</h4>
                                </div>


                                <div  id="name-group" class="col-md-6 ">
                                    <label for="address">Full name <span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true"  name="name" id="name" class="form-control" >
                                </div>

                                <div  id="email-group" class="col-md-6">
                                    <label for="email">Email address <span class="required" style="color: #F00408">*</span></label>
                                    <input type="email" aria-required="true" size="30"  name="email" id="email" class="form-control">
                                </div>

                                <div id="cell-group"  class="col-md-6">
                                    <label for="address">Mobile number <span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true"  name="cell" id="cell" class="form-control" >
                                </div>

                                <div id="address-group"  class="col-md-6">
                                    <label for="address">Address<span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true"  name="address" id="address" class="form-control" >
                                </div>


                            </div>





                            <div class="row">

                                <div class="col-sm-12 text-center">
                                    <h4>Baby Details</h4>
                                </div>



                                <div  id="babyname-group" class="col-md-6 ">
                                    <label for="baby_name">Enter your baby's name <span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true"  name="baby_name" id="baby_name" class="form-control" >
                                </div>



                                <div id="babydob-group" class="col-md-6">
                                    <label for="babydob">Enter your baby's date of birth <span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true" size="30"  name="baby_dob" id="babydob" class="form-control" >
                                </div>

                                <div  id="crawling-group" class="col-md-6 ">
                                    <label for="crawling">Crawling <span class="required" style="color: #F00408">*</span></label>

                                </div>

                                <div  id="walking-group" class="col-md-6">
                                    <label for="walking">Walking <span class="required" style="color: #F00408">*</span></label>

                                </div>



                            </div>



                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h4>Emergency Contact</h4>
                                </div>



                                <div  id="emergencyname-group" class="col-md-6 ">
                                    <label for="emergency_name">Contact Name <span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true"  name="emergency_name" id="emergency_name" class="form-control" >
                                </div>


                                <div id="emergencyphone-group"  class="col-md-6 ">
                                    <label for="emergency_phone">Contact Number <span class="required" style="color: #F00408">*</span></label>
                                    <input type="text" aria-required="true"  name="emergency_phone" id="emergency_phone" class="form-control" >
                                </div>

                            </div>






                            <div class="row">


                                <div class="col-sm-12 text-center">
                                    <h4>Please complete the following questions with as much detail as possible:</h4>
                                </div>


                                <div  id="answerpostnatal-group" class="col-md-10">
                                    <label for="answer_postnatal">1. Have you and your baby had your 6-week postnatal checkup? <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answerpostnatal-group" class="col-md-2">

                                </div>


                                <div  id="commentspostnatal-group" class="col-md-12">
                                    <label for="comments_postnatal">Comments </label>
                                    <textarea name="comments_postnatal" rows="3" class="form-control" id="comments_postnatal" ></textarea>
                                </div>

                            </div>




                            <div class="row">

                                <div  id="answerprof-group" class="col-md-10">
                                    <label for="answer_prof">2. Did your medical professional have any concerns? If so, what? <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answerprof-group" class="col-md-2">

                                </div>


                                <div  id="commentsprof-group" class="col-md-12">
                                    <label for="comments_prof">Comments </label>
                                    <textarea name="comments_prof" rows="3" class="form-control" id="comments_prof" ></textarea>
                                </div>


                            </div>





                            <div class="row">

                                <div  id="answergentle-group" class="col-md-10">
                                    <label for="answer_gentle">3. Is there anything which may prevent you doing gentle stretches or that may make it difficult taking part in gentle exercises? <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answergentle-group" class="col-md-2">

                                </div>


                                <div  id="commentsgentle-group" class="col-md-12">
                                    <label for="comments_gentle">Comments </label>
                                    <textarea name="comments_gentle" rows="3" class="form-control" id="comments_gentle" ></textarea>
                                </div>


                            </div>




                            <div class="row">

                                <div  id="born-group" class="col-md-12">
                                    <label for="born">4. Was your baby born: <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="born-group" class="col-md-6">

                                </div>


                            </div>


                            <div class="row">

                                <div  class="born_result_area form-group col-md-6" style="display:none">

                                </div>


                            </div>





                            <div class="row">

                                <div  id="commentsbirth-group" class="col-md-12">
                                    <label for="comments_birth">5. Is there anything about the birth of your baby, and how you experienced it that might be useful to know? </label>
                                </div>

                                <div  id="commentsbirth-group" class="col-md-12">
                                    <label for="comments_birth">Comments </label>
                                    <textarea name="comments_birth" rows="3" class="form-control" id="comments_birth" ></textarea>
                                </div>


                            </div>






                            <div class="row">

                                <div  id="answerimmun-group" class="col-md-10">
                                    <label for="answer_immun">6. Will your baby have immunizations within 24 hours of a session? <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answerimmun-group" class="col-md-2">

                                </div>


                                <div  id="commentsimmun-group" class="col-md-12">
                                    <label for="comments_immun">Comments </label>
                                    <textarea name="comments_immun" rows="3" class="form-control" id="comments_immun" ></textarea>
                                </div>


                            </div>




                            <div class="row">

                                <div  id="answerallergies-group" class="col-md-10">
                                    <label for="answer_allergies">7. Do you or your baby have any allergies? <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answerallergies-group" class="col-md-2">

                                </div>


                                <div  id="commentsallergies-group" class="col-md-12">
                                    <label for="comments_allergies">Comments </label>
                                    <textarea name="comments_allergies" rows="3" class="form-control" id="comments_allergies" ></textarea>
                                </div>


                            </div>



                            <div class="row">

                                <div  id="answerhealth-group" class="col-md-10">
                                    <label for="answer_health">8. Does your baby have any health conditions (including colic, clicky hips, reflux etc.) Please give
                                        full details, including current treatment taken and/or other medical professionals involved in
                                        the treatment/monitoring of the condition. <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answerhealth-group" class="col-md-2">

                                </div>


                                <div  id="commentshealth-group" class="col-md-12">
                                    <label for="comments_health">Comments </label>
                                    <textarea name="comments_health" rows="3" class="form-control" id="comments_health" ></textarea>
                                </div>


                            </div>




                            <div class="row">

                                <div  id="answerinfo-group" class="col-md-10">
                                    <label for="answer_info">9. Is there any further information about you or your baby you would like to make me aware of,
                                        relevant to baby yoga or baby massage? <span class="required" style="color: #F00408">*</span></label>
                                </div>

                                <div  id="answerinfo-group" class="col-md-2">

                                </div>


                                <div  id="commentsinfo-group" class="col-md-12">
                                    <label for="comments_info">Comments </label>
                                    <textarea name="comments_info" rows="3" class="form-control" id="comments_info" ></textarea>
                                </div>


                            </div>




                            <div class="row">

                                <div  id="source-group" class="col-md-12">
                                    <label for="source">10. Where did you hear about us?<span class="required" style="color: #F00408">*</span></label>
                                </div>



                                <div  id="source-group" class="col-md-12">
                                    <input name="source" type="text" multiple class="form-control" id="source"  aria-required="true" >
                                </div>


                            </div>



                            <div class="row">

                                <div  id="walking-group" class="col-md-12">
                                    <h4>Safety guidelines</h4>
                                </div>



                                <div class="col-md-12"  style="text-align:justify !important">

                                    <p><strong>Please read these guidelines carefully before you attend your first class.</strong></p>

                                    <p><strong>Parents work with their own baby during classes.</strong></p>

                                    <p><strong>When practicing with your baby</strong>, never rush or force anything. If you feel stressed or tense, just take a
                                        break and come back to the practice later. Always ensure that you feel safe, secure and confident with
                                        the way you are holding or working with your baby. Never do anything that you do not feel comfortable
                                        with.</p>

                                    <p><strong>If your baby is unwell</strong>, it is best not to attend the class. If your baby is crying excessively and
                                        cannot be comforted, he/she may be ill. Never practice on a distressed baby, or if your baby is limp,
                                        pale, has a temperature, or any difficulty breathing. Please seek appropriate medical help. <strong>Please
                                            contact me if you are unsure about whether to attend a class or not.</strong></p>

                                    <p><strong>It is not recommended to practice within</strong> 24 hours of your baby’s immunizations, but if that is the
                                        case, and you are doing a baby yoga class, you can still attend the class to learn the new strokes. A
                                        doll will be provided for you to practice on during class.</p>

                                    <p><strong>It is not recommended to practice</strong> baby yoga if you are within the first 14-16 weeks of a new
                                        pregnancy.</p>

                                    <p><strong>Missed classes</strong> - unfortunately no refunds will be issued for classes that are missed, however, we do
                                        understand that this may be unavoidable, due to illness or immunizations. In the event that either of
                                        these circumstances should arise, please contact us in advance and where availability allows, we will
                                        switch you to another course for the corresponding session.</p>

                                </div>

                            </div>



                            <div class="row">

                                <div  id="walking-group" class="col-md-12">
                                    <h4>Disclaimer</h4>
                                </div>



                                <div class="col-md-12"  style="text-align:justify !important">

                                    <ul class="list3">
                                        <li>I have read the above safety guidelines and will ensure that I adhere to them.</li>
                                        <li>I take full responsibility for myself and my baby, and for everything that happens to me and
                                            my baby in relation to the Baby Yoga and/or Baby Massage classes.</li>
                                        <li>If I have any doubts, I will seek the advice of my GP/medical professional before proceeding
                                            with Baby Yoga and/or Baby Massage classes.</li>
                                        <li>I will keep the Instructor informed of any changes in health or health issues that arise over the
                                            course of the classes, both for me and my baby.</li>
                                        <li>I understand that it is my responsibility to check the class schedule on Facebook before I attend
                                            a class. Dates when classes will not be taking place will be posted on the Happy Healthy Baby
                                            Facebook page in advance.</li>
                                        <li>When I purchase a class card, I WILL LET THE TEACHER KNOW AT LEAST 24HRS IN ADVANCE IF
                                            I AM UNABLE TO ATTEND A CLASS (by WhatsApp on 083 256 9826 or email on
                                            <a href="mailto:janette@happyhealthbaby.co.za" target="_blank">janette@happyhealthbaby.co.za</a> )</li>
                                        <li>I understand that the Teacher may take some photos of me/ my baby during classes and agree
                                            for these to be used for marketing purposes to promote Happy Healthy Baby (HHB). HHB
                                            agrees not to ‘tag’ anybody in any photos posted on their Facebook page and for individuals
                                            to ‘tag’ themselves if they want to.</li>

                                    </ul>

                                </div>

                                <div id="disclaimer-group" class="form-group col-md-12">
                                    <label>
                                        <input type="checkbox" value=" " id="checkboxterms" name="disclaimer" onClick="checkBoxterms();">
                                        <font face="Arial, Helvetica, sans-serif">
                                            <span>I have read and agree to the Disclaimer above </span>
                                        </font>
                                    </label>
                                </div>

                            </div>


                            <div class="row">

                                <div  id="walking-group" class="col-md-12 text-center">
                                    <h4>The information disclosed in this form is strictly confidential.</h4>
                                    <h4>Thank you for your support.</h4>
                                </div>
                            </div>



                            <div class="row">
                                <div class=" text-center col-md-6 col-md-offset-3">

                                    <button type="submit" class="theme_btn btn-add-booking">Submit Registration Form</button>
                                </div>
                            </div>

                        </form>

                    </div>


                </div>

            </div>
        </div>
    </section>




@endsection









@section('scripts')


@endsection

