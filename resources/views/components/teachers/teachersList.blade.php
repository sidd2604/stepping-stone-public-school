{{-- <div class="teachers-column-carousel-area section-padding">
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
</div> --}}


{{-- <div class="teachers-column-carousel-area section-padding">
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
            @foreach($teachers as $teacher)
            <div class="single-teachers-column text-center">
                <div class="teachers-image-column">
                    <a href="#">
                        <img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}">
                        <span class="image-hover">
                            <span><i class="fa fa-edit"></i>View Profile</span>
                        </span>
                    </a>
                </div>
                <div class="teacher-column-carousel-text">
                    <h4>{{ $teacher->name }}</h4>
                    <span>{{ $teacher->designation }}</span>
                    <p>{{ $teacher->brief_details }}</p>
                    <div class="social-links">
                        @if($teacher->whatsapp)
                        <a href="{{ $teacher->whatsapp }}"><i class="fa fa-whatsapp"></i></a>
                        @endif
                        @if($teacher->gmail)
                        <a href="{{ $teacher->gmail }}"><i class="fa fa-envelope"></i></a>
                        @endif
                        @if($teacher->twitter)
                        <a href="{{ $teacher->twitter }}"><i class="fa fa-twitter"></i></a>
                        @endif
                        @if($teacher->linkedin)
                        <a href="{{ $teacher->linkedin }}"><i class="fa fa-linkedin"></i></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div> --}}

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
        <div class="row align-items-center mb-4">
            <div class="col-md-12 text-end">
                <a href="{{ route('events.all') }}" class="btn btn-outline-info">View All</a>
            </div>
        </div>
        {{-- Carousel container --}}
        <div id="teachers-carousel" class="teachers-column-carousel carousel-style-one owl-carousel">
            @foreach($teachers as $teacher)
                <div class="single-teachers-column text-center">
                    <div class="teachers-image-column">
                        <a href="#">
                            <img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}">
                            <span class="image-hover">
                                <span><i class="fa fa-edit"></i>View Profile</span>
                            </span>
                        </a>
                    </div>
                    <div class="teacher-column-carousel-text">
                        <h4>{{ $teacher->name }}</h4>
                        <span>{{ $teacher->designation }}</span>
                        <p>{{ $teacher->brief_details }}</p>
                        <div class="social-links">
                            @if($teacher->whatsapp)
                                <a href="{{ $teacher->whatsapp }}"><i class="fa fa-whatsapp"></i></a>
                            @endif
                            @if($teacher->gmail)
                                <a href="{{ $teacher->gmail }}"><i class="fa fa-envelope"></i></a>
                            @endif
                            @if($teacher->twitter)
                                <a href="{{ $teacher->twitter }}"><i class="fa fa-twitter"></i></a>
                            @endif
                            @if($teacher->linkedin)
                                <a href="{{ $teacher->linkedin }}"><i class="fa fa-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!--End of Teachers Column Carousel-->

<script>
    $(document).ready(function () {
        const $carousel = $('#teachers-carousel');
        const itemCount = $carousel.find('.single-teachers-column').length;

        // Always destroy any pre-initialized Owl (prevents duplicates)
        if ($carousel.hasClass('owl-loaded')) {
            $carousel.trigger('destroy.owl.carousel');
            $carousel.removeClass('owl-loaded');
            $carousel.find('.owl-stage-outer').children().unwrap();
        }

        // Condition 1: 4 or fewer → static grid (no carousel)
        if (itemCount <= 4) {
            $carousel.addClass('no-carousel');
        }
        // Condition 2: More than 4 → initialize carousel normally
        else {
            $carousel.owlCarousel({
                items: 4,
                margin: 30,
                loop: true, // prevent duplication
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 4 }
                }
            });
        }
    });
</script>


<style>
    .no-carousel {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .no-carousel .single-teachers-column {
        flex: 0 0 calc(25% - 30px);
    }

    @media (max-width: 992px) {
        .no-carousel .single-teachers-column {
            flex: 0 0 calc(50% - 30px);
        }
    }

    @media (max-width: 600px) {
        .no-carousel .single-teachers-column {
            flex: 0 0 100%;
        }
    }
</style>