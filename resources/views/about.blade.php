@extends('layout.header')

@section('content')

  <!-- about section -->
  
  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          About <span>Us</span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/farm2.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              We Are Finexo
            </h3>
            <p>
            Kami adalah tim pertanian yang berdedikasi untuk memberikan produk pertanian berkualitas tinggi kepada pelanggan kami. Dengan pengalaman bertahun-tahun dalam industri pertanian, kami berkomitmen untuk menghasilkan hasil panen terbaik.
            </p>
            <p>
            Kami sangat peduli terhadap lingkungan dan berkomitmen untuk melindungi alam sekitar. Kami menggunakan praktik pertanian berkelanjutan untuk meminimalkan dampak lingkungan.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
  @endsection