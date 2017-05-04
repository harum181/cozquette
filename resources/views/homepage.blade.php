<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cozquette</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

        <!-- Main Style -->

        <!-- Bootstrap style -->
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="/css/main.css">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOCVljPUJWI5rxmlyLKTgwbrCAquuRJ0o&sensor=false&extension=.js"></script>

        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 17,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(-7.051950, 110.440031), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-7.051950, 110.440031),
                    map: map,
                    title: 'Snazzy!'
                });
            }
        </script>

    </head>

    <body>

          <nav class="nave">
            <div class="nav-left">
                <img src="{{ url('img/logo-main.svg') }}" alt="" class="nav-logo">
            </div>
            <div class="nav-right">
                <div class="menu-right">
                     <a href="" class="list-menu">panduan</a>
                     <a href="" class="list-menu">tema bouquet</a>
                     <a href="" class="list-menu">custom now</a>
                     <a href="" class="login">login</a>
                 </div> 
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif
            </div>
        </nav>  
        <div class="extras">
            
            <div id="myCarousel" class="carousel slide extras" data-ride="carousel">
            <!-- indikator slide -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner control-carousel">

              <div class="item active">
                <img src="{{ url('img/background-04.png') }}" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                    <p class="subset-title">Temukan berbagai desain menarik</p>
                    <h1 class="carousel-title">Let us make your dreams</h1>
                    <a href="" class="button-main">custom now</a>
                    <span class="caption-header">Wujudkan desain bouquet impianmu <img src="{{ url('/img/kontak-arrow.svg') }}" alt="" class="small-arrow"></span>
                </div>
              </div>

              <div class="item">
                <img src="{{ url('img/background-02.jpg') }}" alt="Chicago" style="width:100%;">
              </div>
            
              <div class="item">
                <img src="{{ url('img/background-001.jpg') }}" alt="New York" style="width:100%;">
              </div>

              <div class="item">
                <img src="{{ url('img/background-02.jpg') }}" alt="Chicago" style="width:100%;">
              </div>
          
            </div>

            </div> <!-- carousel slide -->

        </div> <!-- extras -->
        
        <div class="row padding-box">
            <div class="col-md-6 section-box-left box-right">
                <h1 class="title-section">
                    Berbagi kebahagiaan melalui custom bouquet    
                </h1>
                <div class="row">
                    <div class="col-md-2">
                        <div class="landing-number ">
                            1
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="subtitle-section-left">
                            Kini kamu dapat membuat custom bouquet yang kamu inginkan dengan lebih mudah
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="landing-number ">
                            2
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="subtitle-section-left">
                            Kami selalu menyediakan produk dengan kualitas terbaik hanya untuk anda
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="landing-number ">
                            3
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="subtitle-section-left">
                            Kepuasan dan kepercayaan anda menjadi prioritas utama dalam menjalankan Cozquette
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 box-right">
                <div class="row section-box-right-top">
                    <div class="section-top">
                        <h1 class="title-section-right">Bouquet Theme</h1>
                        <div class="subtitle-section-right">
                            Kamu juga dapat langsung memilih bouquet yang kamu inginkan
                        </div>
                        <a href="#" class="button-white btn-bou-theme">lihat tema</a>
                    </div>
                </div>
                <div class="row section-box-right-bottom">
                    <div class="section-top">
                        <h1 class="title-section-right">Tentang Kami</h1>
                        <div class="subtitle-section-right">
                            Lihat karya-karya terbaik pilihan kreator bouquet kami
                        </div>
                        <a href="#" class="btn-arrow">
                            <img src="{{ url('/img/kontak-arrow.svg') }}" class="kontak-svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row padding-box">
            <div class="section-box-two">
            <div class="col-md-6">
                <div class="left-boo">
                    <div class="top-subtitle">buat bouquet impianmu sekarang</div>
                    <div class="middle-subtitle">
                    Kreasikan bouquet sesuai dangan keinginanmu dengan menggunakan
                    fitur menarik custom bouquet dari cozquette
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-boo">
                    <h1 class="title-section-right">Custom bouquetmu sekarang juga !</h1>
                    <a href="" class="button-main">custom now</a>
                </div>
            </div>
            </div>
        </div>

        <div class="row padding-box">
            <div class="section-box-three">
                <div class="col-md-6 maps-pad">
                    <div id="map"></div>
                </div>
                <div class="col-md-6">
                    <div class="maps-right">
                        <div class="title-section-right">Cozquette Office</div>
                        <div class="hr-maps"></div>
                        <div class="subtitle-section-maps">Jalan Gerungsari No 28 B Bulusan, Tembalang, Semarang, Jawa Tengah</div>
                        <div class="hr-maps2"></div>
                        <div class="phone-maps">Contact : +6285740062767</div>
                        <span class="icons-right">
                            <a href="" class="social-instagram" alt="Instagram Cozquette" ></a>
                            <a href="" class="social-line" alt="Official Line"></a>
                            <a href="" class="social-facebook" alt="Facebook page"></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row padding-box">
            <div class="section-box-four">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <!-- <img src="{{ url('/img/') }}" alt=""> -->
                                    <div class="col-md-3">
                                        <div class="dummyimage"></div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="title-tips">Arman Maulana</h3>
                                        <p class="case">Teknik Kimia, 2015</p>
                                        <p class="message">Fitur nya sangat menarik, pilihan temanya juga banyak jadi gampang juga milihnya,
                                                            pelayananya juga cepat, pengiriman cepat, trus variasi bouquet nya itu sangat banyak. sukses terus ya cozquette !!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="col-md-3">
                                        <div class="dummyimage"></div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="title-tips">Arman Maulana</h3>
                                        <p class="case">Teknik Kimia, 2015</p>
                                        <p class="message">Fitur nya sangat menarik, pilihan temanya juga banyak jadi gampang juga milihnya,
                                                            pelayananya juga cepat, pengiriman cepat, trus variasi bouquet nya itu sangat banyak. sukses terus ya cozquette !!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <div class="col-md-3">
                                        <div class="dummyimage"></div>
                                    </div>
                                    <div class="col-md-9">
                                        <h3 class="title-tips">Arman Maulana</h3>
                                        <p class="case">Teknik Kimia, 2015</p>
                                        <p class="message">Fitur nya sangat menarik, pilihan temanya juga banyak jadi gampang juga milihnya,
                                                            pelayananya juga cepat, pengiriman cepat, trus variasi bouquet nya itu sangat banyak. sukses terus ya cozquette !!!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left caro-left"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right caro-right"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

      <footer>
          <div class="footer-menu">
          <img src="{{ url('/img/logo-footer.svg') }}" alt="" class="logo-footer">
            <div class="list-footer text-center">
                <a href="" >Panduan</a>
                <a href="" >Download Katalog</a>
                <a href="" >FAQs</a>
                <a href="" >Kontak</a>
                <a href="" >Custom Now</a>
                <a href="" >Tema bouquet</a>
            </div>
              <hr class="hr-footer">
                <div class="copyright">
                        <span class="copyrights-left">
                        &copy 2017 Cozquette | Let us make your dream
                        </span>
                        <span class="copyrights-right">
                            Social media
                            <a href="" class="social-instagram" alt="Instagram Cozquette" ></a>
                            <a href="" class="social-line" alt="Official Line"></a>
                            <a href="" class="social-facebook" alt="Facebook page"></a>
                        </span>
                </div>
          </div>
      </footer>
           
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </body>
</html>
