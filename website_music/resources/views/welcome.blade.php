<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="webthemez.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tunes - Music Website Template html5 bootstrap</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/flexslider.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/css/main.css">
    <link href="/jPlayer-2.9.2/dist/skin/pink.flag/css/jplayer.pink.flag.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/css/responsive.css">
    <link rel="stylesheet" href="/css/font-icon.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
<!-- header section -->
<script>

    @if (session()->has('email')) 
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: '{{ Session::get("email") }}',
        showConfirmButton: false,
        timer: 4000
    });
    @endif

</script>
<section class="banner" role="banner">
    <header id="header">
        @if (Route::has('login'))
            <div class="login_users">
                @auth
                    @if (auth()->user()->manager == 1)
                        <a href="{{ url('dashboard') }}">مدیر عزیز خوش آمدید</a>
                    @else
                        <a href="{{ route('dashboard') }}">{{Auth::user()->name}} عزیز خوش آمدید</a>
                    @endif
                @else
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">ثبت نام</a>
                    @endif
                    <span style="color: red; font-size: 20px">/</span>
                    <a href="{{ route('login') }}">ورود</a>
                @endauth
            </div>
        @endif
        <div class="header-content clearfix"><span class="logo"><a href="{{ url('/') }}">tunes</a></span>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a style="font-size: 20px" href="#contact">تماس با ما</a></li>
                    <li><a style="font-size: 20px" href="#teams">اعضای سایت</a></li>
                    <li><a style="font-size: 20px" href="#gallery">گالری</a></li>
                    <li><a style="font-size: 20px" href="#package">آلبوم ها</a></li>
                    <li><a style="font-size: 20px" href="#Playlist">لیست اهنگ ها</a></li>
                    <li><a style="font-size: 20px" href="#services">ویجت ها</a></li>
                    <li><a style="font-size: 20px" href="#intro">درباره ما</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a></div>
    </header>
    <!-- banner text -->
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="banner-text text-center">
                <h1>a Music</h1>
                <p>Hello Welcome To Tunes Music</p></div>
            <!-- banner text -->
        </div>
    </div>
</section>
<!-- header section -->
<!-- intro section -->
<section id="intro" class="section intro">
    <div class="container">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h3>سایت TUNSE بهترین سایت موزیک ایران</h3>
            <p style="font-size: 20px">برای دسترسی به اهنگ های سایت روی دکمه زیر کلیک کنید تا از بهترین آهنگ های سایت بهرمهند شوید</p>
            <a href="#Playlist" class="btn btn-large">لیست اهنگ ها</a>
        </div>
    </div>
</section>
<!-- intro section -->
<!-- services section -->
<section id="services" class="services service-section">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">آنچه دریافت میکنید</h2>
            <p class="wow fadeInDown animated" style="font-size: 18px; direction: rtl">وبسایت TUNES یکی از بهترین وبسایت ها در راستای اهنگ های خارجی و ایرانی هست که میتوانید آنها را دانلود کنید</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 services text-center"><span class="icon icon-briefcase"></span>
                <div class="services-content">
                    <h5>آلبوم ها</h5>
                    <p style="font-size: 20px">تمام آلبوم هایی که در این سایت مشاهده میکنید بروزترین آلبوم های دنیا هستند</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"><span class="icon icon-tools"></span>
                <div class="services-content">
                    <h5>موزیک پلیر</h5>
                    <p style="font-size: 20px">شما میتوانیدد در سایت بدون دانلو کردن آهنگ ها به صورت مستیقیم از طریق موزیک پلیر اهنگ دلخواه خود را دانلود کنید</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"><span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <h5>کیفیت آهنگ</h5>
                    <p style="font-size: 20px">تمام موزیک های این سایت تست شده و دارای ییشترین کیفیت هستند</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services section -->

