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