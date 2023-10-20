
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crypto ocean</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front-home/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    @if (app()->getLocale()=="en")
    <link href="{{asset('front-home/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-home/css/style.css')}}" rel="stylesheet">
    @else
    <link href="{{asset('front-home/css/bootstrap-ar.min.css')}}" rel="stylesheet">
    <link href="{{asset('front-home/css/style-ar.css')}}" rel="stylesheet">    @endif


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->




    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                 
                        @if (Route::has('login'))
                            @auth
                            <i class="bi bi-person fs-2"></i>
                            <div class="ms-3">
                            <h5 class="text-white mb-0"> <a class="text-white mb-0" href="{{ url('/home') }}"> {{ __('menu.My profile') }}  </a></h5>  
                            <span>
                            <a  href="{{ route('logout') }}" class="text-white mb-0"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                      
                       {{ __('menu.Logout') }}
                                        
                                    </a>
                            </span>
                         

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>      
                            </div>    
                                @else
                                <div class="ms-3">
                                <h5> <a class="text-white ho" href="{{ route('login')}}"> {{__('menu.LOG IN')}} </a> \ 
                                @if (Route::has('register'))
                                <a class="text-white ho" href="{{ route('register')}}"> {{__('menu.Register')}} </a></h5>
                                @endif
                                </div>
                            @endauth
                        @endif
                       
                   
                </div>
                @if (app()->getLocale()=="en")
                <a href="{{url('/')}}" class="h1 text-white mb-0">{{__('menu.Crypto')}}<span class="text-dark">{{__('menu.Ocean')}}</span></a>
                @else
                <a href="{{url('/')}}" class="h1 text-white mb-0">{{__('menu.Ocean')}} <span class="text-dark">{{__('menu.Crypto')}}</span></a>

                @endif

                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">{{__('menu.Mail Now')}}</h5>
                        <span>{{$info->email1==NULL ? 'No email yet' : $info->email1}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            @if (app()->getLocale()=="en")
                <a href="{{url('/')}}" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">{{__('menu.Crypto')}}<span class="text-dark">{{__('menu.Ocean')}}</span></h1>

                </a>
                @else
                <a href="{{url('/')}}" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">{{__('menu.Ocean')}}<span class="text-dark"> {{__('menu.Crypto')}}</span></h1>

                </a>

                @endif
          
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{url('/')}}" class="nav-item nav-link active">{{__('menu.Home')}}</a>
                        <a href="#about" class="nav-item nav-link">{{__('menu.About')}}</a>
                        <a href="#game" class="nav-item nav-link">{{__('menu.WEB3.0 GameFi')}}</a>
                        <a href="#learn" class="nav-item nav-link">{{__('menu.Learn to Earn')}}</a>
                        <a href="#project" class="nav-item nav-link">{{__('menu.Projects')}}</a>
                        <a href="#article" class="nav-item nav-link">{{__('menu.Articles')}}</a>
                        <a href="{{route('download_service')}}" class="nav-item nav-link">{{__('menu.Services')}}</a>

                        @if (Route::has('login'))
                        <div class="menu">
                            @auth
                            <a href="{{ url('/home') }}" class="nav-item nav-link">{{__('menu.My profile')}}</a>  
                            
                                @else
                                <a href="{{ route('login')}}" class="nav-item nav-link"> {{__('menu.LOG IN')}} </a>

                                @if (Route::has('register'))
                                <a href="{{ route('register')}}" class="nav-item nav-link">{{__('menu.Register')}}</a>
                                @endif
                            @endauth
                            </div>
                        @endif

                 

                    </div>
                    <div class="ms-auto d-none d-lg-flex" style="display:flex !important; ">
                  
                        <a class="btn btn-sm-square btn-primary ms-2" href="{{url('setlocale/ar')}}">AR</a>
                        <a class="btn btn-sm-square btn-primary ms-2" href="{{url('setlocale/en')}}">EN</a>
                        <div class="nav-item dropdown">
                        <a style="border-radius:50%" href="#" class="nav-link dropdown-toggle btn-primary ms-2" data-bs-toggle="dropdown"><i class="bi bi-download"></i> {{__('menu.Download App')}} </a>
                
                            <div class="dropdown-menu bg-light m-0" style="border-radius:10%">
                                <a href="" class="dropdown-item " id="downloadButton">APK</a>
                                <a href="#" class="dropdown-item" id="downloadButton">IOS
                                <span class="soon" >{{__('menu.soon')}}</span></a>

                            </div>
                    </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->



    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100 vh-100" src="{{asset('uploads/images/slider/'.$slider1->image)}}" alt="Image">
                    @if(($slider1->title_en) == NULL || ($slider1->title_ar) == NULL)
                    @else
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3 text-center">{!!app()->getLocale() == "en" ? $slider1->title_en : $slider1->title_ar!!}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @foreach($slider as $slider)
                <div class="carousel-item">
                    <img class="w-100 vh-100" src="{{asset('uploads/images/slider/'.$slider->image)}}" alt="Image">
                    @if(($slider1->title_en) == NULL || ($slider1->title_ar) == NULL)
                    @else
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3 text-center">{!!app()->getLocale() == "en" ? $slider->title_en : $slider->title_ar!!}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row">
                        
                            <img class="img-fluid" src="{{asset('uploads/images/about/'.$about->image)}}">
                       
       
         
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">{{__('menu.About Crypto Ocean')}}</h1>
                    <p class="mb-4">{!!app()->getLocale() == "en" ? $about->title_en : $about->title_ar!!}</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                                <p class="text-white mb-0">{{__('menu.Visitors')}}</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$visitorsCount}}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">{{__('menu.Users')}}</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$registeredUsersCount}}</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">{{__('menu.Download App')}}</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{$downloadCount }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Service Start -->
    <div class="container-fluid container-service py-5" id="article">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">{{__('menu.Articles')}}</h1>
            </div>
            <div class="row g-4">
            @if($article->count()>0)
            @foreach($article as $article)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class=" mb-4">
                            <img src="{{url('uploads/images/article/'.$article->image_major)}}" width="200" height="150" alt="">
                        </div>
                        <h5 class="mb-3">{!!app()->getLocale() == "en" ? $article->en_name : $article->ar_name!!}</h4>
                            <p class="mb-4">{!!app()->getLocale() == "en" ? $article->en_writer : $article->ar_writer!!}</p>
                        <a class="btn btn-light px-3" href="{{ route('details_article', ['slug' => $article->slug]) }}">{{__('menu.Read More')}}
                        @if (app()->getLocale()=="en")
                        <i class="bi bi-chevron-double-right ms-1"></i>
                        @else
                        <i class="bi bi-chevron-double-left ms-1"></i>
                        @endif         
                        </a>
                    </div>
                </div>
            @endforeach
            @else
            <div class="text-center">{{__('menu.No Articles yet')}}</div> 
            @endif
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Team Start -->
    <div class="container-fluid container-team py-5" id="project">
        <div class="container pb-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">{{__('menu.More projects and Mission')}}</h1>
            </div>
            <div class="row g-4">
            @if($mission->count()>0)
            @foreach($mission as $mission)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{url('uploads/images/mission/'.$mission->image_major)}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href="{{$mission->twitter}}"><i class="fas fa-times"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="{{$mission->tele1}}"><i class="fab fa-telegram"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="{{$mission->link}}"><i class="fa fa-link"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="{{$mission->discord}}"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">{!!app()->getLocale() == "en" ? $mission->en_name : $mission->ar_name!!}</h5>
                            <span>{!!app()->getLocale() == "en" ? $mission->en_glance : $mission->ar_glance!!}</span> <br>
                            <a class="btn btn-light px-3" href="{{route('details_mission', ['slug' => $mission->slug]) }}">{{__('menu.Read More')}}
                        @if (app()->getLocale()=="en")
                        <i class="bi bi-chevron-double-right ms-1"></i>
                        @else
                        <i class="bi bi-chevron-double-left ms-1"></i>
                        @endif         
                        </a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            @else
            <div class="text-center">{{__('menu.No Mission or project yet')}}</div>
            @endif
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5" id="learn">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">{{__('menu.Learn to Earn')}}</h1>
            </div>
            <div class="row g-4">
            @if($learn->count()>0)
            @foreach($learn as $learn)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class=" mb-4">
                            <img src="{{url('uploads/images/learn/'.$learn->image_major)}}" width="200" height="150" alt="">
                        </div>
                        <h5 class="mb-3">{!!app()->getLocale() == "en" ? $learn->en_name : $learn->ar_name!!}</h4>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center">
                                <button type="button" class="btn-play" onclick="redirectToYouTube()" data-src="{{$learn->youtube}}" ><span></span> </button>
                            </div>
                        </div>

                        <script>
                                function redirectToYouTube() {
                                    // استخراج قيمة data-src من الزر
                                    var youtubeLink = document.querySelector('.btn-play').getAttribute('data-src');
                                    
                                    // تحويل المستخدم إلى رابط YouTube
                                    window.location.href = youtubeLink;
                                }
                        </script>
              
                    </div>
                </div>
            @endforeach
            @else
            <div class="text-center">{{__('menu.No Learn courses yet')}}</div> 
            @endif
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-fluid container-team py-5" id="game">
        <div class="container pb-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">{{__('menu.WEB3.0 GameFi Guid')}}</h1>
            </div>
            <div class="row g-4">   
            @if($guide->count()>0)
            @foreach($guide as $guide)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{url('uploads/images/guide/'.$guide->image_major)}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1" href="{{$guide->twitter}}"><i class="fas fa-times"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="{{$guide->tele1}}"><i class="fab fa-telegram"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="{{$guide->link}}"><i class="fa fa-link"></i></a>
                                <a class="btn btn-square btn-light mx-1" href="{{$guide->discord}}"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">{!!app()->getLocale() == "en" ? $guide->en_name : $guide->ar_name!!}</h5>
                            <span>{!!app()->getLocale() == "en" ? $guide->en_glance : $guide->ar_glance!!}</span> <br>
                            <a class="btn btn-light px-3" href="{{route('details_guide', ['slug' => $guide->slug]) }}">{{__('menu.Read More')}}
                        @if (app()->getLocale()=="en")
                        <i class="bi bi-chevron-double-right ms-1"></i>
                        @else
                        <i class="bi bi-chevron-double-left ms-1"></i>
                        @endif         
                        </a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            @else
            <div class="text-center">{{__('menu.No WEb3 game yet')}}</div>
            @endif
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>
    document.getElementById('downloadButton').addEventListener('click', function() {
        // تنفيذ الكود الذي يقوم بتسجيل الحدث
        trackAppDownload();
    });

    function trackAppDownload() {
        // قم بإرسال طلب إلى Laravel backend لتسجيل حدث التحميل
        fetch('/track-app-download', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}', // يجب استبدالها بقيمة الـ CSRF token
        },
        body: JSON.stringify({}),
    })
    .then(response => response.json())
    .then(data => {
        // يمكنك إضافة المزيد من التعليمات هنا إذا كنت بحاجة إليها

        // بمجرد تأكيد التحميل، قم بتوجيه المستخدم إلى صفحة الإحصائيات
        window.location.href = 'https://play.google.com/store/apps/details?id=com.whatsapp&hl=ar&gl=US';
    })
    .catch(error => {
        console.error('Error tracking app download event:', error);
    });
    }
</script>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('front-home/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('front-home/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('front-home/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('front-home/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('front-home/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('front-home/js/main.js')}}"></script>
</body>

</html>           