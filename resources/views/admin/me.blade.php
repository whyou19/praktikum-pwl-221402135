@extends ('admin.layout' )
@section ( 'content' )
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between ">
    <h1 class="h3 mb-0 text-gray-800">Me</h1>
    
</div>

<section class="container text-center" style="padding-top: 2rem; background-color: rgb(255, 255, 198)">
      <img src="{{asset('img/MyPhoto.jpg')}}" alt="Wahyu Sianipar" width="200" class="rounded-circle img-thumbnail">
      <h1 class="display-4"><b>Wahyu J. R. Sianipar</b></h1>
      <p class="lead">College Student - Information Technology | USU
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#F8F9FA" fill-opacity="1" d="M0,0L0,0L68.6,0L68.6,64L137.1,64L137.1,32L205.7,32L205.7,256L274.3,256L274.3,288L342.9,288L342.9,128L411.4,128L411.4,160L480,160L480,0L548.6,0L548.6,160L617.1,160L617.1,128L685.7,128L685.7,256L754.3,256L754.3,96L822.9,96L822.9,192L891.4,192L891.4,288L960,288L960,192L1028.6,192L1028.6,160L1097.1,160L1097.1,96L1165.7,96L1165.7,32L1234.3,32L1234.3,64L1302.9,64L1302.9,192L1371.4,192L1371.4,32L1440,32L1440,320L1371.4,320L1371.4,320L1302.9,320L1302.9,320L1234.3,320L1234.3,320L1165.7,320L1165.7,320L1097.1,320L1097.1,320L1028.6,320L1028.6,320L960,320L960,320L891.4,320L891.4,320L822.9,320L822.9,320L754.3,320L754.3,320L685.7,320L685.7,320L617.1,320L617.1,320L548.6,320L548.6,320L480,320L480,320L411.4,320L411.4,320L342.9,320L342.9,320L274.3,320L274.3,320L205.7,320L205.7,320L137.1,320L137.1,320L68.6,320L68.6,320L0,320L0,320Z"></path>
      </svg>
    </p></section>
    <!-- Akhir Jumbotron -->


    <!-- Tentang -->
    <section>
      <div class="container text-center" style="background-color: F8F9FA">
        <div class="row mt-4">
          <div class="col"><h2>Tentang Saya</h2></div>
        </div>
        <div class="row justify-content-center fs-5">
          <div class="col-md-5 text-center">
            <p>Perkenalkan nama saya adalah Wahyu Jhon Riadi Sianipar seorang Mahasiswa Fakultas Ilmu Komputer dan Teknologi Informasi dengan program studi S-1 Teknologi Informasi, Universitas Sumatera Utara. Alasan saya memilih Teknologi
            Informasi adalah karena saya tertarik dan jurusan ini memiliki prospek kerja yang jelas dan luas</p>
          </p>
          </div>
          <div class="col-md-5 text-center">
           <p> Saya berkelahiran di Balige, 19 Oktober 2003. Hobi saya adalah berenang, bermain game, menonton, membaca, dan jika ada waktu yang memungkinkan saya akan pergi <i>touring</i> bersama dengan teman-teman saya. Karena hobi tersebut,
            ketika saya melihat pemandangan yang indah, tangan pasti akan reflek membuka aplikasi kamera pada telepon genggam saya.</p>
          </p>
          </div>
        </div>
        <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path
          fill="rgb(255, 255, 198)"
          fill-opacity="1"
          d="M0,288L0,64L57.6,64L57.6,256L115.2,256L115.2,288L172.8,288L172.8,320L230.4,320L230.4,160L288,160L288,256L345.6,256L345.6,256L403.2,256L403.2,128L460.8,128L460.8,192L518.4,192L518.4,96L576,96L576,256L633.6,256L633.6,128L691.2,128L691.2,128L748.8,128L748.8,32L806.4,32L806.4,160L864,160L864,192L921.6,192L921.6,160L979.2,160L979.2,224L1036.8,224L1036.8,224L1094.4,224L1094.4,192L1152,192L1152,96L1209.6,96L1209.6,64L1267.2,64L1267.2,160L1324.8,160L1324.8,64L1382.4,64L1382.4,96L1440,96L1440,320L1382.4,320L1382.4,320L1324.8,320L1324.8,320L1267.2,320L1267.2,320L1209.6,320L1209.6,320L1152,320L1152,320L1094.4,320L1094.4,320L1036.8,320L1036.8,320L979.2,320L979.2,320L921.6,320L921.6,320L864,320L864,320L806.4,320L806.4,320L748.8,320L748.8,320L691.2,320L691.2,320L633.6,320L633.6,320L576,320L576,320L518.4,320L518.4,320L460.8,320L460.8,320L403.2,320L403.2,320L345.6,320L345.6,320L288,320L288,320L230.4,320L230.4,320L172.8,320L172.8,320L115.2,320L115.2,320L57.6,320L57.6,320L0,320L0,320Z"
        ></path>
      </svg>
      </div>
      
    </section>
    <!-- Akhir Tentang -->

</div>
<!-- /.container-fluid -->

@endsection