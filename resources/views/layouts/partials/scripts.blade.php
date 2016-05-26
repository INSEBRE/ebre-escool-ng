<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/js/app.min.js') }}" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="{{ asset('plugins/daterangepicker/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}" type="text/javascript" ></script>

<!-- bootstrap time picker -->
{{--<script src="{{ asset('js/wizard/jquery-2.1.1.min.js') }}" type="text/javascript" ></script>--}}
<script src="{{ asset('js/wizard/stepsForm.js') }}" type="text/javascript" ></script>
<script>
    $(document).ready(function(e) {

        $(".stepsForm").stepsForm({
            width			:'100%',
            active			:0,
            errormsg		:'Check faulty fields.',
            sendbtntext		:'Create Account',
            posturl			:'core/demo_steps_form.php',
            theme			:'green',
        });

        $(".container .themes>span").click(function(e) {
            $(".container .themes>span").removeClass("selectedx");
            $(this).addClass("selectedx");
            $(".stepsForm").removeClass().addClass("stepsForm");
            $(".stepsForm").addClass("sf-theme-"+$(this).attr("data-value"));
        });
    });
</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->

<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

//        //iCheck for checkbox and radio inputs
//        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
//            checkboxClass: 'icheckbox_minimal-blue',
//            radioClass: 'iradio_minimal-blue'
//        });
//        //Red color scheme for iCheck
//        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
//            checkboxClass: 'icheckbox_minimal-red',
//            radioClass: 'iradio_minimal-red'
//        });
//        //Flat red color scheme for iCheck
//        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
//            checkboxClass: 'icheckbox_flat-green',
//            radioClass: 'iradio_flat-green'
//        });
//
//        //Colorpicker
//        $(".my-colorpicker1").colorpicker();
//        //color picker with addon
//        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>

