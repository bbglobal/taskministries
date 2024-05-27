@extends('layouts.main')
@push('title')
    <title>Bio - Apostle Paula Wellings</title>
@endpush
@section('main-section')
    <section id="about">
        <div class="container">
            <div id="adobe-dc-view" style="height: 100%; width: 100%;"></div>
        </div>
    </section>
    <script src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>
    <script type="text/javascript">
        document.addEventListener("adobe_dc_view_sdk.ready", function() {
            var adobeDCView = new AdobeDC.View({
                clientId: "e1ae687c10e840659444fb6e6be2ea6d",
                divId: "adobe-dc-view"
            });
            adobeDCView.previewFile({
                content: {
                    location: {
                        url: "{{ asset('assets/images/material/Apostle-Paula-Wellings-Bio.pdf') }}"
                    }
                },
                metaData: {
                    fileName: "Apostle-Paula-Wellings-Bio.pdf"
                }
            }, {
                showAnnotationTools: true
            });
        });
    </script>
@endsection
