@extends('layouts.washington')

@section('content')
    <div class="page-content" id="main-stack" data-scroll="0">
        <div class="w-nav navbar"></div>
        <div class="body padding">
            <div class="logo-login"></div>
            <div class="bottom-section padding">
                    <div>
                        <label class="label-form" for="email-field">PLEASE CHOOSE YOUR GENDER</label>
                        <div class="separator-fields"></div>
                    </div>
                    <div class="separator-button-input"></div>
                    <button class="w-button action-button" onclick="location.href='{{url('sign-up')}}'">Male</button>
                    <div class="separator-button-input"></div>
                    <button class="w-button action-button" onclick="location.href='{{url('sign-up')}}'">Female</button>
                    <div class="separator-button"></div>
            </div>
        </div>
    </div>
    <div class="page-content loading-mask" id="new-stack">
        <div class="loading-icon">
            <div class="navbar-button-icon icon ion-load-d"></div>
        </div>
    </div>
    <div class="shadow-layer"></div>
@endsection