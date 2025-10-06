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

    {{-- <div class="class-area section-padding class-column">
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
                                <img src="{{ asset(" theme/images/1.jpg") }}" alt="">
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
    </div> --}}

    {{-- <script>
        $(document).on('click', '#home-events-container .pagination a', function (e) {
            e.preventDefault();
            const pageUrl = $(this).attr('href');

            $.ajax({
                url: pageUrl,
                type: 'GET',
                beforeSend: function () {
                    $('#home-events-container').css('opacity', '0.6');
                },
                success: function (data) {
                    $('#home-events-container').html(data);
                    $('html, body').animate({
                        scrollTop: $("#home-events-section").offset().top - 100
                    }, 400);
                },
                complete: function () {
                    $('#home-events-container').css('opacity', '1');
                },
                error: function () {
                    alert('Error loading events.');
                }
            });
        });
    </script> --}}

    <!--End of Class Area-->
    
    
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
    @include('common.footer')



    @include('common.scripts')

</body>

</html>