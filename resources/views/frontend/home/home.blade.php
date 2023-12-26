@extends('frontend.layouts.master')
@section('content')

    <!--==========================
        POP UP START
    ===========================-->
    @include('frontend.home.section.popup')
    <!--==========================
        POP UP END
    ===========================-->

    <!--==========================
      PRODUCT MODAL VIEW START
    ===========================-->
    @include('frontend.home.section.product-popup-modal')

    <!--==========================
      PRODUCT MODAL VIEW END
    ===========================-->

    <!--============================
        BANNER PART 2 START
    ==============================-->
    @include('frontend.home.section.banner-part-2')
    <!--============================
        BANNER PART 2 END
    ==============================-->


    <!--============================
        FLASH SELL START
    ==============================-->
    @include('frontend.home.section.flash-sell')
    <!--============================
        FLASH SELL END
    ==============================-->


    <!--============================
       MONTHLY TOP PRODUCT START
    ==============================-->
    @include('frontend.home.section.monthly-top-product')
    <!--============================
       MONTHLY TOP PRODUCT END
    ==============================-->


    <!--============================
        BRAND SLIDER START
    ==============================-->
     @include('frontend.home.section.brand-slider')
    <!--============================
        BRAND SLIDER END
    ==============================-->


    <!--============================
        SINGLE BANNER START
    ==============================-->
    @include('frontend.home.section.single-banner')
    <!--============================
        SINGLE BANNER END
    ==============================-->


    <!--============================
        HOT DEALS START
    ==============================-->
    @include('frontend.home.section.hot-deals')
    <!--============================
        HOT DEALS END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
     @include('frontend.home.section.electronic-part-1')
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        ELECTRONIC PART START
    ==============================-->
    @include('frontend.home.section.electronic-part-2')
    <!--============================
        ELECTRONIC PART END
    ==============================-->


    <!--============================
        LARGE BANNER  START
    ==============================-->
    @include('frontend.home.section.large-banner')
    <!--============================
        LARGE BANNER  END
    ==============================-->


    <!--============================
        WEEKLY BEST ITEM START
    ==============================-->
    @include('frontend.home.section.weekly-best-item')
    <!--============================
        WEEKLY BEST ITEM END
    ==============================-->


    <!--============================
      HOME SERVICES START
    ==============================-->
    @include('frontend.home.section.home-services')
    <!--============================
        HOME SERVICES END
    ==============================-->


    <!--============================
        HOME BLOGS START
    ==============================-->
    @include('frontend.home.section.home-blogs')
    <!--============================
        HOME BLOGS END
    ==============================-->
@endsection
