<!DOCTYPE html>
<html lang="en">

<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Teknik Informatika Politeknik Negeri Banyuwangi">
    <meta name="author" content="Himpunan Mahasiswa Teknik Informatika">
    {{-- end meta tags --}}

    {{-- title --}}
    <title>TI-Poliwangi</title>
    {{-- end title --}}

    {{-- icon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset/images/logo.png') }}">
    {{-- end icon --}}

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    {{-- end font --}}

    {{-- Bootstrap core CSS --}}
    <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Additional CSS Files --}}
    <link rel="stylesheet" href="{{ asset('asset/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/templatemo-grad-school.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">
    {{-- end additional css files --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/feather-icons">
</head>

<body>

    <!--header-->
    @section('navbar')
    @include('layout.navbar')
    @show
    {{-- end header --}}

    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Politeknik Negeri Banyuwangi</h6>
                <h2><em>Teknik</em> Informatika</h2>
                <div class="main-button">
                    <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Main Banner Area End ***** -->


    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="features-post">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>TRPL</h4>
                            </div>
                            <div class="content-hide">
                                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                                    posuere imperdiet.
                                    Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula
                                    libero.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a
                                    posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post second-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>TRPK</h4>
                            </div>
                            <div class="content-hide">
                                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                                    posuere imperdiet.
                                    Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula
                                    libero.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a
                                    posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section3">Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="features-post third-features">
                        <div class="features-content">
                            <div class="content-show">
                                <h4><i class="fa fa-graduation-cap"></i>Real Meeting</h4>
                            </div>
                            <div class="content-hide">
                                <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                                    posuere imperdiet.
                                    Donec maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula
                                    libero.</p>
                                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In
                                    mollis eros a
                                    posuere imperdiet.</p>
                                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section why-us" data-section="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Why choose Grad School?</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div id='tabs'>
                        <ul>
                            <li><a href='#tabs-1'>Best Education</a></li>
                            <li><a href='#tabs-2'>Top Management</a></li>
                            <li><a href='#tabs-3'>Quality Meeting</a></li>
                        </ul>
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-01.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Best Education</h4>
                                        <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS
                                            layout. Feel free to use
                                            it for educational or commercial purposes. You may want to make <a
                                                href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a
                                                little donation</a> to
                                            TemplateMo. Please tell your friends about us. Thank you.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-02.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Top Level</h4>
                                        <p>You can modify this HTML layout by editing contents and adding more pages as
                                            you needed. Since
                                            this template has options to add dropdown menus, you can put many HTML
                                            pages.</p>
                                        <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio,
                                            nec interdum quam
                                            felis non ante.</p>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/images/choose-us-image-03.png" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Quality Meeting</h4>
                                        <p>You are NOT allowed to redistribute this template ZIP file on any template
                                            collection website.
                                            However, you can use this template to convert into a specific theme for any
                                            kind of CMS platform
                                            such as WordPress. For more information, you shall <a rel="nofollow"
                                                href="https://templatemo.com/contact" target="_parent">contact
                                                TemplateMo</a> now.</p>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section coming-soon" data-section="section3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12">
                    <div class="continer centerIt">
                        <div>
                            <h4>Take <em>any online course</em> and win $326 for your next class</h4>
                            <div class="counter">

                                <div class="days">
                                    <div class="value">00</div>
                                    <span>Days</span>
                                </div>

                                <div class="hours">
                                    <div class="value">00</div>
                                    <span>Hours</span>
                                </div>

                                <div class="minutes">
                                    <div class="value">00</div>
                                    <span>Minutes</span>
                                </div>

                                <div class="seconds">
                                    <div class="value">00</div>
                                    <span>Seconds</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right-content">
                        <div class="top-content">
                            <h6>Register your free account and <em>get immediate</em> access to online courses</h6>
                        </div>
                        <form id="contact" action="" method="get">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Your Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            placeholder="Your Email" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <input name="phone-number" type="text" class="form-control" id="phone-number"
                                            placeholder="Your Phone Number" required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">Get it now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section courses" data-section="section4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Choose Your Course</h2>
                    </div>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="Course #1">
                        <div class="down-content">
                            <h4>Digital Marketing</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="Author 1">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="Course #2">
                        <div class="down-content">
                            <h4>Business World</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="Author 2">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="Course #3">
                        <div class="down-content">
                            <h4>Media Technology</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.
                            </p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="Author 3">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="Course #4">
                        <div class="down-content">
                            <h4>Communications</h4>
                            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="Author 4">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Business Ethics</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.
                            </p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Photography</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-02.jpg" alt="">
                        <div class="down-content">
                            <h4>Web Development</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.
                            </p>
                            <div class="author-image">
                                <img src="assets/images/author-02.png" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-03.jpg" alt="">
                        <div class="down-content">
                            <h4>Learn HTML CSS</h4>
                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and
                                Pexels.</p>
                            <div class="author-image">
                                <img src="assets/images/author-03.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-04.jpg" alt="">
                        <div class="down-content">
                            <h4>Social Media</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.
                            </p>
                            <div class="author-image">
                                <img src="assets/images/author-04.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-05.jpg" alt="">
                        <div class="down-content">
                            <h4>Digital Arts</h4>
                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac
                                ipsum porta.</p>
                            <div class="author-image">
                                <img src="assets/images/author-05.png" alt="">
                            </div>
                            <div class="text-button-free">
                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/courses-01.jpg" alt="">
                        <div class="down-content">
                            <h4>Media Streaming</h4>
                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus
                                lobortis enim.
                            </p>
                            <div class="author-image">
                                <img src="assets/images/author-01.png" alt="">
                            </div>
                            <div class="text-button-pay">
                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section video" data-section="section5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="left-content">
                        <span>our presentation is for you</span>
                        <h4>Watch the video to learn more <em>about Grad School</em></h4>
                        <p>You are NOT allowed to redistribute this template ZIP file on any template collection
                            website. However,
                            you can use this template to convert into a specific theme for any kind of CMS platform such
                            as WordPress.
                            You may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact
                                TemplateMo</a>
                            for details.
                            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec
                            interdum quam felis
                            non ante.
                        </p>
                        <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo"
                                target="_parent">External
                                URL</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <article class="video-item">
                        <div class="video-caption">
                            <h4>Power HTML Template</h4>
                        </div>
                        <figure>
                            <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img
                                    src="assets/images/main-thumb.png"></a>
                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section contact" data-section="section6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Let’s Keep In Touch</h2>
                    </div>
                </div>
                <div class="col-md-6">

                    <!-- Do you need a working HTML contact-form script?
                	
                    Please visit https://templatemo.com/contact page -->

                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message"
                                        placeholder="Your message..." required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15792.346242237507!2d114.3069613!3d-8.2941845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4cb09a70b9109740!2sState%20Polytechnic%20of%20Banyuwangi!5e0!3m2!1sen!2sid!4v1657083915909!5m2!1sen!2sid"
                            width="100%" height="422px" frameborder="0" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    @section('footer')
    @include('layout.footer')
    @show
    {{-- end footer --}}

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('asset/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- end bootstrap core JavaScript --}}

    {{-- javascript --}}
    <script src="{{ asset('asset/js/isotope.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('asset/js/lightbox.js') }}"></script>
    <script src="{{ asset('asset/js/tabs.js') }}"></script>
    <script src="{{ asset('asset/js/video.js') }}"></script>
    <script src="{{ asset('asset/js/slick-slider.js') }}"></script>
    <script src="{{ asset('asset/js/custom.js') }}"></script>
    <script src="{{ asset('asset/js/app.js') }}"></script>
    {{-- end javascript --}}
</body>

</html>