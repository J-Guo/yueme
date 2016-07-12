@extends('layouts.washington')

@section('content')
    <div class="page-content" id="main-stack" data-scroll="0">
        <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
            <div class="w-container">
                <div class="wrapper-mask" data-ix="menu-mask"></div>
                <div class="navbar-title">Your Verify Code</div>
                <a class="w-inline-block navbar-button" href="login.html" data-load="1">
                    <div class="navbar-button-icon icon ion-ios-close-empty"></div>
                </a>
            </div>
        </div>
        <div class="body padding">
            <div class="logo-login smaller"></div>
            <div class="bottom-section padding">
                <div class="w-form">
                    <form action="{{url('verify')}}" method="POST">
                        {{csrf_field()}}
                        <div>
                            <label class="label-form" for="full-name-field">Please Input Verify Code</label>
                            <input class="w-input input-form" id="full-name-field" type="text" name="full-name" data-name="full-name" >
                            <div class="separator-fields"></div>
                        </div>
                        <div class="separator-button-input"></div>
                        <input class="w-button action-button" type="submit" value="Verify">
                        <div class="separator-button"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection