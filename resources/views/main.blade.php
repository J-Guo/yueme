@extends('layouts.washington')

@section('content')
    <div class="page-content" id="main-stack">
        <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
            <div class="w-container">
                <nav class="w-nav-menu nav-menu" role="navigation">
                    <div class="nav-menu-header">
                        <div class="logo">Yueme</div>
                        <div class="slogan">Makes your life happy</div>
                    </div>
                    <a class="w-clearfix w-inline-block nav-menu-link" href="index.html" data-load="1">
                        <div class="icon-list-menu">
                            <div class="icon ion-ios-location-outline"></div>
                        </div>
                        <div class="nav-menu-titles">Task Nearby</div>
                    </a>
                    <a class="w-clearfix w-inline-block nav-menu-link" href="login.html" data-load="1">
                        <div class="icon-list-menu">
                            <div class="icon ion-ios-checkmark-outline"></div>
                        </div>
                        <div class="nav-menu-titles">Assigned Task</div>
                    </a>
                    <a class="w-clearfix w-inline-block nav-menu-link" href="login.html" data-load="1">
                        <div class="icon-list-menu">
                            <div class="icon ion-ios-star-outline"></div>
                        </div>
                        <div class="nav-menu-titles">Reviews</div>
                    </a>
                    <a class="w-clearfix w-inline-block nav-menu-link" href="login.html" data-load="1">
                        <div class="icon-list-menu">
                            <div class="icon ion-ios-gear-outline"></div>
                        </div>
                        <div class="nav-menu-titles">Settings</div>
                    </a>
                    <a class="w-clearfix w-inline-block nav-menu-link" href="login.html" data-load="1">
                        <div class="icon-list-menu">
                            <div class="icon ion-ios-download-outline"></div>
                        </div>
                        <div class="nav-menu-titles">Login</div>
                    </a>
                    <div class="separator-bottom"></div>
                    <div class="separator-bottom"></div>
                    <div class="separator-bottom"></div>
                </nav>
                <div class="wrapper-mask" data-ix="menu-mask"></div>
                <div class="navbar-title">Current Task</div>
                <div class="w-nav-button navbar-button left" id="menu-button" data-ix="hide-navbar-icons">
                    <div class="navbar-button-icon home-icon">
                        <div class="bar-home-icon"></div>
                        <div class="bar-home-icon"></div>
                        <div class="bar-home-icon"></div>
                    </div>
                </div>
                <a class="w-inline-block navbar-button right" href="#">
                    <div class="navbar-button-icon icon ion-ios-plus-empty"></div>
                </a>
            </div>
        </div>
        <div class="body">
            <ul class="list list-messages">
                <li class="list-message" data-ix="list-item">
                    <a class="w-clearfix w-inline-block" href="chat.html" data-load="1">
                        <div class="w-clearfix column-left">
                            <div class="image-message"><img src="images/128.jpg">
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="message-title">James White</div>
                            <div class="message-text">Hey dude! We are waiting for you at the main station, we will meet you near to....</div>
                        </div>
                    </a>
                </li>
                <li class="list-message" data-ix="list-item">
                    <a class="w-clearfix w-inline-block" href="chat.html" data-load="1">
                        <div class="w-clearfix column-left">
                            <div class="image-message"><img src="images/128 (1).jpg">
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="message-title">Claudio Glugieri</div>
                            <div class="message-text">You go through that piece of...</div>
                        </div>
                    </a>
                </li>
                <li class="list-message" data-ix="list-item">
                    <a class="w-clearfix w-inline-block" href="chat.html" data-load="1">
                        <div class="w-clearfix column-left">
                            <div class="image-message"><img src="images/128 (2).jpg">
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="message-title">Bill S. Kenney</div>
                            <div class="message-text">My last draft made me feel like I wanted to start all over again but at the end...</div>
                        </div>
                    </a>
                </li>
                <li class="list-message" data-ix="list-item">
                    <a class="w-clearfix w-inline-block" href="chat.html" data-load="1">
                        <div class="w-clearfix column-left">
                            <div class="image-message"><img src="images/128 (3).jpg">
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="message-title">Sys Warren</div>
                            <div class="message-text">We are finally going to Europe next month, we are planning to visit few countries...</div>
                        </div>
                    </a>
                </li>
                <li class="list-message" data-ix="list-item">
                    <a class="w-clearfix w-inline-block" href="chat.html" data-load="1">
                        <div class="w-clearfix column-left">
                            <div class="image-message"><img src="images/128 (4).jpg">
                            </div>
                        </div>
                        <div class="column-right">
                            <div class="message-title">Chris&nbsp;Thompson</div>
                            <div class="message-text">Fuck yeah! but get a hot dog
                                <br>There is no food in here!</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection