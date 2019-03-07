<div class="modal fade register_pop_up" tabindex="-1" role="dialog" aria-labelledby="admission">
                          <div class="modal-dialog modal-lg" role="document">
                           
                            <div class="modal-content">
                                    <div class="admission_form">
                                        <h5>REGISTRATION FORM <span id="helpBlock" class="help-block">* required feild</span></h5>
                                        <form id="formRegister" method="post" action="{{url('/student-register')}}">
                                        	{{csrf_field()}}
                                            <div class="row">
                                                <input type="hidden" id="training_program" value="" required/>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullname">Full Name<sup>*</sup></label>
                                                        <input type="text" name="fullname"
                                                        class="form-control" id="fullname" placeholder="Enter Full Name" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email">Email Address<sup>*</sup></label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="contact">Contact Number<sup>*</sup></label>
                                                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact Number" required/>
                                                    </div>
                                                </div>

                                                <?php $data = App\Models\Destination::all();?>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="contact">Destination<sup>*</sup></label>
                                                         <select class="form-control" id="destination" name="destination" required/>
                                                         <option selected="">Select Destination</option>
                                                         @foreach($data as $d)
                                                        	<option value="{{$d->id}}">{{$d->destination}}</option>
                                                        	@endforeach
                                                    	</select>
                                                    </div>
                                                </div>


                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="intake">Intake<sup>*</sup></label>
                                                        <select class="intake form-control" name="intake" />
                                                        	<option value="0" disabled="true" selected="true">Intake</option> 
                                                    	</select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="qualification">Qualification<sup>*</sup></label>
                                                        <select class="qualification form-control" name="qualification" />
                                                        	<option value="" selected=" disabled">--Select--</option>
                                                        	<option value="Higher Secondary (+2)">Higher Secondary (+2)</option>
                                                        	<option value="Graduate" >Graduate</option> 
                                                        	<option value="Under Graduate" >Under Graduate</option> 
                                                    	</select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="contact">Course of Study<sup>*</sup></label>
                                                        <input type="text"  name="course_study"
                                                        class="form-control" id="course_study" placeholder="Enter Course of Study" required/>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="text_message">Text</label>
                                                        <textarea class="form-control" id="text_message" name="text_message" rows="4" cols="6" placeholder="Enter Text.." style="resize: none"></textarea>
                                                    </div>
                                                </div>
                                            </div><!-- /.row -->
                                            <div id="status"></div>
                                            <button id="submit" type="submit" class="btn btn-warning">Submit</button>
                                            
                                        </form>
                                    </div><!-- / .admission_form -->
                                </div>
                            </div>
            </div>	