
@extends('layouts.appBack')
@section('content')
<section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
         
          <div class="content">
            <h3>Voluptatem dignissimos provident quasi</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
            <i class='bx bx-comment-edit bx-tada' ></i>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            
        </div>
      </div>

    </div>
  </section><!-- End About Section -->







    <div class="d-flex align-items-center justify-content-center mb-5">
        <h1 class="my-0 mx-2">abouts</h1>
    </div>
    <table class="table text-dark">
        <thead>
            <tr>
                <th scope="col">#</th>

                <th scope="col">icone</th>
                <th scope="col">st</th>
                <th scope="col">descripition</th> 
                <th scope="col">Btn texte</th>

         
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abouts as $about)
                <tr>
                    <th scope="row">{{ $about->id }}</th>
                    <td>{{ $about->st}}</td>
                    <td>{{ $about->icone}}</td>
                    <td>{{ $about->descripition }}</td>
                    <td>{{ $about->btnTxt }}</td>
                 

                    <td>
                        <div class="d-flex">
                            <a class="btn btn-warning text-dark mx-2" href="/abouts/{{ $about->id }}"><i class="fas fa-eye"></i></a>
                            @can('update', $about)
                            <a class="btn btn-success text-dark mx-2" href="/abouts/{{ $about->id }}/edit"><i class="fas fa-edit"></i></a> 
                            @endcan
                            
                               
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $abouts->links() }}
    </div>

@endsection
