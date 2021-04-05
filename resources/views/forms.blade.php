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
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                    <thead>
                    <tr>
                        <th>Agent Name</th>
                        <th>Date</th>
                        <th>Team Lead Name</th>

                        <th>Customer Name</th>
                        <th>Mobile Number</th>
                        <th>Home Phone</th>
                        <th>Complete Address</th>
                        <th>City</th>
                        <th>state</th>
{{--                        <th>Province</th>--}}
                        <th>Zip</th>
                        <th>Customer Email</th>
                        <th>Company Name</th>
                        <th>Service Type</th>
                        <th>Account Number</th>
                        <th>Reference</th>
                        <th>SSN</th>
                        <th>DOB</th>
                        <th>Total To Pay</th>
                        <th>Per Month</th>
                        <th>Receivable</th>
                        <th>Comment</th>
                        <th>File</th>
                        <th>Status</th>
                        @if($can_change_status == true)
                            <th>Actions</th>
                        @endif


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($forms as $form)
                    <tr>
                        <td>{{$form->agent_name}}</td>
                        <td>{{$form->date}}</td>
                        <td>{{$form->tl_name}}</td>
                        <td>{{$form->customer_name}}</td>
                        <td>{{$form->cell_phone}}</td>
                        <td>{{$form->home_phone}}</td>
                        <td>{{$form->complete_address}}</td>
                        <td>{{$form->city}}</td>
                        <td>{{$form->state}}</td>
{{--                        <td>{{$form->province}}</td>--}}
                        <td>{{$form->zip_code}}</td>
                        <td>{{$form->city}}</td>
                        <td>{{$form->customer_email}}</td>
                        <td>{{$form->company_name}}</td>
                        <td>{{$form->company_name}}</td>
                        <td>{{$form->billing_ac_number}}</td>
                        <td>{{$form->reference}}</td>
                        <td>{{$form->ssn}}</td>
                        <td>{{$form->dob}}</td>
                        <td>{{$form->total_to_pay}}</td>
                        <td>{{$form->per_month}}</td>

                        <td>{{$form->receivable}}</td>
                        <td>{{$form->comment}}</td>
                        <td>{{$form->profile_pic}}</td>



                        <td>

                                @if($form->is_approved_by_supervisor == 0)

                                    Pending
                                @else
                                    Approved
                                @endif


                        </td>
                        @if($can_change_status == true)
                        <td>


                                @if($form->is_approved_by_supervisor == 0)

                                    <a class="btn btn-sm" href="{{url('/form/change-status/1/'.$form->id)}}"> Approve Form</a>
                                @else

                                    <a class="btn btn-sm" href="{{url('/form/change-status/0/'.$form->id)}}"> Decline Form</a>
                                @endif


                        </td>
                        @endif


                    </tr>
                    @endforeach

                    </tbody>
                </table>

                <!--end: Datatable -->
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
    <script>
        $('#kt_table_1').dataTable();
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
