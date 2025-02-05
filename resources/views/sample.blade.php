@extends('layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Wizard</li>
        </ol>
    </nav>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/fullcalendar/index.global.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script>
        const app = Vue.createApp({
            mounted() {
                setTimeout(() => {
                    
                }, 700);
            },
            data() {
                return {

                };
            },
            watch: {

            },
            computed: {

            },
            methods: {

            }
        });
        app.mount('#vue_app');
    </script>
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
