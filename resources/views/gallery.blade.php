@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Gallery</h1>
                <div class="mx-auto w-75">
                    <p>Quote about memories or something about pictures.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- VIDEO -->
    <div class="video-container">
        <video autoplay loop="true">
            <source type="video/mp4" src="videos/video.mp4">
        </video>
    </div>

    <a href="#next-section" class="smoothscroll scroll-button">
        <span class=" icon-keyboard_arrow_down"></span>
    </a>

</section>

<section class="site-section" id="next-section">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_1.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_2.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_3.jpg">
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_4.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_5.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_6.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_6.jpg">
                </a>
            </div>

            <div class="col-md-6 col-lg-6 item">
                <a href="images/sq_img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_11.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-6 item">
                <a href="images/sq_img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_2.jpg">
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_7.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_7.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_8.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_8.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_9.jpg">
                </a>
            </div>

            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_10.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_11.jpg">
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item">
                <a href="images/sq_img_12.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="images/sq_img_12.jpg">
                </a>
            </div>

        </div>
    </div>
</section>

@endsection
