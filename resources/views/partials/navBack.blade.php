
  
    <div class="sidebar fixed-top">

      {{-- <h1 class="logo"><a href={{ route ('') }}> Bikin</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <ul>
          <li>
            <a href={{ route('dashboard') }} class="btn btn succes text-white "><i class='bx bxs-dashboard bx-rotate-180'></i> Dashboard </a>
          </li>
          <li>
            <a class="nav-link scrollto" href={{ route("titres.index") }}><i class='bx bxs-magic-wand bx-tada bx-flip-horizontal' ></i>Titre</a>
          </li>
          <li>
            <a class="nav-link scrollto" href={{ route("abouts.index") }}><i class='bx bxs-book-reader'></i>About</a>
          </li>
          <li>
            <a class="nav-link scrollto active" href={{ route("heroes.index") }}><i class='bx bxs-home-circle bx-tada' ></i>Hero</a>
          </li>
          <li>
            <a class="nav-link scrollto" href={{ route("informations.index") }}><i class='bx bxs-pointer bx-tada' ></i>Fact</a>
          </li>
          <li>
            <a class="nav-link scrollto " href={{ route("portfolios.index") }}><i class='bx bx-images bx-fade-left' ></i>Portfolio</a>
          </li>
          <li>
            <a class="nav-link scrollto" {{ route("services.index") }}><i class='bx bxs-magic-wand bx-tada bx-flip-horizontal' ></i>Services</a>
          </li>
          <li>
            <a class="nav-link scrollto" href={{ route("contacts.index") }}><i class='bx bxs-phone bx-tada'></i>Contact</a>
          </li>
          <li>
            <a class="nav-link scrollto" href={{ route("testimonials.index") }} ><i class='bx bx-heart-square bx-fade-down bx-flip-horizontal' ></i>Testimonial</a>
          </li>
          <li><a class="getstarted scrollto" href={{ route('home') }}>Get Started</a></li>
          
         
        </ul>
   
  

    </div>
