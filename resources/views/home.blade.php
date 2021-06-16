@extends('layouts.appFront')
@section('content')

@include('partials.nav')
    @include('partials.hero')
<main id="main">
    
    @include('partials.about')
    @include('partials.information')

    @include('partials.service')
    @include('partials.portfolio')
    @include('partials.testimonial')
    @include('partials.team')
    @include('partials.contact')

</main>
    @include('partials.footer')
    
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection