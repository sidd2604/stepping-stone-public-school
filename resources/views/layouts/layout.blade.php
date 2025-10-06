@include('common.head')

<body>
    <!--Header Area Start-->
    @include('common.header')
    <!--End of Header Area-->
    @yield('contentBody')
    <!--Advertise Area Start-->
    {{-- <div class="advertise-area text-center section-sea-green">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>How to <span>Enroll Your Child</span> to a <span>Class</span>?</h2>
                    <a href="#">Join Us</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!--End of Advertise Area-->
    <!--Class Area Start-->
    <div class="class-area section-padding class-column">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Classes</h3>
                            <p>Our preschool program has six dedicated classes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="class-carousel carousel-style-one owl-carousel">
                <div class="single-class-column">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset("theme/images/1.jpg") }}" alt="">
                                <span class="class-date">Apr 21 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Letter Match Class</a></h4>
                                <p>Labore sequi impedit expedita alias dolore, nulla consequuntur tempore at
                                    voluptatibus fugit quo nihil fugiat! alias ut delectus cupiditate voluptatum.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 5 - 6 years</span>
                                <span>CLASS SIZE: 25</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/10.jpg') }}" alt="">
                                <span class="class-date">OCT 10 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Cool Math Class</a></h4>
                                <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem
                                    ipsum dolor sit amet. The perfect class for your child with the best.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 4 - 5 years</span>
                                <span>CLASS SIZE: 38</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-class-column">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/2.jpg') }}" alt="">
                                <span class="class-date">OCT 10 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Cool Activity Class</a></h4>
                                <p>Lorem ipsum dolor sit amet, abconsectetur adipisicing elit. Sunt quasi molestiae ipsa
                                    ullam perferendis student est magnam nobis vel laborum.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 4 - 5 years</span>
                                <span>CLASS SIZE: 38</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/12.jpg') }}" alt="">
                                <span class="class-date">FEB 19 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Alphabet Matching Class</a></h4>
                                <p>Fuga animi vel cumque officiis provident, quam, odit libero perferendis, itaque odio
                                    rem culpa ab a maxime quas quos illo quod</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 3 - 4 years</span>
                                <span>CLASS SIZE: 50</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-class-column">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/13.jpg') }}" alt="">
                                <span class="class-date">FEB 19 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Drawing Class</a></h4>
                                <p>Minima ipsa possimus voluptatum is consequatur aperiam fuga beatae iusto et quod
                                    expedita, numquam sit, accusantium non expedita!</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 5 - 6 years</span>
                                <span>CLASS SIZE: 12</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/3.jpg') }}" alt="">
                                <span class="class-date">May 13 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Science Class</a></h4>
                                <p>Suscipit qui eum non, vel doloremque placeat, consequuntur explicabo tempore eius!
                                    Numquam amet exercit accusamus praesentium.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 10 - 11 years</span>
                                <span>CLASS SIZE: 45</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-class-column">
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/1.jpg') }}" alt="">
                                <span class="class-date">Apr 21 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Letter Match Class</a></h4>
                                <p>Labore sequi impedit expedita alias dolore, nulla consequuntur tempore at
                                    voluptatibus fugit quo nihil fugiat! alias ut delectus cupiditate voluptatum.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 5 - 6 years</span>
                                <span>CLASS SIZE: 25</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="single-class">
                        <div class="single-class-image">
                            <a href="#">
                                <img src="{{ asset('theme/images/10.jpg') }}" alt="">
                                <span class="class-date">OCT 10 <span>2016</span></span>
                            </a>
                        </div>
                        <div class="single-class-text">
                            <div class="class-des">
                                <h4><a href="#">Cool Math Class</a></h4>
                                <p>The students learn different skills like rhythm, flexibility, and coordination. Lorem
                                    ipsum dolor sit amet. The perfect class for your child with the best.</p>
                            </div>
                            <div class="class-schedule">
                                <span>AGE: 4 - 5 years</span>
                                <span>CLASS SIZE: 38</span>
                                <span class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Class Area-->
    <!--Fun Factor Area Start-->
    <div class="fun-factor-area fun-factor-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <h2><span class="counter">25</span></h2>
                        <span>Teacher</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-bank"></i>
                        </div>
                        <h2><span class="counter">45</span></h2>
                        <span>Campus</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <h2><span class="counter">55</span></h2>
                        <span>Students</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-fun-factor">
                        <div class="fun-factor-icon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h2><span class="counter">250</span></h2>
                        <span>Teaching Hours</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Fun Factor Area-->
    <!--Teachers Column Carousel Start-->
    <div class="teachers-column-carousel-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Teachers</h3>
                            <p>We are glad to introduce our professional staff</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="teachers-column-carousel carousel-style-one owl-carousel">
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="teacher-info.html">
                            <img src="{{ asset('theme/images/6_1.jpg') }}" alt="">
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>Kailo</h4>
                        <span>Professor, Harvard College</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout.</p>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="teacher-info.html">
                            <img src="{{ asset('theme/images/7.jpg') }}" alt="">
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>graves</h4>
                        <span>Professor, Harvard College</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the
                            industry's standard dummy.</p>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="teacher-info.html">
                            <img src="{{ asset('theme/images/10_1.jpg') }}" alt="">
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>poppy</h4>
                        <span>Professor, Harvard College</span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature</p>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="teacher-info.html">
                            <img src="{{ asset('theme/images/9.jpg') }}" alt="">
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>maokai</h4>
                        <span>Professor, Harvard College</span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some.</p>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="teacher-info.html">
                            <img src="{{ asset('theme/images/8.jpg') }}" alt="">
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>graves</h4>
                        <span>Professor, Harvard College</span>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, has been the
                            industry's standard dummy.</p>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Teachers Column Carousel-->
    <!--Gallery Fullwidth Area start-->
    <div class="gallery-area gallery-fullwidth section-gray section-padding">
        <div class="section-title-wrapper">
            <div class="section-title">
                <h3>Our Gallery</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="gallery-wrapper">
            <div class="row no-gutters">
                <div class="single-items col-lg-3 col-md-3 col-sm-6 col-12 overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ asset('theme/images/13.jpg') }}" alt=""></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ asset('theme/images/13.jpg') }}"><i
                                    class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Drawings</span>
                        </div>
                    </div>
                </div>
                <div class="single-items col-lg-3 col-md-3 col-sm-6 col-12 overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ asset('theme/images/3.jpg') }}" alt=""></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ asset('theme/images/3.jpg') }}"><i
                                    class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Activities, Photos</span>
                        </div>
                    </div>
                </div>
                <div class="single-items col-lg-3 col-md-3 col-sm-6 col-12 overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ asset('theme/images/9_1.jpg') }}" alt=""></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ asset('theme/images/9.jpg') }}"><i
                                    class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Play Time</span>
                        </div>
                    </div>
                </div>
                <div class="single-items col-lg-3 col-md-3 col-sm-6 col-12 overlay-hover">
                    <div class="overlay-effect sea-green-overlay">
                        <a href="#"><img src="{{ asset('theme/images/6_2.jpg') }}" alt=""></a>
                        <div class="gallery-hover-effect">
                            <a class="gallery-icon venobox" href="{{ asset('theme/images/6.jpg') }}"><i
                                    class="fa fa-search-plus"></i></a>
                            <span class="gallery-text">Excursions, Play</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-gallery text-center">
            <h4>See Our Kindergarten <span>Photo Gallery!</span></h4>
            <a href="#" class="button-default">View Now</a>
        </div>
    </div>
    <!--End of Gallery Fullwidth Area-->
    <!--Blog Area Start-->
    <div class="blog-area blog-three">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Blog</h3>
                            <p>Latest news & event of our schools</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-carousel carousel-style-one owl-carousel">
                <div class="single-blog-item overlay-hover">
                    <div class="single-blog-image">
                        <div class="overlay-effect">
                            <a href="#">
                                <img src="{{ asset('theme/images/2_1.jpg') }}" alt="">
                                <span class="class-date">Apr 16 <span>2016</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="single-blog-text">
                        <h4><a href="blog-details.html">New Friends Everyday at Kiddie</a></h4>
                        <div class="blog-date">
                            <span><i class="fa fa-calendar"></i>08 Apr, 2016</span>
                        </div>
                        <p>The concept of the activity room is about 'Learning', through play, in a totally different
                            environment. The perfect class for your child with the best.</p>
                        <a href="blog-details.html">Read more.</a>
                    </div>
                </div>
                <div class="single-blog-item overlay-hover">
                    <div class="single-blog-image">
                        <div class="overlay-effect">
                            <a href="#">
                                <img src="{{ asset('theme/images/3_1.jpg') }}" alt="">
                                <span class="class-date">Jun 11 <span>2016</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="single-blog-text">
                        <h4><a href="blog-details.html">Swimming Lessons at the New Pool</a></h4>
                        <div class="blog-date">
                            <span><i class="fa fa-calendar"></i>27 Jan, 2014</span>
                        </div>
                        <p>The concept of the activity room is about 'Learning', through play, in a totally different
                            environment. The perfect class for your child with the best.</p>
                        <a href="blog-details.html">Read more.</a>
                    </div>
                </div>
                <div class="single-blog-item overlay-hover">
                    <div class="single-blog-image">
                        <div class="overlay-effect">
                            <a href="#">
                                <img src="{{ asset('theme/images/1_1.jpg') }}" alt="">
                                <span class="class-date">Sep 19 <span>2016</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="single-blog-text">
                        <h4><a href="blog-details.html">Play is Our Brain’s Favorite Way of</a></h4>
                        <div class="blog-date">
                            <span><i class="fa fa-calendar"></i>20 Feb, 2015</span>
                        </div>
                        <p>The concept of the activity room is about 'Learning', through play, in a totally different
                            environment. The perfect class for your child with the best.</p>
                        <a href="blog-details.html">Read more.</a>
                    </div>
                </div>
                <div class="single-blog-item overlay-hover">
                    <div class="single-blog-image">
                        <div class="overlay-effect">
                            <a href="#">
                                <img src="{{ asset('theme/images/2_1.jpg') }}" alt="">
                                <span class="class-date">Feb 09 <span>2016</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="single-blog-text">
                        <h4><a href="blog-details.html">New Friends Everyday at Kiddie</a></h4>
                        <div class="blog-date">
                            <span><i class="fa fa-calendar"></i>08 Apr, 2016</span>
                        </div>
                        <p>The concept of the activity room is about 'Learning', through play, in a totally different
                            environment. The perfect class for your child with the best.</p>
                        <a href="blog-details.html">Read more.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Blog Area-->
    <!--Testimonial Small Carousel Start-->
    <div class="testimonial-small-carousel section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-wrapper">
                        <div class="section-title">
                            <h3>Our Testimonials</h3>
                            <p>How real people said about Education TechEdu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-12 ml-auto mr-auto">
                    <div class="testimonial-image-text-wrapper">
                        <div class="testimonial-small-image-slider text-center">
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/14.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/15.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/15.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/2_2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/15.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/15.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/4.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/15.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="sin-testiImage">
                                <div class="teacher-image-carousel">
                                    <img src="{{ asset('theme/images/2_2.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-small-text-slider text-center">
                            <div class="sin-testiText">
                                <h2>Julia</h2>
                                <span>Sience Director</span>
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh,
                                    vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor
                                    gravida commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ”</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Katthi</h2>
                                <span>Language Lecturer</span>
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh,
                                    vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor
                                    gravida commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ”</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Graves</h2>
                                <span>Math Professor</span>
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh,
                                    vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor
                                    gravida commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ”</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Flora</h2>
                                <span>Art Director</span>
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh,
                                    vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor
                                    gravida commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ”</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Blossom</h2>
                                <span>Assistant Manager</span>
                                <p>“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lacus nibh,
                                    vulputate eu diam non, sodales tincidunt ligula. Pellentesque molestie nisl in dolor
                                    gravida commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Testimonial Small Carousel-->
    <!--Google Map Area Start -->
    
     <div class="wg-map mt-4 d-flex">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3589.7743539777866!2d83.10284967547977!3d25.87690300383502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991c787cb36d76d%3A0x6a63ce5d5dc4a92!2sStepping%20Stone%20Public%20School%20Mehnagar!5e0!3m2!1sen!2sin!4v1759579469473!5m2!1sen!2sin"
            width="100%" height="461" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--End of Google Map Area-->
    <!--Footer Area Start-->
    <div class="footer-area mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-info-container text-center section-padding">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset('theme/images/footer-logo.png') }}" alt=""></a>
                        </div>
                        <div class="footer-info">
                            <span><i class="fa fa-map-marker"></i>1st Floor New World Tower Miami</span>
                            <span><i class="fa fa-envelope"></i>admin@power-boosts.com</span>
                            <span><i class="fa fa-phone"></i>(801) 2345 - 6789</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget-container section-padding">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="single-footer-widget">
                            <h4>Our School</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Become a Teacher</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="single-footer-widget">
                            <h4>Links</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Courses</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4">
                        <div class="single-footer-widget">
                            <h4>Support</h4>
                            <ul class="footer-widget-list">
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Forums</a></li>
                                <li><a href="#">Language Packs</a></li>
                                <li><a href="#">Release Status</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="subscribe-container">
                            <p>Subscribe now and receive weekly newsletter with educational materials, new courses,
                                interesting posts, popular books and much more!</p>
                            <form action="#">
                                <div class="subscribe-form">
                                    <input type="email" name="email" placeholder="Your email here">
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-container">
                        <div class="row">
                            <div class="col-lg-6">
                                <span>� 2021 <a href="#">Power-Boosts</a>. All rights reserved</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Footer Area-->


   
    @include('common.scripts')

</body>

</html>