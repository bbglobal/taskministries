@extends('admin.layout.main')

@push('title')
    <title>Calender</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">


        <div class="page__heading border-bottom">
            <div class="container-fluid page__container">
                <h1>Calendar</h1>
            </div>
        </div>

        <div class="container">

            <div id="calendar"></div>

        </div>

        <script>
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var lectures = @json($events);
                var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    events: lectures,
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDay) {
                        $('#add-category').modal('toggle');
                        $('#addEvent').click(() => {
                            var title = $('#title').val();

                            var start_time = $('#start_time').val();
                            var end_time = $('#end_time').val();
                            var start_date = moment(start).format('YYYY-MM-DD') + ' ' + start_time;
                            var end_date = moment(end).format('YYYY-MM-DD') + ' ' + end_time;
                            var class_link = $('#class_link').val();
                            var color = $('#color').val();

                            var end_date = moment(end).format('YYYY-MM-DD');
                            $.ajax({
                                url: "{{ route('admin.event') }}",
                                type: "POST",
                                dataType: 'json',
                                data: {
                                    title: title,
                                    start_date: start_date,
                                    end_date: end_date,
                                    class_link: class_link,
                                    color: color,
                                },
                                success: function(response) {
                                    $('#add-category').modal('hide');
                                    $('#calendar').fullCalendar('renderEvent', {
                                        'title': response.title,
                                        'start': response.start_date,
                                        'end': response.end_date,
                                    })
                                    location.reload();
                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        });
                    },
                    editable: true,
                    eventResize: function(event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                        var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                        var title = event.title;
                        var id = event.id;
                    },

                    eventClick: function(event) {
                        var id = event.id;
                        if (confirm('Are you sure you want to remove it')) {
                            $.ajax({
                                url: "{{ route('event.delete', '') }}" + '/' + id,
                                type: "DELETE",
                                dataType: 'json',
                                success: function(response) {
                                    $('#calendar').fullCalendar('removeEvents', response);
                                },
                                error: function(error) {
                                    if (error.responseJSON.errors) {
                                        $('#titleError').html(error.responseJSON.errors
                                            .title)
                                    }
                                }
                            });
                        }
                    }
                });

                $('#add-category').on('hidden.bs.modal', () => {
                    $('#addEvent').unbind();
                });
            });
        </script>

    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    </div>
    <!-- // END drawer-layout__content -->

    <x-admin-sidebar />
    </div>
    <!-- // END drawer-layout -->

    <!-- Modal Add Category -->
    <div class="modal fade" id="add-category" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 d-block">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add a Event</h4>
                </div>
                <div class="modal-body p-4">
                    <div class="form-group">
                        <label class="control-label">Event Title</label>
                        <input class="form-control form-white" id="title" placeholder="Enter name" type="text"
                            name="title" />
                        <span id="titleError" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Class Link:</label>
                        <input class="form-control form-white" id="class_link" type="text" name="class_link" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Choose Category Color</label>
                        <select class="form-control form-white" data-placeholder="Choose a color..." name="color"
                            id="color">
                            <option value="#1367C9">Primary</option>
                            <option value="#1BB40F">Success</option>
                            <option value="#D52222">Danger</option>
                            <option value="#13C0C9">Info</option>
                            <option value="#EED220">Warning</option>
                            <option value="#343a40">Dark</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Starts At:</label>
                        <input class="form-control form-white" id="start_time" type="time" name="start_time" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Starts At:</label>
                        <input class="form-control form-white" id="end_time" type="time" name="end_time" />
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary ml-1 save-category" id="addEvent">Save</button>
                    </div>

                </div> <!-- end modal-body-->
            </div> <!-- end modal-content-->
        </div> <!-- end modal dialog-->
    </div>
    <!-- end modal-->
@endsection
