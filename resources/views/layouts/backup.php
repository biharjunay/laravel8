<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    {{-- <link rel="stylesheet" href="css/bootstrap.min.css" /> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@800&family=Poppins&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container">
        <a href="" class="navbar-brand">
          <img src="img/logo1.png" width="100" alt="" />
        </a>
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNav" style>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#home" class="nav-link active" aria-current="page"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#destination" class="nav-link">Destination</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="jumbotron text-center" id="home">
      <h1 class="display-1 text-light fw-bold">Istimewa Jogja</h1>
      <p class="lead text-light fw-bold">There are many places you can visit</p>
      <a href="#about">
        <button class="btn btn-warning px-4 ms-auto text-light">Visit</button>
      </a>
    </section>
    <section id="about">
      <div class="container">
        <div class="row text-center mt-4">
          <h1>About Istimewa Jogja</h1>
        </div>
        <div class="row text-center">
          <div class="col-lg-6 col-md-12 mt-4">
            <img
              class="img-fluid"
              src="img/wisata-jogja.width-800.format-webp.webp"
              width="600px"
              alt=""
              style="border-radius: 15px;"
            />
          </div>
          <div class="col-lg-6 col-md-12 mt-4">
            <p class="fw-normal">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit
              ipsam delectus, explicabo qui ut numquam recusandae, fugit, quo
              nisi mollitia repellat quos quisquam tenetur. Numquam, nam totam
              provident quasi reprehenderit delectus animi reiciendis cum est
              earum quo corporis ipsa culpa expedita architecto, ab veniam iste,
              ipsam voluptas. Excepturi, dicta fuga?
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="destination">
      <div class="container">
        <h1 class="text-center m-4">Destination</h1>
        <div class="row justify-content-center">
            @foreach ($wisata as $w)
            <div class="col-lg-4 col-md-6 col-12 mt-4">
                <div class="card">
                  <img src="img/1.jpg" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <p class="card-text">
                        {{ $w->nama }} 
                    </p>
                  </div>
                </div>
              </div>
            @endforeach
        </div>
      </div>
    </section>
    <section class="mt-5 text-center bg-warning" id="contact">
        <h1 class="m-3">Contact us</h1>
        <p class="">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, amet deserunt vel quasi, totam cumque at nemo labore sapiente necessitatibus numquam aut natus id velit officia iusto corrupti quia optio!</p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <span class="contact">
                    <img src="img/browser.png" alt="telepon" class="logo mx-3">
                    <h2>{{$setting->website}}</h2>
                </span>
            </div>
            <div class="col-12 col-md-6">
                <span class="contact">
                    <img src="img/telepon.png" alt="telepon" class="logo mx-3">
                    <h2>{{$setting->wa}}</h2>
                </span>
            </div>
            <div class="col-12 col-md-6">
                <span class="contact">
                    <img src="img/email-logo-png-27.png" alt="telepon" class="logo mx-3">
                    <h2>istimewa.jogja@gmail.com</h2>
                </span>
            </div>
        </div>
    </section>
    <footer class="footer bg-dark text-light text-center p-2">
      <h6>Copyright &copy; 2023 All Rights Reserved</h6>
    </footer>

    <script src="script.js"></script>
    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
