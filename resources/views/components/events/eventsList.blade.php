<div class="class-area section-padding class-column">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Our Events</h3>
                        <p>Catch up with all our latest celebrations and happenings!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center ">
            <div class="col-md-12 text-end">
                <a href="{{ route('events.all') }}" class="btn btn-outline-info">View All Events</a>
            </div>
        </div>

        <div class="events-section">
            <div class="container py-5">
                <div class="row justify-content-center g-4">
                    @foreach($events as $event)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-class shadow-sm">
                                <div class="single-class-image position-relative">
                                    <a href="#" title="{{ $event->title }}">
                                        <img src="{{ $event->main_image }}" alt="{{ $event->title }}"
                                            class="img-fluid rounded-top">
                                        <span class="class-date" aria-hidden="true">
                                            {{ \Carbon\Carbon::parse($event->event_date)->format('M d') }}
                                            <span>{{ \Carbon\Carbon::parse($event->event_date)->format('Y') }}</span>
                                        </span>
                                    </a>
                                </div>

                                <div class="single-class-text p-3 bg-white rounded-bottom">
                                    <div class="class-des mb-3">
                                        <!-- Title (server-side limited + clamp) -->
                                        <h4 class="event-title fw-semibold mb-2" title="{{ $event->title }}">
                                            {{ \Illuminate\Support\Str::limit($event->title, 50) }}
                                        </h4>

                                        <!-- Description (server-side limited + clamp) -->
                                        <p class="event-desc text-muted mb-0 clamp-3" title="{{ $event->description }}">
                                            {{ \Illuminate\Support\Str::limit($event->description, 140) }}
                                        </p>
                                    </div>

                                    <!-- Bottom: Occasion + Classes (split space, both clamped) -->
                                    <div class="class-schedule border-top pt-3 d-flex gap-2">
                                        <div class="w-50">
                                            <span class="d-block small fw-semibold text-primary occasion clamp-1"
                                                title="{{ $event->occasion }}">
                                                OCCASION: {{ \Illuminate\Support\Str::limit($event->occasion ?? '—', 40) }}
                                            </span>
                                        </div>

                                        <div class="w-50 text-end">
                                            <span class="d-block small text-secondary classes clamp-1"
                                                title="{{ $event->classes_involved ?? '—' }}">
                                                CLASSES:
                                                {{ \Illuminate\Support\Str::limit($event->classes_involved ?? '—', 40) }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination links -->
                <div class="mt-4 d-flex justify-content-center">
                    {{ $events->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>

        <style>
            /* Base card */
            .single-class {
                border-radius: 12px;
                overflow: hidden;
                background: #fff;
                transition: transform 0.35s ease, box-shadow 0.35s ease;
                cursor: pointer;
            }

            .single-class:hover {
                transform: translateY(-8px);
                box-shadow: 0 10px 30px rgba(16, 24, 40, 0.08);
            }

            /* Image */
            .single-class-image img {
                width: 100%;
                height: 230px;
                /* fixed height keeps cards uniform */
                object-fit: cover;
                transition: transform 0.4s ease;
                display: block;
            }

            .single-class:hover img {
                transform: scale(1.03);
            }

            /* Date badge - semi-transparent */
            .class-date {
                position: absolute;
                top: 14px;
                left: 14px;
                background: rgba(27, 180, 185, 0.86);
                /* semi-transparent */
                color: #fff;
                font-weight: 600;
                font-size: 14px;
                padding: 6px 10px;
                border-radius: 6px;
                text-align: center;
                box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
            }

            .class-date span {
                display: block;
                font-size: 12px;
                font-weight: 400;
            }

            /* Text area */
            .single-class-text {
                border-top: 1px solid #f0f0f0;
                font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
                padding-bottom: 14px;
            }

            .event-title {
                font-size: 1.02rem;
                line-height: 1.3;
                margin-bottom: 6px;
                color: #111827;
            }

            .event-title a {
                color: inherit;
                text-decoration: none;
            }

            .event-desc {
                font-size: 0.95rem;
                line-height: 1.45;
                color: #6b7280;
                /* muted */
                margin: 0;
            }

            /* Bottom schedule area (Occasion + Classes) */
            .class-schedule {
                background: #fbfcfd;
                border-radius: 8px;
                padding: 8px 10px;
                margin-top: 10px;
                align-items: center;
                min-height: 54px;
                /* reserve space to avoid shifting */
            }

            /* Occurrence & classes text */
            .class-schedule .occasion,
            .class-schedule .classes {
                display: block;
                font-size: 0.86rem;
                line-height: 1.1;
                white-space: normal;
                color: #374151;
            }

            .class-schedule .occasion {
                color: #1bb4b9;
                font-weight: 600;
            }

            .class-schedule .classes {
                color: #1bb4b9;
                font-weight: 500;
            }

            /* Text truncation utility using line-clamp */
            .clamp-1 {
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .clamp-2 {
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .clamp-3 {
                display: -webkit-box;
                -webkit-line-clamp: 3;
                -webkit-box-orient: vertical;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            /* make sure description uses clamp-3 */
            .event-desc.clamp-3 {}

            /* Responsive tweaks */
            @media (max-width: 767.98px) {
                .single-class-image img {
                    height: 200px;
                }

                .class-schedule {
                    padding: 8px;
                    min-height: 50px;
                }

                .event-title {
                    font-size: 1rem;
                }

                .event-desc {
                    font-size: 0.92rem;
                }
            }

            @media (max-width: 495px) {
                .single-class-image img {
                    height: 180px;
                }

                .class-schedule {
                    min-height: 48px;
                }
            }
        </style>


    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];

        $.ajax({
            url: "/?page=" + page,
            type: "GET",
            beforeSend: function () {
                $('.events-section').css('opacity', '0.5');
            },
            success: function (data) {
                $('.events-section').html(data);
                $('.events-section').css('opacity', '1');
                $('html, body').animate({
                    scrollTop: $(".events-section").offset().top - 100
                }, 300);
            },
            error: function () {
                alert('Something went wrong!');
            }
        });
    });
</script>