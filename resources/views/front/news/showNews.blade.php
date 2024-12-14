<!DOCTYPE html>
<html lang="en">

    <!-- Include head partial -->
    @include('front.partials.head')

    <body>
        <!-- Loading spinner -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner"></div>
        </div>

        <!-- Navbar section -->
        <div class="container-fluid position-relative p-0">
            @include('front.partials.navbar')

            <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                <div class="row py-5">
                    <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-4 text-white animated zoomIn">Details</h1>
                        <a href="/" class="h5 text-white">Home</a>
                        <i class="far fa-circle text-white px-2"></i>
                        <a href="/news" class="h5 text-white">Details</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Full Screen Search section -->
        @include('front.partials.screen_search')

        <!-- News Section

        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="section-title position-relative pb-3 mb-5">
                            @if($news instanceof \App\Models\Workshop)
                            <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Workshops</h5>
                            @elseif($news instanceof \App\Models\Project)
                            <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Research Projects</h5>
                            @elseif($news instanceof \App\Models\Internship)
                            <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Internships</h5>
                            @elseif($news instanceof \App\Models\Program)
                            <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Programs</h5>
                            @elseif($news instanceof \App\Models\Fablab)
                            <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Achievements</h5>
                        @endif

                            <h1 class="mb-0">{{ $news->title }}</h1>
                            <div class="position-relative h-100">
                        <img class="w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/IMG_0326.JPG') }}" style="object-fit: cover;">
                    </div>

                        </div>

                        <div><h5>Description</h5>
                        <p class="mb-4">{{ $news->description }}</p><div class="col-lg-5">


            </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>-->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    @if($news instanceof \App\Models\Workshop)
                        <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Workshops</h5>
                    @elseif($news instanceof \App\Models\Project)
                        <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Research Projects</h5>
                    @elseif($news instanceof \App\Models\Internship)
                        <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Internships</h5>
                    @elseif($news instanceof \App\Models\Program)
                        <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Programs</h5>
                    @elseif($news instanceof \App\Models\Fablab)
                        <h5 class="fw-bold text-primary text-uppercase" id="latest_news">Achievements</h5>
                    @endif

                    <h1 class="mb-0">{{ $news->title }}</h1>
                </div>

                <div class="mb-4">
                    <h5>Description</h5>
                    <p>{{ $news->description }}</p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="position-relative h-100">
                    <img class="w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('img/IMG_0326.JPG') }}" style="object-fit: cover;">
                </div>
            </div>
            </div>
  <!-- Additional Information -->

                    @if($news->date_start)
                    <div class="mb-4">
                        <h5>Start Date</h5>
                        <p>{{ $news->date_start }}</p>
                    </div>
                    @endif

                    @if($news->date_end)
                    <div class="mb-4">
                        <h5>End Date</h5>
                        <p>{{ $news->date_end }}</p>
                    </div>
                    @endif

                    @if($news->company)
                    <div class="mb-4">
                        <h5>Company</h5>
                        <p>{{ $news->company }}</p>
                    </div>
                    @endif

                    <div class="mb-4">
                    <h5>Partner</h5>
                     <p>{{ $news->partner_name ?? 'Unknown' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- Footer Section -->
    @include('front.partials.footer')

    <!--Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!--Include Scripts -->
    @include('front.partials.scripts')


    </body>

</html>
