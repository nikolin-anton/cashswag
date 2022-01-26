@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    {{ __('You are logged in!') }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="profile-menu">
    <div class="profile-menu__container">
        <div class="profile-menu__email">{{ Auth::user()->email }}</div>
        <div class="profile-menu__burger"><span></span><span></span><span></span><span></span></div>
    </div>
</div>
<div class="profile-dropdown">
    <div class="profile-dropdown__container">
        <ul class="profile-menu__dropdown">
            <li class="profile-menu__item"><a class="profile-menu__link" href="{{route('home')}}">Main</a></li>
            <li class="profile-menu__item"><a class="profile-menu__link" href="{{route('reset_password')}}">Settings</a></li>
            <li class="profile-menu__item"><a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Exit') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form></li>
        </ul>
    </div>
</div>
<header class="header">
    <div class="grid">
        <div class="grid-row _align-middle-lg _align-middle-md _align-middle-sm _align-middle-xs">
            <div class="grid-col _md-6 _sm-6 _xs-8">
                <a class="header-logo" href="#"><img src="{{asset('img/logo.svg')}}" alt="CASHSWAG"></a>
            </div>
            <div class="grid-col _md-6 _sm-6 _xs-4">
                <div class="header-nav">
                    <button class="btn-nav u-hidden-lg u-hidden-md"></button>
                    <ul class="header-list u-list-clean u-list-inline">
                        <li><a href="#work">How it Work</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><button data-toggle="modal" data-target="#modal-success" class="btn-line">Subscribe now</button></li>
                    </ul>
                </div>
            </div>
        </div>
</header>

    <section class="cover" style="background-image: url('')">
        <div class="grid">
            <div class="grid-row _align _align-middle _align-middle-md _align-middle-sm">
                <div class="grid-col _md-6 _sm-12 _xs-12 u-hidden-lg u-hidden-md">
                    <div class="cover-img">
                        <img src="{{asset('img/cover.png')}}" alt="">
                    </div>
                </div>
                <div class="cover-content grid-col _md-6 _sm-12 _xs-12">
                   <div class="cover-meta">
                       <h1>Get cashback every time you shop.</h1>
                       <p>Get cashback, online and in-store, from over 1,700 of your favourite brands.</p>
                   </div>
                    <div class="cover-btn">
                        <button data-toggle="modal" data-target="#modal" class="btn">Join Today</button>
                    </div>
                </div>
                <div class="grid-col _md-6 _sm-8 _xs-12 u-hidden-sm u-hidden-xs">
                    <div class="cover-img">
                        <img src="{{asset('img/cover.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section work" id="work">
        <div class="grid">
            <div class="section-title">
                <h2>How it <span>works?</span></h2>
                <div class="section-desc">
                    <p>Start every shop with CashSwag</p>
                </div>
            </div>
            <div class="work-grid grid-row _align _align-middle _align-middle-md _align-middle-sm">
                <div class="work-img grid-col _md-7 _sm-7 _xs-12">
                    <img src="{{asset('img/cover.png')}}" alt="How it works?">
                </div>
                <div class="grid-col _md-5 _sm-5 _xs-12">
                    <div class="work-item">
                        <p class="work-num">01</p>
                        <b>Shop in-store</b>
                        <div class="work-desc">
                            <p>Securely link your Visa, Mastercard or eftpos card to your Cashrewards account. When you use your linked card in-store at participating retailers, we’ll track your purchase.</p>
                        </div>
                    </div>
                    <div class="work-item _top">
                        <p class="work-num">02</p>
                        <b>Shop online</b>
                        <div class="work-desc">
                            <p>Log in to Cashrewards and browse retailer offers via our website, app or extension. Click through to activate your chosen offer and make your purchase.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-row _align _align-middle _align-middle-md _align-middle-sm">
                <div class="work-img _mob grid-col _md-6 _sm-6 _xs-12 u-hidden-lg u-hidden-md u-hidden-sm">
                    <img src="{{asset('img/app.png')}}" alt="App">
                </div>
                <div class="grid-col _md-6 _sm-6 _xs-12">
                    <div class="work-item">
                        <p class="work-num">03</p>
                        <b>Get cashback</b>
                        <div class="work-desc">
                            <p>It can take up to seven days for pending cashback to show in your Cashrewards account, then between one and 100 days for retailers to approve your cashback.</p>
                            <p>Once your transactions are approved, withdraw your cash into your PayPal or bank account.</p>
                        </div>
                    </div>
                </div>
                <div class="work-img _mob grid-col _md-6 _sm-6 _xs-12 u-hidden-xs">
                    <img src="{{asset('img/app.png')}}" alt="App">
                </div>
            </div>
        </div>
    </section>

    <section class="section partners" id="partners">
        <div class="grid">
            <div class="section-title">
                <h2>Over <span>1 700 retailers</span> to shop</h2>
                <div class="section-desc">
                    <p>All your favourite brands</p>
                </div>
            </div>

            <div class="partners-grid grid-row">
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/1.svg')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>Up to 7% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/2.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>10% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/3.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>Up to 2% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img _sm">
                            <img src="{{asset('img/company/4.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>1.5% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/5.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>Up to 1% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/6.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>1.5% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/7.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>Up to 4.2% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/8.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>Up to 3% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/9.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>Up to 3.5% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/10.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>1% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/11.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>6% cashback</p>
                        </div>
                    </div>
                </div>
                <div class="grid-col _md-2 _sm-3 _xs-6">
                    <div class="partners-item">
                        <div class="partners-img">
                            <img src="{{asset('img/company/12.png')}}" alt="">
                        </div>
                        <div class="partners-desc">
                            <p>5% cashback</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="join grid">
            <div class="join-title">
                <h2>Join now in leading cashback <br> community.</h2>
            </div>

            <form class="join-form form" action="">
                <b class="join-user"><span class="icon icon-user"></span><span class="title">Personal Info</span></b>

                <div class="wrapper_tabcontent">

                    <div id="step-1" class="tabcontent tabcontent-1 active join-slide">
                        <div class="tab-meta">
                            <div class="grid-row">
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="f-name">First name</label>
                                        <div class="form-icon i-user">
                                            <input type="text" name="f-name" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="l-name">Last name</label>
                                        <div class="form-icon i-user">
                                            <input type="text" name="l-name" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tel">Phone</label>
                                        <div class="form-icon i-phone">
                                            <input type="tel" name="tel" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tel">Email</label>
                                        <div class="form-icon i-email">
                                            <input type="text" name="email" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="step-2" class="tabcontent tabcontent-1 join-slide">
                        <div class="tab-meta">
                            <div class="grid-row">
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="f-name">Card owner</label>
                                        <div class="form-icon i-user">
                                            <input type="text" name="c-owner" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="l-name">Card number</label>
                                        <div class="form-icon i-card">
                                            <input type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="c-number" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tel">MM/YY</label>
                                        <div class="form-icon i-date">
                                            <input type="tel" pattern="\d*" maxlength="7" name="c-date" class="form-field" placeholder="MM / YY" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-col _md-6 _sm-6 _xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="tel">CVC</label>
                                        <div class="form-icon i-cvc">
                                            <input type="tel" pattern="\d*" maxlength="4" name="c-cvc" class="form-field" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid-row _align _align-middle _align-middle-md _align-middle-sm">
                    <div class="join-polit grid-col _md-8 _sm-8 _xs-12 u-hidden-xs">
                        <p>Нажимая кнопку продолжить я соглашаюсь с <a target="_blank" href="#data">обработкой персональных данных</a></p>
                    </div>
                    <div class="tabs join-btn grid-col _md-4 _sm-4 _xs-12">
                        <a data-item="step-2" class="tablinks tablinks-1 active btn-hide js-visible btn">Continue</a>
                        <button class="btn js-tabs-2 btn-hide">Join Today</button>
                    </div>
                    <div class="join-polit grid-col _md-8 _sm-8 _xs-12 u-hidden-lg u-hidden-md u-hidden-sm">
                        <p>Нажимая кнопку продолжить я соглашаюсь с <a target="_blank" href="#data">обработкой персональных данных</a></p>
                    </div>
                </div>
            </form>

        </div>


    </section>

<!--BOOTSTRAP MODAL-->

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <button class="modal-close icon _close" data-dismiss="modal"></button>
            <div class="section-meta">
                <h2 class="modal-title _bt">Join now in leading <br> cashback community.</h2>
            </div>
            <div class="modal-tab">
                <ul class="modal-tab-li u-list-clean u-list-inline">
                    <li><a data-item="mstep-1" class="tablinks tablinks-2 active"></a></li>
                    <li><a data-item="mstep-2" class="js-tab-2 tablinks tablinks-2"></a></li>
                </ul>
            </div>
            <form method="post" id="js-modal" class="join form">
                <div id="mstep-1" class="tabcontent tabcontent-2 active join-slide">

                    <div class="tab-meta">
                        <div class="form-group">
                            <label class="form-label" for="f-name">First name</label>
                            <div class="form-icon i-user">
                                <input type="text" name="f-name" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="l-name">Last name</label>
                            <div class="form-icon i-user">
                                <input type="text" name="l-name" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="tel">Phone</label>
                            <div class="form-icon i-phone">
                                <input type="tel" name="tel" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="tel">Email</label>
                            <div class="form-icon i-email">
                                <input type="text" name="email" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group _bt">
                            <button data-item="mstep-2" class="tablinks js-btn-2 tablinks-2 active btn">Continue</button>
                        </div>
                    </div>
                </div>

                <div id="mstep-2" class="tabcontent tabcontent-2 join-slide">
                    <div class="tab-meta">
                        <div class="form-group">
                            <label class="form-label" for="f-name">Card owner</label>
                            <div class="form-icon i-user">
                                <input type="text" name="c-owner" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="l-name">Card number</label>
                            <div class="form-icon i-card">
                                <input type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="c-number" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="tel">MM/YY</label>
                            <div class="form-icon i-date">
                                <input type="tel" pattern="\d*" maxlength="7" name="c-date" class="form-field" placeholder="MM / YY" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="tel">CVC</label>
                            <div class="form-icon i-cvc">
                                <input type="tel" pattern="\d*" maxlength="4" name="c-cvc" class="form-field" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group _bt">
                            <button class="btn">Join Today</button>
                        </div>
                    </div>
                </div>

                <div class="join-polit">
                    <p>Нажимая кнопку продолжить я соглашаюсь с <a target="_blank" href="#data">обработкой персональных данных</a></p>
                </div>


            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-success">
    <div class="modal-dialog">
        <div class="modal-content _status">
            <button class="modal-close icon _close" data-dismiss="modal"></button>
            <div class="modal-status">
                <img src="{{asset('img/check.svg')}}" alt="">
            </div>
            <div class="section-meta modal-meta">
                <h2 class="modal-title _bt _tw">Thank you for your request</h2>
                <div class="modal-desc">
                    <p>We will process your order as soon as possible.</p>
                </div>
            </div>
            <div class="modal-btn">
                <button class="btn" data-dismiss="modal">Okay</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-error">
    <div class="modal-dialog">
        <div class="modal-content _status">
            <button class="modal-close icon _close" data-dismiss="modal"></button>
            <div class="modal-status">
                <img src="{{asset('img/error.svg')}}" alt="">
            </div>
            <div class="section-meta modal-meta">
                <h2 class="modal-title _red _bt _tw">Something went wrong =(</h2>
                <div class="modal-desc">
                    <p>Please try again</p>
                </div>
            </div>
            <div class="modal-btn">
                <button class="btn _red" data-dismiss="modal">Try again</button>
            </div>

        </div>
    </div>
</div>

<!--MODAL END-->

<nav class="nav-mobile">
    <div class="grid">
        <ul class="header-list u-list-clean">
            <li><a class="js-m" href="#work">How it Work</a></li>
            <li><a class="js-m" href="#partners">Partners</a></li>
            <li><button data-toggle="modal" data-target="#modal-error" class="js-m btn-line">Subscribe now</button></li>
        </ul>
    </div>
</nav>







@endsection
