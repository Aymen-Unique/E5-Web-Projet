<!DOCTYPE html>
<html lang="en">
<head>
    
    

<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('titre')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
    
    <!-- CSS
	============================================ -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icons.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    
 
    <header
     class="header-area clearfix header-hm8">
     @include("layouts.headretoparea")
        


        <div class="header-bottom sticky-bar header-res-padding header-padding-2">
            
            <div class="container">
    
                <!--row-->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-4">
                        @include("layouts.logo")
                        
                    </div>
                    <div class="col-xl-12 col-lg-12 d-none d-lg-block">
                        <div class="main-menu">
    
    
                            <!-- nave bare-->
                            <nav>
                               @include("layouts.navbare")
                            </nav>
    
    
    
                            <!--fin nav -->
                        </div>
                    </div>
                </div>
                <!--fin row-->
    
    
                
                <div class="mobile-menu-area">
                    @include("layouts.menumobile")
                </div>
            </div>
        </div>
    </header>
 <div class="slider-area">
            @include("layouts.sliderarea")
        
 </div class="collections-area pt-100 pb-100">
 @include("layouts.collections")
    
</div>


@yield("contenu")


<div class="suppoer-area pt-70 pb-60 hm9-section-padding bg-img" style="background-image:url(assets/img/bg/pattern-1.png);">

    @include("layouts.suppoer")
    
</div>

<div class="deal-area pt-100 pb-100">
    @include("layouts.deal")
    
</div>


<div class="testimonial-area bg-gray-3 pt-100 pb-95">
    @include("layouts.testimonial")

    

</div>


<div class="subscribe-area-3 pt-100 pb-100">
    @include("layouts.subscribe")

    
</div>
    
    

        <footer class="footer-area bg-gray pt-100 pb-70">

            @include("layouts.footer")

            
        </footer>
        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            @include("layouts.modal")

            
        </div>
        <!-- Modal end -->
        
        
        
        
        
        
        
        
        
        <!-- All JS is here
        ============================================ -->
        
        <script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-v3.6.0.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/jquery-migrate-v3.3.2.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/popper.min.js')}}"></script>
        <script src="{{ asset('assets/js/vendor/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins.js')}}"></script>
        <!-- Ajax Mail -->
        <script src="{{asset('assets/js/ajax-mail.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        
        </body>
        
        
        <!-- Mirrored from template.hasthemes.com/flone/flone/index-22.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Dec 2021 08:49:36 GMT -->
        </html>
