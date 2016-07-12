@extends('layouts.washington')

@section('content')
    <div class="page-content" id="main-stack" data-scroll="0">
        <div class="w-nav navbar"></div>
        <div class="body padding">
            <div class="logo-login"></div>
            <div class="bottom-section padding">

                    <form  action="{{url('login')}}" method="POST">
                        {{csrf_field()}}
                        <div>
                            <label class="label-form" for="email-field">USERNAME</label>
                            <input class="w-input input-form" id="email-field" type="email" name="email" data-name="email">
                            <div class="separator-fields"></div>
                        </div>
                        <div>
                            <label class="label-form" for="email">PASSWORD</label>
                            <div class="w-clearfix block-input-combined">
                                <input class="w-input input-form left" id="password-field" type="password" name="password" data-name="password">
                            </div>
                            <div class="separator-button-input"></div>
                        </div>
                        <input class="w-button action-button" type="submit" value="Sign In">
                        <div class="separator-button"></div><a class="link-upper" href="{{url('choose')}}">YOU DON’T HAVE AN ACCOUNT? <strong class="b-link">SIGN UP</strong></a>
                    </form>

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