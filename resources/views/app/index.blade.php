@extends('layouts.map')

@section('top-nav-bar')
    @parent
@endsection

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" crossorigin="anonymous">
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title">
                <h1>{!! __('messages.project-name') !!}</h1>
                <h6>{!! __('messages.author', ['name' => config('app.AUTHOR')]) !!}</h6>
            </div>
            <div class="row">
                <div class="col-12">
                    <form class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control-plaintext" id="search-box" placeholder="{!! __('messages.enter-search') !!}">
                        </div>
                        <button type="button" id="get-videos" class="btn btn-sm btn-secondary submit">{!! __('messages.get-videos') !!}</button>
                    </form>
                </div>
            </div>
            <hr>
            {{-- Results renderer --}}
            <div id="renderer"></div>
            <div class="hidden" id="loading">{!! __('messages.loading') !!}</div>
        </div>
    </div>
@endsection

@section('footer-nav')
    @parent
@endsection

@section('js')
    @parent()
    <script src="{{ asset('js/youtube-api.js') }}"></script>
@endsection
