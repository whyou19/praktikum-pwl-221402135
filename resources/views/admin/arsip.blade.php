@extends ('admin.layout' )
@section ( 'content' )
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Album</h1>
</div>
<div>
<section id="alb" style="background-color: rgb(255, 255, 198)">
      <div class="container text-center mb-4">
        <div class="row mb-2">
          <h2>Album Saya</h2>
        </div>
        <div class="container">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/MYALBUM/IMG20210607131431.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/MYALBUM/IMG20220219151025.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/MYALBUM/IMG20220427140747.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/MYALBUM/IMG20220601120642.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/MYALBUM/IMG20221020103442.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/MYALBUM/IMG_20221022_134350.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffff" fill-opacity="1" d="M0,256L0,128L62.6,128L62.6,64L125.2,64L125.2,64L187.8,64L187.8,256L250.4,256L250.4,64L313,64L313,256L375.7,256L375.7,64L438.3,64L438.3,256L500.9,256L500.9,128L563.5,128L563.5,288L626.1,288L626.1,64L688.7,64L688.7,256L751.3,256L751.3,32L813.9,32L813.9,128L876.5,128L876.5,96L939.1,96L939.1,64L1001.7,64L1001.7,0L1064.3,0L1064.3,96L1127,96L1127,64L1189.6,64L1189.6,32L1252.2,32L1252.2,0L1314.8,0L1314.8,192L1377.4,192L1377.4,64L1440,64L1440,320L1377.4,320L1377.4,320L1314.8,320L1314.8,320L1252.2,320L1252.2,320L1189.6,320L1189.6,320L1127,320L1127,320L1064.3,320L1064.3,320L1001.7,320L1001.7,320L939.1,320L939.1,320L876.5,320L876.5,320L813.9,320L813.9,320L751.3,320L751.3,320L688.7,320L688.7,320L626.1,320L626.1,320L563.5,320L563.5,320L500.9,320L500.9,320L438.3,320L438.3,320L375.7,320L375.7,320L313,320L313,320L250.4,320L250.4,320L187.8,320L187.8,320L125.2,320L125.2,320L62.6,320L62.6,320L0,320L0,320Z"></path>
      </svg>
    </section>
</div>
</div>
<!-- /.container-f')}}luid -->

@endsection