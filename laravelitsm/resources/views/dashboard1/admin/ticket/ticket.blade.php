@extends('dashboard.admin.layout')

@section('content')
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
                <div class="col-lg-12">
                    <!--begin::Stats Widget 1-->
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">All Tickets</h3>
                            </div>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-9 col-xl-8">
                                        <div class="row align-items-center">
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                    <span>
														<i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                                    <select class="form-control" id="kt_datatable_search_status">
                                                        <option value="">All</option>
                                                        <option value="1">Open</option>
                                                        <option value="2">Assigned</option>
                                                        <option value="3">WIP</option>
                                                        <option value="4">Solution</option>
                                                        <option value="5">Closed</option>
                                                        <option value="6">Cancelled</option>
                                                        <option value="7">WUI</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-2 my-md-0">
                                                <div class="d-flex align-items-center">
                                                    <label class="mr-3 mb-0 d-none d-md-block">Level:</label>
                                                    <select class="form-control" id="kt_datatable_search_type">
                                                        <option value="">All</option>
                                                        <option value="1">Level-1</option>
                                                        <option value="2">Level-2</option>
                                                        <option value="3">Level-3</option>
                                                        <option value="4">Level-4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search Form-->
                            <!--end: Search Form-->
                            <!--begin: Datatable-->
                            <table class="datatable table-bordered  datatable-head-custom" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th title="Field #1">ID</th>
                                    <th title="Field #2">Date</th>
                                    <th title="Field #3">Type</th>
                                    <th title="Field #4">Summary</th>
                                    <th title="Field #5">Level</th>
                                    <th title="Field #6">Severity</th>
                                    <th title="Field #7">Responsible</th>
                                    <th title="Field #8">Status</th>
                                    <th title="Field #9">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($tickets as $ticket)
                                        <tr>
                                            <td>{{ $ticket->project }}_{{ $ticket->modulename }}_{{ date('my', strtotime($ticket->created_at)) }}_{{ $ticket->id }}</td>
                                            <td>{{ $ticket->created_at }}</td>
                                            <td>{{ $ticket->type}} Request</td>
                                            <td>{{ $ticket->summary }}</td>
                                            <td class="text-right">{{ $ticket->level }}</td>
                                            <td>{{ $ticket->severity }}</td>
                                            <td>{{ $ticket->responsible }}</td>
                                            <td class="text-right">{{ $ticket->status }}</td>
                                            <td><div class="row">
                                                    <div class="col">
                                                        <a href="ticket/{{ $ticket->id }}"  class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
	                                                        <span class="svg-icon svg-icon-md">
	                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                                                    <rect x="0" y="0" width="24" height="24"/>
	                                                                    <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
	                                                                    <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
	                                                                </g>
	                                                            </svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col">
                                                        <a class="btn btn-sm btn-clean btn-icon del" data-value="{{ $ticket->id }}" data-token="{{ csrf_token() }}" title="Delete Ticket">
	                                                        <span class="svg-icon svg-icon-md">
	                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="24px" viewBox="0 0 24 24" version="1.1">
	                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
	                                                                    <rect x="0" y="0" width="24" height="24"/>
	                                                                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>
	                                                                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>
	                                                                </g>
	                                                            </svg>
	                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--end::Stats Widget 1-->
                </div>

        </div>

    </div>

    <script>
        $(document).on('click','.del',function(e) {
            var id = $(this).data("value");
            var token = $(this).data("token");

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                reverseButtons: false
        }).then(function(result) {
                if (result.value) {
                    $.ajax(
                        {
                            url: "ticket/delete/"+id,
                            type: 'DELETE',
                            dataType: "JSON",
                            data: {
                                "id": id,
                                "_method": 'DELETE',
                                "_token": token,
                            },
                            success: function ()
                            {
                                Swal.fire({
                                    title: "Deleted",
                                    text: "Your Ticket has been deleted!",
                                    icon: "success",
                                    showConfirmButton: false,
                                    timer:1000
                                }).then(function () {
                                   location.reload();
                                });
                            }
                        });

                } else if (result.dismiss === "cancel") {
                    Swal.fire(
                        "Cancelled",
                        "Your imaginary file is safe :)",
                        "error"
                    )
                }
            });
        });
    </script>

    {{----}}
    <script>
        "use strict";
        // Class definition

        var KTDatatableHtmlTableDemo = function() {
            // Private functions

            // demo initializer
            var demo = function() {

                var datatable = $('#kt_datatable').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    theme: 'bordered',

                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch'
                    },
                    columns: [
                        {
                            field: 'ID',
                            type: 'number',
                            // width: 80,
                            textAlign: 'center',
                          autoHide: false,
                        },
                        {
                            field: 'Type',
                            type: 'Type',
                            // width: 80,
                            textAlign: 'center',
                          autoHide: false,
                        },
                        {
                            field: 'Summary',
                            type: 'Summary',
                            textAlign: 'center',
                          autoHide: false,
                        },
                        {
                            field: 'Date',
                            type: 'date',
                            format: 'YYYY-MM-DD',
                            textAlign: 'center',
                          autoHide: false,
                        },
                        {
                            field: 'Severity',
                            type: 'Severity',
                            // width: 80,
                            textAlign: 'center',
                          autoHide: false,
                        },
                        {
                            field: 'Responsible',
                            type: 'Responsible',
                            // width: 80,
                            textAlign: 'center',
                          autoHide: false,
                        },
                        {
                            field: 'Status',
                            title: 'Status',
                            textAlign: 'center',
                            autoHide: false,
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'Open',
                                        'class': ' label-light-success'
                                    },
                                    2: {
                                        'title': 'Assigned',
                                        'class': ' label-light-primary'
                                    },
                                    3: {
                                        'title': 'WIP',
                                        'class': ' label-light-warning'
                                    },
                                    4: {
                                        'title': 'Solution',
                                        'class': ' label-light-dark'
                                    },
                                    5: {
                                        'title': 'Closed',
                                        'class': ' label-light-danger'
                                    },
                                    6: {
                                        'title': 'Cancelled',
                                        'class': ' label-light-secondary text-secondary'
                                    },
                                    7: {
                                        'title': 'WUI',
                                        'class': ' label-dark text-white'
                                    }
                                };
                                return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                            },
                        }, {
                            field: 'Level',
                            title: 'Level',
                            textAlign: 'center',
                            autoHide: false,
                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'Level-1',
                                        'state': 'danger'
                                    },
                                    2: {
                                        'title': 'Level-2',
                                        'state': 'warning'
                                    },
                                    3: {
                                        'title': 'Level-3',
                                        'state': 'primary'
                                    },
                                    4: {
                                        'title': 'Level-4',
                                        'state': 'success'
                                    },
                                };
                                return '<span class="label label-' + status[row.Level].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' +status[row.Level].state + '">' +	status[row.Level].title + '</span>';
                            },
                        },
                    ],
                });



                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Level');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

            };

            return {
                // Public functionsb
                init: function() {
                    // init dmeo
                    demo();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDatatableHtmlTableDemo.init();
        });

    </script>
    {{----}}
@endsection