<section id="Playlist" style="font-size: 20px;" class="playlistList">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">لیست آهنگ ها</h2>
            <p class="wow fadeInDown animated" style="direction: rtl; font-size: 20px">برای اجرا کردن هر کدام از آهنگ های زیر روی دکمه play کیلک کنید و با بخش های مختلف آن را کنترل کنید</p>
        </div>
        <div class="row">
            <div id="jquery_jplayer_2" class="jp-jplayer"></div>
            <div id="jp_container_2" style="font-size: 25px; direction:rtl;" class="jp-audio" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                    <div class="jp-gui jp-interface">
                        <div class="jp-volume-controls">
                            <button class="jp-mute" role="button" tabindex="0">mute</button>
                            <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                            <div class="jp-volume-bar">
                                <div class="jp-volume-bar-value"></div>
                            </div>
                        </div>
                        <div class="jp-controls-holder">
                            <div class="jp-controls">
                                <button class="jp-previous" role="button" tabindex="0">previous</button>
                                <button class="jp-play" role="button" tabindex="0">play</button>
                                <button class="jp-stop" role="button" tabindex="0">stop</button>
                                <button class="jp-next" role="button" tabindex="0">next</button>
                            </div>
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                            <div class="jp-toggles">
                                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                            </div>
                        </div>
                    </div>
                    <div class="jp-playlist">
                        <ul>
                            <li>&nbsp;</li>
                        </ul>
                    </div>
                    <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your
                        <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- package section -->
<section id="package" class="packageList">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">آلبوم ها</h2>
            <p style="direction: rtl; font-size: 20px" class="wow fadeInDown animated">برای خرید هر کدام از البوم های سایت TUNES<br>به مدیر اصلی سایت تیکت دهید</p>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="package wow fadeInLeft animated" data-wow-offset="250" data-wow-delay="200ms">
                    <h5>Earth Alive</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>38</strong>
                </div><!-- end package -->

                <div class="package wow fadeInLeft animated" data-wow-offset="200" data-wow-delay="300m">
                    <h5>Light Blue</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>75</strong>
                </div><!-- end package -->

                <div class="package no-border wow fadeInLeft animated" data-wow-offset="150" data-wow-delay="400m">
                    <h5>Rock n Roll</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>46</strong>
                </div><!-- end package -->

            </div><!-- end col-md-6 -->
            <div class="col-md-6">

                <div class="package wow fadeInRight animated" data-wow-offset="250" data-wow-delay="500m">
                    <h5>Love Life</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>15</strong>
                </div><!-- end package -->

                <div class="package wow fadeInRight animated" data-wow-offset="200" data-wow-delay="600m">
                    <h5>Back Street</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>84</strong>
                </div><!-- end package -->

                <div class="package no-border wow fadeInRight animated" data-wow-offset="150" data-wow-delay="700m">
                    <h5>Golden Days</h5>
                    <ul class="list-default">
                        <li>Lorem ipsum dolor sit amet, consectetur</li>
                        <li>adipiscing eliteger gravida velit quis dolo</li>
                        <li>Pellentesque elit tortor</li>
                    </ul>
                    <strong class="price"><small>$</small>95</strong>
                </div><!-- end package -->

            </div><!-- end col-md-6 -->
        </div><!-- end row -->
    </div>
</section>
<!-- package section -->

<!-- gallery section -->
<section id="gallery" class="gallery section">
    <div class="container-fluid">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">گالری</h2>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/01.jpg" class="work-box"> <img
                        src="/images/portfolio/01.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/02.jpg" class="work-box"> <img
                        src="/images/portfolio/02.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/03.jpg" class="work-box"> <img
                        src="/images/portfolio/03.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/04.jpg" class="work-box"> <img
                        src="/images/portfolio/04.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/05.jpg" class="work-box"> <img
                        src="/images/portfolio/05.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/06.jpg" class="work-box"> <img
                        src="/images/portfolio/06.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/07.jpg" class="work-box"> <img
                        src="/images/portfolio/07.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"><a href="/images/portfolio/08.jpg" class="work-box"> <img
                        src="/images/portfolio/08.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a></div>
        </div>
    </div>
</section>
<!-- gallery section -->

