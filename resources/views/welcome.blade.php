<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


        <title>Japan's</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: image('img/tanaman-tebu-dengan-sejuta-manfaat1.jpeg');
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .header{
              height: 50px
            }



            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .carousel-inner img {
              width: auto;
              height: 500px;
            }

            .parallax {

    /*background-image: url("");
    /* Set a specific height */
    /*height: 500px;

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
        </style>
    </head>
    <body>
      <div class="container-fluid">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="page-header">
              <div class="flex-center position-ref header">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                                <a href="#">Beranda</a>
                            @endif
                        @endauth
                    </div>
                @endif
              </div>
            </div>
          </div>
      			</div>
      			<div class="carousel slide parallax" id="carousel-565110">
      				<ol class="carousel-indicators">
      					<li data-slide-to="0" data-target="#carousel-565110" class="active">
      					</li>
      					<li data-slide-to="1" data-target="#carousel-565110">
      					</li>
      					<li data-slide-to="2" data-target="#carousel-565110">
      					</li>
      				</ol>
      				<div class="carousel-inner">
      					<div class="carousel-item active">
      						<img class="d-block w-100" alt="Carousel Bootstrap First" src="img/tebu1.jpeg" />
      						<div class="carousel-caption">
      							<h2>
      								Welcome to Japan's
      							</h2>
      							<p>
      							</p>
                    Tebu merupakan bahan pokok untuk membuat Gula . dimana Gula sudah merupakan makanan pokok bagi warga di seluruh Indonesia
      						</div>
      					</div>
      					<div class="carousel-item">
      						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/tebu2.jpeg" />
      						<div class="carousel-caption">
      							<h2>
      								Japan's (Penjadwalan & Pemetaan)
      							</h2>
      							<p>
      								Sistem Japan's yang kami buat bertujuan Untuk melakukan Penjadwalan serta Pemetaan terhadap Lahan Tebu di Sekitar daerah Bondowoso
                      dan Sekitarnya dengan bekerja sama dengan Kepala Tanaman PG Pradjekan dan Petani pemilik Lahan Tebu
      							</p>
      						</div>
      					</div>
      					<div class="carousel-item">
      						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/tebu3.jpeg" />
      						<div class="carousel-caption">
      							<h2>
      								Japan's (Penjadwalan & Pemetaan)
      							</h2>
      							<p>
      								Dengan adanya sistem kami , kami berharap dapat membantu Petani dan juga Kepala Tanaman PTPN XI PG Pradjekan untuk saling berkoordinasi
      							</p>
      						</div>
      					</div>
      				</div> <a class="carousel-control-prev" href="#carousel-565110" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-565110" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
      		</div>
      	</div>
      </div>
    </body>
</html>
