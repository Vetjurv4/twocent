@extends('layouts.app')

@section('content')
<!-- HOME -->
<section class="home-section section-hero overlay slanted" id="home-section">

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 text-center">
                <h1>About Us</h1>
                <div class="mx-auto w-75">
                    <p>We are still thinking of a smart something to add here.</p>
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

<!-- ABOUT US -->
<section class="site-section about-us-section" >
    <div class="container">

        <div class="row mb-5 pt-0 site-section">
            <div class="col-md-6 align-self-center">
                <h3 class="section-title-sub text-primary">App with no name</h3>
                <h2 class="section-title mb-4">All about us</h2>
                <p>
                    We understand your desparation for knowledge but unfortunately everything will be available
                    to you once you have logged in. Click  'JOIN US' button from our <a href="/">hompage</a> and get started right away.
                </p>
            </div>
            <div class="col-md-5 ml-auto img-overlap">
                <div class="img-1"><img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow"></div>
                <div class="img-2"><img src="images/sq_img_10.jpg" alt="Image" class="img-fluid img-shadow"></div>
            </div>
        </div>

    </div>
</section>

  <!-- Mission/Vision/Objective--> 
<section class="site-section services-section bg-light block__62849" id="next-section">
      <div class="container">
     
        <div class="row">
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">

            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-tools d-block"></span></span>
              <h3>Our Mission</h3>
              <p>is to give everyone a voice.</p>
            </a>

          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
            
            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-lightbulb d-block"></span></span>
              <h3>Our Values</h3>
              <p>Freedom of expression, opportunity, information and freedom to belong</p>
            </a>            

          </div>
          <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-5">
            
            <a href="service-single.html" class="block__16443 text-center d-block">
              <span class="custom-icon mx-auto"><span class="icon-line-laptop d-block"></span></span>
              <h3>Objectives</h3>
              <p>We aim to help people get information they need instantly.</p>
            </a>            

          </div>
        </div>
      </div>
    </section>


<!-- FaQs-->
<section class="site-section" id="accordion">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h3 class="section-title-sub text-primary">FAQ</h3>
            <h2 class="section-title mb-3">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class="row accordion block__76208">
          <div class="col-lg-6">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="true" aria-controls="collapseFive">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseFive" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>We don't have it yet.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false" aria-controls="collapseSix">Do I have to pay to use this app<span class="icon"></span></a>
              </h3>
              <div id="collapseSix" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>No we just want your presence you can use your cash for something else</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false" aria-controls="collapseSeven">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Ofcourse your peers must know the genius sharing the content</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false" aria-controls="collapseEight">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseEight" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Click "contact" link or scroll down till the end of the page to contact suppport service</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>

        </div>
      </div>
    </section>

@endsection
