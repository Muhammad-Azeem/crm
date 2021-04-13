@extends('layouts.master.master-admin')
@section('header')
    <style>
        .kt-badge--success {
            background: #1BB580 !important;
        }
    </style>
@stop
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">
                        New User
                    </h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter user details and submit </span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <a href="#" class="btn btn-default btn-bold">
                        Back </a>
                    <div class="btn-group">
                        <button type="submit" class="btn btn-brand btn-bold">
                            Submit </button>


                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first">

                <!--begin: Form Wizard Nav -->
                {{-- <div class="kt-wizard-v4__nav">
                    <div class="kt-wizard-v4__nav-items nav">


                        <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step">
                            <div class="kt-wizard-v4__nav-body">
                                <div class="kt-wizard-v4__nav-number">
                                    2
                                </div>
                                <div class="kt-wizard-v4__nav-label">
                                    <div class="kt-wizard-v4__nav-label-title">
                                        Information
                                    </div>
                                    <div class="kt-wizard-v4__nav-label-desc">
                                        User's Information
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step">
                            <div class="kt-wizard-v4__nav-body">
                                <div class="kt-wizard-v4__nav-number">
                                    3
                                </div>
                                <div class="kt-wizard-v4__nav-label">
                                    <div class="kt-wizard-v4__nav-label-title">
                                        Address
                                    </div>
                                    <div class="kt-wizard-v4__nav-label-desc">
                                        User's Shipping Address
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> --}}

                <!--end: Form Wizard Nav -->
                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid">
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                <!--begin: Form Wizard Form-->
                                <form action="{{ route('employee.forms.store') }}" id="employee-form-store" method="post" enctype="multipart/form-data" class="kt-form">
                                @csrf

                                <!--begin: Form Wizard Step 2-->
                                    <div class="kt-wizard-v4__content" >
                                        <div class="kt-section kt-section--first">
                                            <div class="kt-wizard-v4__form">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="kt-section__body">
                                                            <div class="form-group row">
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <h3 class="kt-section__title kt-section__title-md">User's Account Details</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('profile_pic') text-danger @enderror">Profile Pic<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <div class="kt-avatar kt-avatar--outline" id="kt_user_add_avatar">
                                                                        <div class="kt-avatar__holder" style="background-image: url(assets/media/users/300_10.jpg)"></div>
                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="Change avatar">
                                                                            <i class="fa fa-pen"></i>
                                                                            <input type="file" name="profile_pic">
                                                                        </label>
                                                                        <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="Cancel avatar">
																							<i class="fa fa-times"></i>
																						</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('date') text-danger @enderror">DATE:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('date') border-danger @enderror" type="date" name="date" id="" value="{{old('date')}}" >
                                                                    @error('date')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('tl_name') text-danger @enderror">T.L. NAME:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('tl_name') border-danger @enderror" type="text" name="tl_name" id="" value="{{old('tl_name')}}" placeholder="Please Enter T.L Name">
                                                                    @error('tl_name')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('agent_name') text-danger @enderror">AGENT NAME:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('agent_name') border-danger @enderror" type="text" name="agent_name" id="" value="{{old('agent_name')}}" placeholder="Please Enter Agent Name">
                                                                    @error('agent_name')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('customer_name') text-danger @enderror">CUSTOMER'S NAME:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('customer_name') border-danger @enderror" type="text" name="customer_name" id="" value="{{old('customer_name')}}" placeholder="Please Enter Customer Name">
                                                                    @error('customer_name')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('company_name') text-danger @enderror">COMPANY NAME:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('company_name') border-danger @enderror" type="text" name="company_name" id="" value="{{old('company_name')}}" placeholder="Please Enter Company Name">
                                                                    @error('company_name')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('cell_phone') text-danger @enderror">CELL PHONE:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('cell_phone') border-danger @enderror" type="text" name="cell_phone" id="" value="{{old('cell_phone')}}" placeholder="+923054812545">
                                                                    @error('cell_phone')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('home_phone') text-danger @enderror">HOME PHONE:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('home_phone') border-danger @enderror" type="text" name="home_phone" id="" value="{{old('home_phone')}}" placeholder="0424007460">
                                                                    @error('home_phone')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('customer_email') text-danger @enderror">CUSTOMER'S EMAIL :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                        <input type="text" class="form-control @error('customer_email') border-danger @enderror"  name="customer_email" value="{{old('customer_email')}}"  placeholder="customeremail@gmail.com" aria-describedby="basic-addon1">
                                                                        @error('customer_email')
                                                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('service_type') text-danger @enderror">SERVICE TYPE:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('service_type') border-danger @enderror" type="text" name="service_type" id="" value="{{old('service_type')}}" placeholder="Please Enter Your Service Type" >
                                                                    @error('service_type')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('billing_ac_number') text-danger @enderror">BILLING AC:<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('billing_ac_number') border-danger @enderror" type="text" name="billing_ac_number" id="" value="{{old('billing_ac_number')}}" placeholder="Please Enter Your Billing AC" >
                                                                    @error('billing_ac_number')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('reference') text-danger @enderror">REFERENCE :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('reference') border-danger @enderror" type="text" name="reference" id="" value="{{old('reference')}}" placeholder="Please Enter Your Reference" >
                                                                    @error('reference')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('ssn') text-danger @enderror">SSN :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('ssn') border-danger @enderror" type="text" name="ssn" id="" value="{{old('ssn')}}" placeholder="Please Enter Your SSN" >
                                                                    @error('ssn')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('dob') text-danger @enderror">DOB :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('dob') border-danger @enderror" type="date" name="dob" id="" value="{{old('dob')}}" placeholder="Please Enter Your Date of Birth" >
                                                                    @error('dob')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('per_month') text-danger @enderror">PER MONTH :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('per_month') border-danger @enderror" type="text" name="per_month" id="" value="{{old('per_month')}}" placeholder="Please Enter Your Per Month" >
                                                                    @error('per_month')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('total_to_pay') text-danger @enderror">TOTAL TO PAY :<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('total_to_pay') border-danger @enderror" type="text" name="total_to_pay" id="" value="{{old('total_to_pay')}}" placeholder="Please Enter Your Total to Pay" >
                                                                    @error('total_to_pay')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label   @error('receivable') text-danger @enderror">RECEIVABLE :<span
                                                                class="text-red">*</span></label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control   @error('receivable') border-danger @enderror" type="text" name="receivable" id="" value="{{old('receivable')}}" placeholder="Please Enter Your Receivable" >
                                                                    @error('receivable') 
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label @error('comment') text-danger @enderror">REMARKS & COMMENTS :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control @error('comment') border-danger @enderror" type="text" name="comment" id="" value="{{old('comment')}}" placeholder="Please Enter Your Remarks & Comments" >
                                                                    @error('comment')
                                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <h3 class="kt-section__title kt-section__title-md">User's Account Settings</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label ">Login verification</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                                                    <span class="form-text text-muted">
                                                                        After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
                                                                        <a href="#" class="kt-link">Learn more</a>.
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label ">Password reset verification</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <div class="kt-checkbox-single">
                                                                        <label class="kt-checkbox">
                                                                            <input type="checkbox"> Require personal information to reset your password.
                                                                            <span></span>
                                                                        </label>
                                                                    </div>
                                                                    <span class="form-text text-muted">
																						For extra security, this requires you to confirm your email or phone number when you reset your password.
																						<a href="#" class="kt-link">Learn more</a>.
																					</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row kt-margin-t-10 kt-margin-b-10">
                                                                <label class="col-xl-3 col-lg-3 col-form-label "></label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <button type="button" class="btn btn-label-danger btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Deactivate your account ?</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Form Wizard Step 2-->

                                    <!--begin: Form Wizard Step 3-->
                                    <div class="kt-wizard-v4__content" >
                                        <div class="kt-heading kt-heading--md">Setup Your Address</div>
                                        <div class="kt-form__section kt-form__section--first">
                                            <div class="kt-wizard-v4__form">
                                                <div class="form-group">
                                                    <label class="@error('complete_address') text-danger @enderror">COMPLETE ADDRESS</label>
                                                    <input type="text" class="form-control @error('complete_address') border-danger @enderror" name="complete_address" value="{{old('complete_address')}}" placeholder="Please Enter Your Complete Address" >
                                                    @error('complete_address')
                                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                    @enderror
                                                    <span class="form-text text-muted">Please enter your Address.</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label class="@error('zip_code') text-danger @enderror">ZIP/POSTAL CODE:</label>
                                                            <input type="text" class="form-control @error('zip_code') border-danger @enderror" name="zip_code" value="{{old('zip_code')}}" placeholder="Please Enter Your Zip Code">
                                                            @error('zip_code')
                                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror   
                                                            <span class="form-text text-muted">Please enter your Zip Code.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label class="@error('city') text-danger @enderror">City</label>
                                                            <input type="text" class="form-control @error('city') border-danger @enderror" name="city" value="{{old('city')}}" placeholder="Please Enter Your City">
                                                            @error('city')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                            <span class="form-text text-muted">Please enter your City.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label class="@error('state') text-danger @enderror">State</label>
                                                            <input type="text" class="form-control @error('state') border-danger @enderror" name="state" value="{{old('state')}}" placeholder="Please Enter Your State">
                                                            @error('state')
                                                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                                                            @enderror
                                                            <span class="form-text text-muted">Please enter your state.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 
                                    <!--end: Form Wizard Step 3-->

                                    <div>
                                         <button type="submit" id="employee-form-submit-btn" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">
                                        Submit</button
                                    </div>
                                    <!--begin: Form Actions -->
                                    <div class="kt-form__actions">
                                        <!-- {{-- <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                            Previous
                                        </div> --}}

                                        {{-- <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                            Next Step
                                        </div> --}} -->
                                    </div>
                                    <!--end: Form Actions -->
                                </form>

                                <!--end: Form Wizard Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#2c77f4",
                    "light": "#ffffff",
                    "dark": "#282a3c",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>

    <!-- end::Global Config -->

    <!--begin::Global Theme Bundle(used by all pages) -->

    <!--begin:: Vendor Plugins -->
    <script src="assets/plugins/general/jquery/dist/jquery.js" type="text/javascript"></script>
    <script src="assets/plugins/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
    <script src="assets/plugins/general/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
    <script src="assets/plugins/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/wnumb/wNumb.js" type="text/javascript"></script>
    <script src="assets/plugins/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/bootstrap-datepicker.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/bootstrap-timepicker.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
    <script src="assets/plugins/general/plugins/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/bootstrap-switch.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
    <script src="assets/plugins/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
    <script src="assets/plugins/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
    <script src="assets/plugins/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
    <script src="assets/plugins/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
    <script src="assets/plugins/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="assets/plugins/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
    <script src="assets/plugins/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
    <script src="assets/plugins/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
    <script src="assets/plugins/general/autosize/dist/autosize.js" type="text/javascript"></script>
    <script src="assets/plugins/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/dropzone.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/quill/dist/quill.js" type="text/javascript"></script>
    <script src="assets/plugins/general/@yaireo/tagify/dist/tagify.polyfills.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/@yaireo/tagify/dist/tagify.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/summernote/dist/summernote.js" type="text/javascript"></script>
    <script src="assets/plugins/general/markdown/lib/markdown.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/bootstrap-markdown.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/bootstrap-notify.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
    <script src="assets/plugins/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/jquery-validation.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/toastr/build/toastr.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/dual-listbox/dist/dual-listbox.js" type="text/javascript"></script>
    <script src="assets/plugins/general/raphael/raphael.js" type="text/javascript"></script>
    <script src="assets/plugins/general/morris.js/morris.js" type="text/javascript"></script>
    <script src="assets/plugins/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
    <script src="assets/plugins/general/plugins/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/plugins/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
    <script src="assets/plugins/general/counterup/jquery.counterup.js" type="text/javascript"></script>
    <script src="assets/plugins/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/general/js/global/integration/plugins/sweetalert2.init.js" type="text/javascript"></script>
    <script src="assets/plugins/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
    <script src="assets/plugins/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
    <script src="assets/plugins/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
    <script src="assets/plugins/general/dompurify/dist/purify.js" type="text/javascript"></script>

    <!--end:: Vendor Plugins -->
    <script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

    <!--begin:: Vendor Plugins for custom pages -->
    <script src="assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/@fullcalendar/core/main.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/@fullcalendar/daygrid/main.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/@fullcalendar/google-calendar/main.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/@fullcalendar/interaction/main.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/@fullcalendar/list/main.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/@fullcalendar/timegrid/main.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/gmaps/gmaps.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/dist/es5/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/source/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/source/jquery.flot.categories.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/source/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/source/jquery.flot.stack.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/source/jquery.flot.crosshair.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/flot/source/jquery.flot.axislabels.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-bs4/js/dataTables.bootstrap4.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/js/global/integration/plugins/datatables.init.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-autofill/js/dataTables.autoFill.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jszip/dist/jszip.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/pdfmake/build/pdfmake.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/pdfmake/build/vfs_fonts.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-keytable/js/dataTables.keyTable.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-rowgroup/js/dataTables.rowGroup.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-scroller/js/dataTables.scroller.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/datatables.net-select/js/dataTables.select.min.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jstree/dist/jstree.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jqvmap/dist/jquery.vmap.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.russia.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.usa.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.germany.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/jqvmap/dist/maps/jquery.vmap.europe.js" type="text/javascript"></script>
    <script src="assets/plugins/custom/uppy/dist/uppy.min.js" type="text/javascript"></script>

    <!--end:: Vendor Plugins for custom pages -->

    <!--end::Global Theme Bundle -->

     <!--begin::Page Scripts(used by this page) -->
    <script src="assets/js/pages/custom/user/add-user.js" type="text/javascript"></script> 

    <!--end::Page Scripts -->
    </body>
@endsection
<!-- end::Body -->
</html>
