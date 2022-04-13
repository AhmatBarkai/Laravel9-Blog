<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <!DOCTYPE html>

<html lang="Eng">
      <title>@yield('title')</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Inside-Art Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        <meta name="author" content="@yield('author')">
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);

         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{asset('assets')}}/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--lightbox slider-->
      <link rel="stylesheet" href="{{asset('assets')}}/css/lightbox.css">
      <!-- lightbox slider-->
      <!--stylesheets-->
      <link href="{{asset('assets')}}/css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">

      {{-- @yield(css)
      @yield(headerjs) --}}

   </head>
   <body>


       @include('home._header')

       @include('home._slideshow')

        <!-- Blog -->
       <section class="py-md-3 py-sm-3 py-3">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-8">

                    @include('home._blog1')
                    @include('home._blog2')
                    @include('home._blog3')
                    @include('home._blog4')
                    @include('home._blog5')
                </div>
                   <!-- left sidebare  -->
                <div class="col-lg-4">
                    @include('home._map')
                    @include('home._about')
                    @include('home._newsletter')
                    @include('home._categories')
                    @include('home._tags')
                    @include('home._sideblog')
                    @include('home._contactus')
                </div>
            </div>
         </div>
         <!-- _pagination -->
         @include('home._pagination')

      </section>
      <!-- //Blog -->

      <!-- Galery -->
      @include('home._galery')
      <!-- //Galery -->










       @include('home._footer')
       @yield('footerjs')

   </body>
   </html>
