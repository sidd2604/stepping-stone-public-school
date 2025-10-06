<header class="header-three">
    {{-- @include('components.header.authentication') --}}
    <!--Logo Mainmenu Start-->
    <div class="header-logo-menu sticker">
        <div class="container-fluid mx-1">
            <div class="logo-menu-bg">
                <div class="row">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('theme/images/logo.png') }}" alt="TECHEDU"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="mainmenu-area">
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="current"><a href="index.html">Home</a></li>
                                        <li><a href="about.html">Principal's Desk</a></li>
                                        <li><a href="about.html">Our School <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">About Us</a></li>
                                                <li><a href="#">Rules & Regulations</a></li>
                                                <li><a href="#">House System</a></li>
                                                <li><a href="#">Regularity-Record</a></li>
                                                <li><a href="#">School Uniform</a></li>
                                                <li><a href="#">Assessment & Evaluation</a></li>
                                                <li><a href="#">Promotion Criteria</a></li>
                                                <li><a href="#">Achievement</a></li>
                                                <li><a href="#">Withdrawal & Dismissal</a></li>
                                                <li><a href="#">Syllabus</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">Founder and Trustee</a></li>
                                        <li><a href="about.html">Circulars & Fees</a></li>
                                        <li><a href="about.html">Admission 25-26</a></li>

                                        

                                        {{-- <li><a href="class-grid.html">Classes <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="class-grid.html">Classes Grid</a></li>
                                                <li><a href="class-list.html">Classes List</a></li>
                                                <li><a href="class-details.html">Class Details</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="teacher.html">Teachers<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="teacher-info.html">Teachers Info</a></li>
                                            </ul>
                                        </li> --}}
                                        <li><a href="gallery.html">Gallery <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Photo Gallery</a></li>
                                                <li><a href="#">Video Gallery</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="about.html">Career</a></li>
                                        {{-- <li><a href="index.html">Pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="blog.html">Blog Page</a></li>
                                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                                <li><a href="class-grid.html">Class Grid</a></li>
                                                <li><a href="class-list.html">Class List</a></li>
                                                <li><a href="class-details.html">Class Details</a></li>
                                                <li><a href="teacher.html">Teachers Page</a></li>
                                                <li><a href="teacher-info.html">Teachers Info</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="blog.html">Blog<i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> --}}
                                        {{-- <li><a href="contact.html">Contact</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                            {{-- <ul class="header-search">
                                <li class="search-menu">
                                    <i id="toggle-search" class="fa fa-search"></i>
                                </li>
                            </ul>
                            <!--Search Form-->
                            <div class="search">
                                <div class="search-form">
                                    <form id="search-form" action="#">
                                        <input type="search" placeholder="Search here..." name="search">
                                        <button type="submit">
                                            <span><i class="fa fa-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--End of Search Form--> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Logo Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="about.html">Principal's Desk</a></li>
                                <li><a href="#">Our School</a>
                                    <ul>
                                        <li><a href="class-grid.html">About Us</a></li>
                                        <li><a href="class-list.html">Rules & Regulations</a></li>
                                        <li><a href="class-details.html">House System</a></li>
                                        <li><a href="class-details.html">Regularity-Record</a></li>
                                        <li><a href="class-details.html">School Uniform</a></li>
                                        <li><a href="class-details.html">Assessment & Evaluation</a></li>
                                        <li><a href="class-details.html">Promotion Criteria</a></li>
                                        <li><a href="class-details.html">Achievement</a></li>
                                        <li><a href="class-details.html">Withdrawal & Dismissal</a></li>
                                        <li><a href="class-details.html">Syllabus</a></li>
                                    </ul>
                                </li>
                                <li><a href="teacher.html">Founder & Trustee</a></li>
                                <li><a href="teacher.html">Circular & Fees</a></li>
                                <li><a href="contact.html">Admission 25-26</a></li>
                                <li><a href="gallery.html">Gallery</a>
                                    <ul>
                                        <li><a href="blog-details.html">Photo Gallery</a></li>
                                        <li><a href="blog-details.html">Video Gallery</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Career</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->
</header>