<!-- our team section -->
<section id="teams" class="section teams">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">مدیر سایت</h2>
        </div>
        <div class="row">


            <div class="col-lg-12">
                <div id="programmer" class="person"><img src="/images/photo_2020-12-15_16-08-53.jpg" alt="" class="img-responsive">
                    <div class="person-content">
                        <h4>Jonh Dow</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eget risus vitae massa.</p>
                    </div>
                    <ul class="social-icons clearfix">
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- our team section -->
<!-- Testimonials section -->
<section id="contact" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">

                <div class="container">
                    <div class="section-header">
                        <h2 class="wow fadeInDown animated">تماس با ما</h2>
                        <p style="font-size: 20px" class="wow fadeInDown animated">برای سفارش یا نظر دادن در مورد اهنگ
                            ها و البوم ها از لینک زیر در صورت ثبت نام کردن استفاده کنید</p>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 conForm">
                            <div id="message"></div>
                            <form id="form-submit" style="direction: rtl;" method="post" action="{{ route('comments.store') }}">
                                @csrf
                                <input id="name" type="text" name="title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                                       placeholder=" عنوان نظر ...">
                                       @error('title')
                                           <span style="background:whitesmoke; padding:10px; border-radius: 5px; margin: 0 0 10px 0; display:inline-block; color:red;"><b>{{ $message }}</b></span>
                                       @enderror
                                <input id="email" name="email" type="email"
                                       class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr"
                                       placeholder="ایمیل شما..."><br>
                                       @error('email')
                                           <span style="background:whitesmoke; padding:10px; border-radius: 5px; margin: 0 0 10px 0; display:inline-block; color:red;"><b>{{ $message }}</b></span>
                                       @enderror
                                <textarea name="comment" id="comments" cols="" rows=""
                                          class="col-xs-12 col-sm-12 col-md-12 col-lg-12"
                                          placeholder="نظر شما..."></textarea><br>
                                          @error('comment')
                                              <span style="background:whitesmoke; padding:10px; border-radius: 5px; margin: 0 0 10px 0; display:inline-block; color:red;"><b>{{ $message }}</b></span>
                                          @enderror <br>
                                <input type="submit" id="submit"  class="submitBnt" value="ارسال">
                                <div id="simple-msg"></div>
                            </form>                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->

<!-- contact section -->
<!-- Footer section -->
<footer class="footer">
    <div class="container-fluid">
        <div id="map-row" class="row">
            <div class="col-xs-12">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>

                <div id="map-overlay" class="col-xs-5 col-xs-offset-6" style="">
                    <h2 style="margin-top:0;color:#fff;">درباره من</h2>
                    <address style="color:#fff;">
                        <strong>شرکت TUNES</strong><br>
                        چسبیده به حرم امام رضا<br>
                        اپارتمان نیلوفر ۲۹<br>
                        طبقه ۳<br>
                        واحد 6<br>
                        <abbr title="Phone" style=""> شماره :</abbr> (604) 555-4321
                    </address>
                    © 2019 Company Name. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank">Bootstrap
                        Template</a> by WebThemez
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer section -->
<!-- JS FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.flexslider-min.js"></script>
<script src="/js/jquery.fancybox.pack.js"></script>
<script src="/js/retina.min.js"></script>
<script src="/js/modernizr.js"></script>
<script src="/js/main.js"></script>
<script type="text/javascript" src="/js/jquery.contact.js"></script>

<script type="text/javascript" src="/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/jPlayer-2.9.2/dist/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript">
    //<![CDATA[
    $(document).ready(function () {

        new jPlayerPlaylist({
            jPlayer: "#jquery_jplayer_2",
            cssSelectorAncestor: "#jp_container_2"
        }, [
            @foreach($melodies as $melodi)
            {
                title: "{{  $melodi->singer  }} {{ $melodi->title }}",
                mp3: "{{ $melodi->address }}"
            }
            @endforeach
        ], {
            swfPath: "../../dist/jplayer",
            supplied: "oga, mp3",
            wmode: "window",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true
        });
    });
    //]]>
</script>

</body>
</html>
