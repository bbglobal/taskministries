@extends('admin.layout.main')
@push('title')
    <title>Emails</title>
@endpush

@section('admin-section')
    <!-- Header Layout Content -->
    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page"
        style="padding-top: 60px;">





        <div class="app-chat-container">
            <div class="row h-100 m-0">
                <div class="col-lg-4 py-3 px-0 d-none d-lg-flex flex-column h-100">
                    <div class="search-form form-control-rounded search-form--light mx-3">
                        <input type="text" class="form-control" placeholder="What are you looking for?" id="searchSample02">
                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                    </div>
                    <div class="flex pt-3" data-perfect-scrollbar>

                        <div class="list-group list-group-flush" style="position: relative; z-index: 0;">

                            <div class="list-group-item d-flex align-items-start bg-transparent">
                                {{-- <div class="mr-3 d-flex flex-column align-items-center">
                                    <a href="" class="text-muted"><i
                                            class="material-icons icon-16pt">star_border</i></a>
                                </div> --}}
                                <div class="flex">
                                    @foreach ($messages as $message)
                                        <p class="m-0">
                                            <input type="text" name="" id="mail-id"
                                                value="{{ $message->getUid() }}">
                                            <span class="d-flex align-items-center mb-1">
                                                <a href="#"
                                                    class="text-dark-gray"><strong>{{ $message->getFrom()[0]->mail }}</strong></a>
                                                <small class="ml-auto text-muted">{{ $message->getDate() }}</small>
                                            </span>
                                            <span class="d-flex align-items-end">
                                                <span class="flex mr-3">
                                                    <strong class="text-body mb-1">{{ $message->getSubject() }}</strong>
                                                </span>
                                                <a href="" class="d-flex align-items-center mb-1">
                                                    <small
                                                        class="text-muted mr-1">{{ $message->getAttachments()->count() }}</small>
                                                    <i class="material-icons icon-16pt">attachment</i>
                                                </a>
                                            </span>
                                        </p>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="border-top pt-3 px-3 text-center">
                        <a href="" class="btn btn-primary">Create Message</a>
                    </div>

                </div>
                <div class="col-lg-8 py-3 px-4 bg-white border-left d-flex flex-column h-100">
                    <div class="flex">
                        <div class="d-flex align-items-center mb-3">
                            <div class="flex">
                                <p class="m-0">
                                    <span class="d-flex align-items-center">
                                        <a href="#"
                                            class="text-dark-gray"><strong>{{ $message->getFrom() }}</strong></a>
                                        <small class="ml-auto text-muted">{{ $message->getDate() }}</small>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <h1 class="h4 flex">{{ $message->getSubject() }}</h1>
                            <div class="d-flex align-items-center">
                                <a href="" class="text-dark-gray">
                                    <i class="material-icons">reply</i>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex mr-3">
                                {!! $message->getHTMLBody() !!}
                            </div>
                            <div class="text-center ml-3">
                                <a href="" class="d-flex flex-column">
                                    <i class="material-icons">attachment</i>
                                    <small class="text-muted">{{ $message->getAttachments()->count() }}
                                        Attachments</small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="border-top pt-3 px-3 text-center">
                        Click here to <a class="btn btn-link px-0" href="">Reply</a> or <a class="btn btn-link px-0"
                            href="">Forward</a> this message.
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- // END header-layout__content -->

    </div>
    <!-- // END header-layout -->

    </div>
    <!-- // END drawer-layout__content -->

    <x-teacher-sidebar />
    </div>
    <!-- // END drawer-layout -->
@endsection
