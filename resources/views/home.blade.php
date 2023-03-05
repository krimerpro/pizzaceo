@extends('layouts.default')
@section('content')

<section class="banner" id="top">
  <div class="banner-carousel owl-carousel">

    <div class="banner-slide-2">
      <div class="container">
        <div class="banner-box">
          <div class="banner-text">
            <div class="banner-center">
              <h2 class="banner-headding">PIZZA <span>CEO</span></h2>
              <p class="banner-sub-hed">PIZZA COULD BE A CEO</p>
              <p class="banner-sub-hed">LOW TAX | BURN LP</p>
            </div>
          </div>
          <div class="banner-images">
            <div class="all-img-banner">
              <img src="{{ asset('images/logo.png') }}" alt="banner" class="pizza-img">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="banner-slide-3">
      <div class="container">
        <div class="banner-box">
          <div class="banner-text">
            <div class="banner-center">
              <h2 class="banner-headding">PIZZA <span>CEO</span></h2>
              <p class="banner-sub-hed">PIZZA COULD BE A CEO</p>
              <p class="banner-sub-hed">LOW TAX | BURN LP</p>
            </div>
          </div>
          <div class="banner-images">
            <div class="all-img-banner">
              <img src="{{ asset('images/logo.png') }}" alt="banner" class="pizza-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="order-section ptb">
  <div class="container">
    <div class="row">
      <div class="order-top"><img src="https://themes.templatescoder.com/pizzon/html/demo/1-1/images/order-top.png" alt="layer"></div>
      <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf wow fadeInUp">
        <img src="https://themes.templatescoder.com/pizzon/html/demo/1-1/images/order-1.svg" alt="order" class="order-img">
        <h2 class="order-title text-uppercase">2%</h2>
        <p class="order-des" style="margin-bottom:30px">BUY & SELL TAX</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf wow fadeInUp">
        <img src="https://themes.templatescoder.com/pizzon/html/demo/1-1/images/order-2.svg" alt="delivery" class="order-img">
        <h2 class="order-title text-uppercase">4% MAX</h2>
        <p class="order-des" style="margin-bottom:30px">4% MAX WALLET! 4% MAX TX!</p>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf wow fadeInUp">
        <img src="https://themes.templatescoder.com/pizzon/html/demo/1-1/images/order-3.svg" alt="delicious" class="order-img">
        <h2 class="order-title text-uppercase">1 BNB</h2>
        <p class="order-des" style="margin-bottom:30px">INITIAL LIQUIDITY TO BURN</p>
      </div>
      <div class="order-bottom"><img src="https://themes.templatescoder.com/pizzon/html/demo/1-1/images/order-bottom.png" alt="layer"></div>
    </div>
  </div>
</section>

<section class="speciality ptb pt-140" id="roadmap">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="headding-part text-center pb-50">
          <p class="headding-sub wow fadeInUp">ROADMAP</p>
          <h2 class="headding-title text-uppercase fw-bold wow fadeInUp">marketing plan for 2023</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 text-center speciality-box wow fadeInUp">
        <div class="row">
          <a href="#">
            <img src="{{ asset('images/roadmap.jpeg') }}" alt="speciality" class="spec-image"></a>
          </div>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="about-pizzon relative ptb" id="about">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft">
        <div class="max-w-390">
          <div class="headding-part">
            <p class="headding-sub">PIZZA CEO</p>
            <h2 class="headding-title text-uppercase fw-bold">about us</h2>
          </div>
          <p class="online-des">The best CEO token on BSC. We will bring the new hype of food token with CEO hype!</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInRight">
        <div class="about-pizzon-img">
          <img src="{{ asset('images/logo.png') }}" alt="about" class="pizzon-ab">
        </div>
      </div>
    </div>
  </div>
</section>

<div class="top-scrolling">
  <a href="#top" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
@stop
