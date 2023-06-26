@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css"> --}}
    <style>

        .d-flex.flex-row-reverse {
            float: right;
            position: absolute;
            right: 20px;
            top: 33px;
        }

        .d-flex.justify-content-between.align-items-center.header-actions.mx-2.row.mt-75 {
            width: 89%;
        }

        .update_status{
            padding: 4px;
            border-color: #dfdde4;
            border-radius: 6px;
            color: #605e5e;
        }

        .dt-buttons button {
            border: 1px solid #82868b !important;
            background-color: transparent;
            color: #82868b;
            padding: 0.386rem 1.2rem;
            font-weight: 500;
            font-size: 1rem;
            border-radius: 0.358rem;
        }
        .dt-buttons button:hover {
            color: #fff;
            background-color: #7367f0;
            border-color: #7367f0;
        }
        button.dt-button.add-new.btn.btn-primary {
            padding: 10px;
        }
    </style>
@endsection

@section('scripts')
<script src="{{ asset('') }}app-assets/vendors/js/vendors.min.js"></script>

    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    {{-- <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script> --}}
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>

    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>

    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="{{ asset('') }}app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>


    <script>
        var table = $('.datatables-basic').DataTable({

            // dom: 'Bfrtip',
            order: [[1, 'desc']],
            dom:
                '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
                '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
                '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
                '>t' +
                '<"d-flex justify-content-between mx-2 row mb-1"' +
                '<"col-sm-12 col-md-6"i>' +
                '<"col-sm-12 col-md-6"p>' +
                '>',
            // language: {
            //     sLengthMenu: 'Show _MENU_',
            //     search: 'Search',
            //     searchPlaceholder: 'Search..'
            // },
            // Buttons with Dropdown
            buttons: [

            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
                // {
                //     text: 'Send Email',
                //     className: 'add-new send-email btn btn-primary',
                //     attr: {
                //         'data-bs-toggle': 'modal',
                //         'data-bs-target': '#editUser'
                //     },
                //     // init: function (api, node, config) {
                //     //     $(node).removeClass('btn-secondary');
                //     // }
                // }
            ],


        });

    </script>
@endsection
