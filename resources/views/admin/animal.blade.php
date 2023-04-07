@extends ('admin.layout' )
@section ( 'content' )
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Animal</h1>
</div>
<div>

<style>
      @import url('https://fonts.googleapis.com/css2?family=Exo&display=swap');
    </style>
    <style type="text/css">
      .card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
      
    </style>
</head>
<body>
    <div class="container mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html" target="_blank"><img src="https://static.vecteezy.com/system/resources/thumbnails/004/925/021/small/komodo-dragon-free-vector.jpg" alt="logo-komodo" width="135"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <section>
        <div class="container" id="home">
            <div class="row">
                <div class="col align-self-center">
                        <h1 style="font-family: 'Exo', sans-serif;">Welcome!<br/>Nature Lovers</h1>
                        <p>
                            Pada website ini, kita akan dibawa ke dunia kadal raksasa yang masih hidup pada masa kini, yaitu Komodo.
                            Siap untuk menelusuri info-info mengenai kadal raksasa ini? Mulai sekarang!!!
                        </p>
                        <button type="button" class="btn btn-light"><a href="#allabout">Mulai Sekarang!!!</a></button>
                </div>
                <div class="col d-none d-lg-block d-xl-block">
                        <img src="{{asset('img/HD_komodo.jpg')}}" alt="" width="400">
                </div>
            </div>
        </div>
        <div class="container mt-4">
          <div class="row">
            <div class="col mt-4">
              <h3 style="text-align: center;" id="allabout">All About Komodo Dragon</h3>
            </div>
          </div>
        <div class="row justify-content-center">
          <div class="col my-4">
            <div class="card h-100" style="width: 18rem;">
              <img src="https://cdn.idntimes.com/content-images/community/2019/06/img-20190609-040548-dc0ebe92a7b93fff3841b1f1bd21e727_600x400.jpg" class="card-img-top" alt="6 Fakta Unik Tentang Komodo" width="400">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">6 Fakta Unik Tentang Komodo, Kadal Raksasa Asal Indonesia</h5>
                <p class="card-text">Bukan hanya beragam jenis tumbuhan tapi juga hewan-hewan liar yang super langka bahkan hanya bisa ditemukan di Indonesia, dan komodo adalah salah satunya.
                  Pulau Komodo dan sekitarnya menjadi satu-satunya habitat asli dimana kadal tua raksasa ini tinggal dan berkembang biak. Terlepas dari keberadaannya yang cukup langka, komodo tetaplah hewan yang istimewa dan memiliki banyak fakta menarik yang jarang diketahui oleh banyak orang lho!</p>
                <a href="https://www.idntimes.com/science/discovery/lia-89/fakta-unik-tentang-komodo-exp-c1c2" target="_blank" class="btn btn-primary">Let's Go!!!</a>
              </div>
            </div>
          </div>
          <div class="col my-4">
            <div class="card h-100" style="width: 18rem;">
              <img src="https://disk.mediaindonesia.com/thumbs/700x-/news/2022/06/9c6a5f2c6320d83fb49a227e9e1ff148.jpg" class="card-img-top" alt="Populasi Komodo" width="400">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Populasi Komodo di TN Komodo Terus Meningkat</h5>
                <p class="card-text">Kepala Balai Taman Nasional Komodo Lukita Awang mengungkapkan, populasi komodo di Taman Nasional Komodo dalam keadaan stabil dan cenderung meningkat dalam periode.... Data ini diperoleh berdasarkan pelaksanaan kegiatan monitoring intensif pada populasi biawak komodo yang ada di TN Komodo oleh para ranger Balai Taman Nasional Komodo dan para peneliti di Yayasan Komodo Survival Program</p>
                <a href="https://mediaindonesia.com/nusantara/502304/populasi-komodo-di-tn-komodo-terus-meningkat" target="_blank" class="btn btn-primary">Let's Go!!!</a>
              </div>
            </div>
          </div>
          <div class="col my-4">
            <div class="card h-100" style="width: 18rem;">
              <img src="https://asset.kompas.com/crops/DfGpMi-jZSs2yppAa6vFNJvkEOU=/62x59:920x631/750x500/data/photo/2020/11/06/5fa4e37d84b13.jpg" class="card-img-top" alt="2 ekor  komodo" width="400">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">Sejarah Kehidupan Komodo, Ahli Sebut Asalnya Justru dari Australia</h5>
                <p class="card-text">Peneliti dari The Australian National University mengungkap sejarah kehidupan asal muasal kadal terbesar di dunia, komodo. Studi yang dipublikasikan di jurnal Systematic Biology tersebut menyebut jika hewan tersebut ternyata berasal dari Australia. Seperti dikutip dari Phys, Rabu (3/2/2021) peneliti menyimpulkan temuan tersebut setelah sebelumnya menemukan fosil di Queensland. Fosil itu rupanya memberikan wawasan baru mengenai komodo.</p>
                <a href="https://www.kompas.com/sains/read/2021/03/03/180200423/sejarah-kehidupan-komodo-ahli-sebut-asalnya-justru-dari-australia?page=all" target="_blank" class="btn btn-primary">Let's Go!!!</a>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</div>
</div>
<!-- /.container-fluid -->

@endsection