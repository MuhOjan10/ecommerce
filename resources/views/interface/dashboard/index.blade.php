<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bacrit Company</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link href="{{asset('css/bacrit.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons/icomoon/styles.min.css')}} " rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/owl.carousel.min.css')}} " rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/owl.theme.default.min.css')}} " rel="stylesheet" type="text/css">
    <!-- JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-blue">
            <h1><strong>Bacrit</strong> Company</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid p-0 slider">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/slider/slider1.jpg')}}" alt="First slide"
                        style="height: 420px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Healty Food</h2>
                        <p>Sebenarnya apa sih makanan sehat atau healthy food ini? Makanan sehat di sini mengandung
                            pengertian makanan yang memiliki kandungan gizi seimbang yang dibutuhkan oleh tubuh. Menu
                            makanan sehat ini biasanya harus ada unsure gizi seperti karbohindrat, protein, mineral,
                            vitamin dan sedikit lemak tak jenuh.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/slider/slider3.jpg')}}" alt="Second slide"
                        style="height: 420px;">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Junk Food Woood</h2>
                        <p>rasanya lezat karena memang mengandung banyak lemak, gula dan garam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid product">
        @foreach($category as $key => $value)
        <div class="row p-2">
            <div class="col-md-12">
                <h1><strong>{{$value->name}}</strong></h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Et, at! Ipsa itaque nesciunt, soluta quia voluptate harum
                    incidunt ullam. Tempora nisi quis perspiciatis, dolor
                    vitae impedit. Earum quasi cumque eos?</p>
            </div>
            <div class="col-md-12 mt-2">
                <div class="owl-carousel owl-theme">
                    <div class="card shadow p-3 mb-5 bg-white rounded">
                        <div class="item">
                            <img src="{{asset('images/product/bayam.jpg')}}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h4>Sayur Bayam</h4>
                            <p class="card-text">200gram/pack</p>
                            <p class="card-text">Rp. 7.000</p>
                            <a href="" class="btn btn-sm btn-block btn-outline-success">Beli Barang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 5000
    })

</script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoHeight: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });
    owl.on('mousewheel', '.owl-stage', function (e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });

</script>

</html>
