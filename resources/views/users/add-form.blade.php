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
                <div class="kt-wizard-v4__nav">
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
                </div>

                <!--end: Form Wizard Nav -->
                <div class="kt-portlet">
                    <div class="kt-portlet__body kt-portlet__body--fit">
                        <div class="kt-grid">
                            <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                                <!--begin: Form Wizard Form-->
                                <form action="{{ route('add-form.store') }}" method="post" enctype="multipart/form-data" class="kt-form" id="kt_user_add_form">
                                @csrf

                                <!--begin: Form Wizard Step 2-->
                                    <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
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
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Profile Pic</label>
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
                                                                <label class="col-xl-3 col-lg-3 col-form-label">DATE:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="date" name="date" id="" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">T.L. NAME:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="tl_name" id="" placeholder="Please Enter T.L Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">AGENT NAME:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="agent_name" id="" placeholder="Please Enter Agent Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">CUSTOMER'S NAME:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="customer_name" id="" placeholder="Please Enter Customer Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">COMPANY'S NAME::</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="company_name" id="" placeholder="Please Enter Company Name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">CELL PHONE:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="cell_phone" id="" placeholder="+923054812545">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">HOME PHONE:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="home_phone" id="" placeholder="0424007460">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">CUSTOMER'S EMAIL :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                                                                        <input type="text" class="form-control" name="customer_email"  placeholder="customeremail@gmail.com" aria-describedby="basic-addon1">
                                                                    </div>
                                                                    <span class="form-text text-muted">Email will not be publicly displayed. <a href="#" class="kt-link">Learn more</a>.</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">SERVICE TYPE:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="service_type" id="" value="Please Enter Your Service Type" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">BILLING AC:</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="billing_ac_number" id="" value="Please Enter Your Billing AC" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">REFERENCE :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="reference" id="" value="Please Enter Your Reference" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">SSN :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="ssn" id="" value="Please Enter Your SSN" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">DOB :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="date" name="dob" id="" value="Please Enter Your Date of Birth" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">PER MONTH :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="per_month" id="" value="Please Enter Your Per Month" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">TOTAL TO PAY :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="total_to_pay" id="" value="Please Enter Your Total to Pay" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">RECEIVABLE :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="receivable" id="" value="Please Enter Your Receivable" >
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">REMARKS & COMMENTS :</label>
                                                                <div class="col-lg-9 col-xl-9">
                                                                    <input class="form-control" type="text" name="comment" id="" value="Please Enter Your Remarks & Comments" >
                                                                </div>
                                                            </div>
                                                            <div class="kt-separator kt-separator--border-dashed kt-separator--portlet-fit kt-separator--space-lg"></div>
                                                            <div class="form-group row">
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <h3 class="kt-section__title kt-section__title-md">User's Account Settings</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Login verification</label>
                                                                <div class="col-lg-9 col-xl-6">
                                                                    <button type="button" class="btn btn-label-brand btn-bold btn-sm kt-margin-t-5 kt-margin-b-5">Setup login verification</button>
                                                                    <span class="form-text text-muted">
																						After you log in, you will be asked for additional information to confirm your identity and protect your account from being compromised.
																						<a href="#" class="kt-link">Learn more</a>.
																					</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-xl-3 col-lg-3 col-form-label">Password reset verification</label>
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
                                                                <label class="col-xl-3 col-lg-3 col-form-label"></label>
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
                                    <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                        <div class="kt-heading kt-heading--md">Setup Your Address</div>
                                        <div class="kt-form__section kt-form__section--first">
                                            <div class="kt-wizard-v4__form">
                                                <div class="form-group">
                                                    <label>COMPLETE ADDRESS</label>
                                                    <input type="text" class="form-control" name="complete_address" placeholder="Please Enter Your Complete Address" >
                                                    <span class="form-text text-muted">Please enter your Address.</span>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>ZIP/POSTAL CODE:</label>
                                                            <input type="text" class="form-control" name="zip_code" placeholder="Please Enter Your Zip Code">
                                                            <span class="form-text text-muted">Please enter your Zip Code.</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" name="city" placeholder="Please Enter Your City">
                                                            <span class="form-text text-muted">Please enter your City.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" name="state" placeholder="Please Enter Your State">
                                                            <span class="form-text text-muted">Please enter your state.</span>
                                                        </div>
                                                    </div>
                                                    {{--                                                    <div class="col-xl-6">--}}
                                                    {{--                                                        <div class="form-group">--}}
                                                    {{--                                                            <label>Country:</label>--}}
                                                    {{--                                                            <select name="country" class="form-control">--}}
                                                    {{--                                                                <option value="">Select</option>--}}
                                                    {{--                                                                <option value="AF">Afghanistan</option>--}}
                                                    {{--                                                                <option value="AX">Åland Islands</option>--}}
                                                    {{--                                                                <option value="AL">Albania</option>--}}
                                                    {{--                                                                <option value="DZ">Algeria</option>--}}
                                                    {{--                                                                <option value="AS">American Samoa</option>--}}
                                                    {{--                                                                <option value="AD">Andorra</option>--}}
                                                    {{--                                                                <option value="AO">Angola</option>--}}
                                                    {{--                                                                <option value="AI">Anguilla</option>--}}
                                                    {{--                                                                <option value="AQ">Antarctica</option>--}}
                                                    {{--                                                                <option value="AG">Antigua and Barbuda</option>--}}
                                                    {{--                                                                <option value="AR">Argentina</option>--}}
                                                    {{--                                                                <option value="AM">Armenia</option>--}}
                                                    {{--                                                                <option value="AW">Aruba</option>--}}
                                                    {{--                                                                <option value="AU" selected="">Australia</option>--}}
                                                    {{--                                                                <option value="AT">Austria</option>--}}
                                                    {{--                                                                <option value="AZ">Azerbaijan</option>--}}
                                                    {{--                                                                <option value="BS">Bahamas</option>--}}
                                                    {{--                                                                <option value="BH">Bahrain</option>--}}
                                                    {{--                                                                <option value="BD">Bangladesh</option>--}}
                                                    {{--                                                                <option value="BB">Barbados</option>--}}
                                                    {{--                                                                <option value="BY">Belarus</option>--}}
                                                    {{--                                                                <option value="BE">Belgium</option>--}}
                                                    {{--                                                                <option value="BZ">Belize</option>--}}
                                                    {{--                                                                <option value="BJ">Benin</option>--}}
                                                    {{--                                                                <option value="BM">Bermuda</option>--}}
                                                    {{--                                                                <option value="BT">Bhutan</option>--}}
                                                    {{--                                                                <option value="BO">Bolivia, Plurinational State of</option>--}}
                                                    {{--                                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>--}}
                                                    {{--                                                                <option value="BA">Bosnia and Herzegovina</option>--}}
                                                    {{--                                                                <option value="BW">Botswana</option>--}}
                                                    {{--                                                                <option value="BV">Bouvet Island</option>--}}
                                                    {{--                                                                <option value="BR">Brazil</option>--}}
                                                    {{--                                                                <option value="IO">British Indian Ocean Territory</option>--}}
                                                    {{--                                                                <option value="BN">Brunei Darussalam</option>--}}
                                                    {{--                                                                <option value="BG">Bulgaria</option>--}}
                                                    {{--                                                                <option value="BF">Burkina Faso</option>--}}
                                                    {{--                                                                <option value="BI">Burundi</option>--}}
                                                    {{--                                                                <option value="KH">Cambodia</option>--}}
                                                    {{--                                                                <option value="CM">Cameroon</option>--}}
                                                    {{--                                                                <option value="CA">Canada</option>--}}
                                                    {{--                                                                <option value="CV">Cape Verde</option>--}}
                                                    {{--                                                                <option value="KY">Cayman Islands</option>--}}
                                                    {{--                                                                <option value="CF">Central African Republic</option>--}}
                                                    {{--                                                                <option value="TD">Chad</option>--}}
                                                    {{--                                                                <option value="CL">Chile</option>--}}
                                                    {{--                                                                <option value="CN">China</option>--}}
                                                    {{--                                                                <option value="CX">Christmas Island</option>--}}
                                                    {{--                                                                <option value="CC">Cocos (Keeling) Islands</option>--}}
                                                    {{--                                                                <option value="CO">Colombia</option>--}}
                                                    {{--                                                                <option value="KM">Comoros</option>--}}
                                                    {{--                                                                <option value="CG">Congo</option>--}}
                                                    {{--                                                                <option value="CD">Congo, the Democratic Republic of the</option>--}}
                                                    {{--                                                                <option value="CK">Cook Islands</option>--}}
                                                    {{--                                                                <option value="CR">Costa Rica</option>--}}
                                                    {{--                                                                <option value="CI">Côte d'Ivoire</option>--}}
                                                    {{--                                                                <option value="HR">Croatia</option>--}}
                                                    {{--                                                                <option value="CU">Cuba</option>--}}
                                                    {{--                                                                <option value="CW">Curaçao</option>--}}
                                                    {{--                                                                <option value="CY">Cyprus</option>--}}
                                                    {{--                                                                <option value="CZ">Czech Republic</option>--}}
                                                    {{--                                                                <option value="DK">Denmark</option>--}}
                                                    {{--                                                                <option value="DJ">Djibouti</option>--}}
                                                    {{--                                                                <option value="DM">Dominica</option>--}}
                                                    {{--                                                                <option value="DO">Dominican Republic</option>--}}
                                                    {{--                                                                <option value="EC">Ecuador</option>--}}
                                                    {{--                                                                <option value="EG">Egypt</option>--}}
                                                    {{--                                                                <option value="SV">El Salvador</option>--}}
                                                    {{--                                                                <option value="GQ">Equatorial Guinea</option>--}}
                                                    {{--                                                                <option value="ER">Eritrea</option>--}}
                                                    {{--                                                                <option value="EE">Estonia</option>--}}
                                                    {{--                                                                <option value="ET">Ethiopia</option>--}}
                                                    {{--                                                                <option value="FK">Falkland Islands (Malvinas)</option>--}}
                                                    {{--                                                                <option value="FO">Faroe Islands</option>--}}
                                                    {{--                                                                <option value="FJ">Fiji</option>--}}
                                                    {{--                                                                <option value="FI">Finland</option>--}}
                                                    {{--                                                                <option value="FR">France</option>--}}
                                                    {{--                                                                <option value="GF">French Guiana</option>--}}
                                                    {{--                                                                <option value="PF">French Polynesia</option>--}}
                                                    {{--                                                                <option value="TF">French Southern Territories</option>--}}
                                                    {{--                                                                <option value="GA">Gabon</option>--}}
                                                    {{--                                                                <option value="GM">Gambia</option>--}}
                                                    {{--                                                                <option value="GE">Georgia</option>--}}
                                                    {{--                                                                <option value="DE">Germany</option>--}}
                                                    {{--                                                                <option value="GH">Ghana</option>--}}
                                                    {{--                                                                <option value="GI">Gibraltar</option>--}}
                                                    {{--                                                                <option value="GR">Greece</option>--}}
                                                    {{--                                                                <option value="GL">Greenland</option>--}}
                                                    {{--                                                                <option value="GD">Grenada</option>--}}
                                                    {{--                                                                <option value="GP">Guadeloupe</option>--}}
                                                    {{--                                                                <option value="GU">Guam</option>--}}
                                                    {{--                                                                <option value="GT">Guatemala</option>--}}
                                                    {{--                                                                <option value="GG">Guernsey</option>--}}
                                                    {{--                                                                <option value="GN">Guinea</option>--}}
                                                    {{--                                                                <option value="GW">Guinea-Bissau</option>--}}
                                                    {{--                                                                <option value="GY">Guyana</option>--}}
                                                    {{--                                                                <option value="HT">Haiti</option>--}}
                                                    {{--                                                                <option value="HM">Heard Island and McDonald Islands</option>--}}
                                                    {{--                                                                <option value="VA">Holy See (Vatican City State)</option>--}}
                                                    {{--                                                                <option value="HN">Honduras</option>--}}
                                                    {{--                                                                <option value="HK">Hong Kong</option>--}}
                                                    {{--                                                                <option value="HU">Hungary</option>--}}
                                                    {{--                                                                <option value="IS">Iceland</option>--}}
                                                    {{--                                                                <option value="IN">India</option>--}}
                                                    {{--                                                                <option value="ID">Indonesia</option>--}}
                                                    {{--                                                                <option value="IR">Iran, Islamic Republic of</option>--}}
                                                    {{--                                                                <option value="IQ">Iraq</option>--}}
                                                    {{--                                                                <option value="IE">Ireland</option>--}}
                                                    {{--                                                                <option value="IM">Isle of Man</option>--}}
                                                    {{--                                                                <option value="IL">Israel</option>--}}
                                                    {{--                                                                <option value="IT">Italy</option>--}}
                                                    {{--                                                                <option value="JM">Jamaica</option>--}}
                                                    {{--                                                                <option value="JP">Japan</option>--}}
                                                    {{--                                                                <option value="JE">Jersey</option>--}}
                                                    {{--                                                                <option value="JO">Jordan</option>--}}
                                                    {{--                                                                <option value="KZ">Kazakhstan</option>--}}
                                                    {{--                                                                <option value="KE">Kenya</option>--}}
                                                    {{--                                                                <option value="KI">Kiribati</option>--}}
                                                    {{--                                                                <option value="KP">Korea, Democratic People's Republic of</option>--}}
                                                    {{--                                                                <option value="KR">Korea, Republic of</option>--}}
                                                    {{--                                                                <option value="KW">Kuwait</option>--}}
                                                    {{--                                                                <option value="KG">Kyrgyzstan</option>--}}
                                                    {{--                                                                <option value="LA">Lao People's Democratic Republic</option>--}}
                                                    {{--                                                                <option value="LV">Latvia</option>--}}
                                                    {{--                                                                <option value="LB">Lebanon</option>--}}
                                                    {{--                                                                <option value="LS">Lesotho</option>--}}
                                                    {{--                                                                <option value="LR">Liberia</option>--}}
                                                    {{--                                                                <option value="LY">Libya</option>--}}
                                                    {{--                                                                <option value="LI">Liechtenstein</option>--}}
                                                    {{--                                                                <option value="LT">Lithuania</option>--}}
                                                    {{--                                                                <option value="LU">Luxembourg</option>--}}
                                                    {{--                                                                <option value="MO">Macao</option>--}}
                                                    {{--                                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>--}}
                                                    {{--                                                                <option value="MG">Madagascar</option>--}}
                                                    {{--                                                                <option value="MW">Malawi</option>--}}
                                                    {{--                                                                <option value="MY">Malaysia</option>--}}
                                                    {{--                                                                <option value="MV">Maldives</option>--}}
                                                    {{--                                                                <option value="ML">Mali</option>--}}
                                                    {{--                                                                <option value="MT">Malta</option>--}}
                                                    {{--                                                                <option value="MH">Marshall Islands</option>--}}
                                                    {{--                                                                <option value="MQ">Martinique</option>--}}
                                                    {{--                                                                <option value="MR">Mauritania</option>--}}
                                                    {{--                                                                <option value="MU">Mauritius</option>--}}
                                                    {{--                                                                <option value="YT">Mayotte</option>--}}
                                                    {{--                                                                <option value="MX">Mexico</option>--}}
                                                    {{--                                                                <option value="FM">Micronesia, Federated States of</option>--}}
                                                    {{--                                                                <option value="MD">Moldova, Republic of</option>--}}
                                                    {{--                                                                <option value="MC">Monaco</option>--}}
                                                    {{--                                                                <option value="MN">Mongolia</option>--}}
                                                    {{--                                                                <option value="ME">Montenegro</option>--}}
                                                    {{--                                                                <option value="MS">Montserrat</option>--}}
                                                    {{--                                                                <option value="MA">Morocco</option>--}}
                                                    {{--                                                                <option value="MZ">Mozambique</option>--}}
                                                    {{--                                                                <option value="MM">Myanmar</option>--}}
                                                    {{--                                                                <option value="NA">Namibia</option>--}}
                                                    {{--                                                                <option value="NR">Nauru</option>--}}
                                                    {{--                                                                <option value="NP">Nepal</option>--}}
                                                    {{--                                                                <option value="NL">Netherlands</option>--}}
                                                    {{--                                                                <option value="NC">New Caledonia</option>--}}
                                                    {{--                                                                <option value="NZ">New Zealand</option>--}}
                                                    {{--                                                                <option value="NI">Nicaragua</option>--}}
                                                    {{--                                                                <option value="NE">Niger</option>--}}
                                                    {{--                                                                <option value="NG">Nigeria</option>--}}
                                                    {{--                                                                <option value="NU">Niue</option>--}}
                                                    {{--                                                                <option value="NF">Norfolk Island</option>--}}
                                                    {{--                                                                <option value="MP">Northern Mariana Islands</option>--}}
                                                    {{--                                                                <option value="NO">Norway</option>--}}
                                                    {{--                                                                <option value="OM">Oman</option>--}}
                                                    {{--                                                                <option value="PK">Pakistan</option>--}}
                                                    {{--                                                                <option value="PW">Palau</option>--}}
                                                    {{--                                                                <option value="PS">Palestinian Territory, Occupied</option>--}}
                                                    {{--                                                                <option value="PA">Panama</option>--}}
                                                    {{--                                                                <option value="PG">Papua New Guinea</option>--}}
                                                    {{--                                                                <option value="PY">Paraguay</option>--}}
                                                    {{--                                                                <option value="PE">Peru</option>--}}
                                                    {{--                                                                <option value="PH">Philippines</option>--}}
                                                    {{--                                                                <option value="PN">Pitcairn</option>--}}
                                                    {{--                                                                <option value="PL">Poland</option>--}}
                                                    {{--                                                                <option value="PT">Portugal</option>--}}
                                                    {{--                                                                <option value="PR">Puerto Rico</option>--}}
                                                    {{--                                                                <option value="QA">Qatar</option>--}}
                                                    {{--                                                                <option value="RE">Réunion</option>--}}
                                                    {{--                                                                <option value="RO">Romania</option>--}}
                                                    {{--                                                                <option value="RU">Russian Federation</option>--}}
                                                    {{--                                                                <option value="RW">Rwanda</option>--}}
                                                    {{--                                                                <option value="BL">Saint Barthélemy</option>--}}
                                                    {{--                                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>--}}
                                                    {{--                                                                <option value="KN">Saint Kitts and Nevis</option>--}}
                                                    {{--                                                                <option value="LC">Saint Lucia</option>--}}
                                                    {{--                                                                <option value="MF">Saint Martin (French part)</option>--}}
                                                    {{--                                                                <option value="PM">Saint Pierre and Miquelon</option>--}}
                                                    {{--                                                                <option value="VC">Saint Vincent and the Grenadines</option>--}}
                                                    {{--                                                                <option value="WS">Samoa</option>--}}
                                                    {{--                                                                <option value="SM">San Marino</option>--}}
                                                    {{--                                                                <option value="ST">Sao Tome and Principe</option>--}}
                                                    {{--                                                                <option value="SA">Saudi Arabia</option>--}}
                                                    {{--                                                                <option value="SN">Senegal</option>--}}
                                                    {{--                                                                <option value="RS">Serbia</option>--}}
                                                    {{--                                                                <option value="SC">Seychelles</option>--}}
                                                    {{--                                                                <option value="SL">Sierra Leone</option>--}}
                                                    {{--                                                                <option value="SG">Singapore</option>--}}
                                                    {{--                                                                <option value="SX">Sint Maarten (Dutch part)</option>--}}
                                                    {{--                                                                <option value="SK">Slovakia</option>--}}
                                                    {{--                                                                <option value="SI">Slovenia</option>--}}
                                                    {{--                                                                <option value="SB">Solomon Islands</option>--}}
                                                    {{--                                                                <option value="SO">Somalia</option>--}}
                                                    {{--                                                                <option value="ZA">South Africa</option>--}}
                                                    {{--                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>--}}
                                                    {{--                                                                <option value="SS">South Sudan</option>--}}
                                                    {{--                                                                <option value="ES">Spain</option>--}}
                                                    {{--                                                                <option value="LK">Sri Lanka</option>--}}
                                                    {{--                                                                <option value="SD">Sudan</option>--}}
                                                    {{--                                                                <option value="SR">Suriname</option>--}}
                                                    {{--                                                                <option value="SJ">Svalbard and Jan Mayen</option>--}}
                                                    {{--                                                                <option value="SZ">Swaziland</option>--}}
                                                    {{--                                                                <option value="SE">Sweden</option>--}}
                                                    {{--                                                                <option value="CH">Switzerland</option>--}}
                                                    {{--                                                                <option value="SY">Syrian Arab Republic</option>--}}
                                                    {{--                                                                <option value="TW">Taiwan, Province of China</option>--}}
                                                    {{--                                                                <option value="TJ">Tajikistan</option>--}}
                                                    {{--                                                                <option value="TZ">Tanzania, United Republic of</option>--}}
                                                    {{--                                                                <option value="TH">Thailand</option>--}}
                                                    {{--                                                                <option value="TL">Timor-Leste</option>--}}
                                                    {{--                                                                <option value="TG">Togo</option>--}}
                                                    {{--                                                                <option value="TK">Tokelau</option>--}}
                                                    {{--                                                                <option value="TO">Tonga</option>--}}
                                                    {{--                                                                <option value="TT">Trinidad and Tobago</option>--}}
                                                    {{--                                                                <option value="TN">Tunisia</option>--}}
                                                    {{--                                                                <option value="TR">Turkey</option>--}}
                                                    {{--                                                                <option value="TM">Turkmenistan</option>--}}
                                                    {{--                                                                <option value="TC">Turks and Caicos Islands</option>--}}
                                                    {{--                                                                <option value="TV">Tuvalu</option>--}}
                                                    {{--                                                                <option value="UG">Uganda</option>--}}
                                                    {{--                                                                <option value="UA">Ukraine</option>--}}
                                                    {{--                                                                <option value="AE">United Arab Emirates</option>--}}
                                                    {{--                                                                <option value="GB">United Kingdom</option>--}}
                                                    {{--                                                                <option value="US">United States</option>--}}
                                                    {{--                                                                <option value="UM">United States Minor Outlying Islands</option>--}}
                                                    {{--                                                                <option value="UY">Uruguay</option>--}}
                                                    {{--                                                                <option value="UZ">Uzbekistan</option>--}}
                                                    {{--                                                                <option value="VU">Vanuatu</option>--}}
                                                    {{--                                                                <option value="VE">Venezuela, Bolivarian Republic of</option>--}}
                                                    {{--                                                                <option value="VN">Viet Nam</option>--}}
                                                    {{--                                                                <option value="VG">Virgin Islands, British</option>--}}
                                                    {{--                                                                <option value="VI">Virgin Islands, U.S.</option>--}}
                                                    {{--                                                                <option value="WF">Wallis and Futuna</option>--}}
                                                    {{--                                                                <option value="EH">Western Sahara</option>--}}
                                                    {{--                                                                <option value="YE">Yemen</option>--}}
                                                    {{--                                                                <option value="ZM">Zambia</option>--}}
                                                    {{--                                                                <option value="ZW">Zimbabwe</option>--}}
                                                    {{--                                                            </select>--}}
                                                    {{--                                                        </div>--}}
                                                    {{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Form Wizard Step 3-->


                                    <!--begin: Form Actions -->
                                    <div class="kt-form__actions">
                                        <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                            Previous
                                        </div>
                                        <div type="submit" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                            Submit
                                        </div>
                                        <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                            Next Step
                                        </div>
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
