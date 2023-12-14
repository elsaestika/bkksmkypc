@extends('alumni.landing_page')
@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>
                @if (Auth::guard('alumnis')->check())
                <span class="fw-medium d-block">Hi {{ Auth::guard('alumnis')->user()->nama_alumni }}
                    Selamat Datang Di Bursa Kerja Khusus (BKK) SMK YPC TASIKMALAYA 👋
                </span>
                @else
                <span class="fw-medium d-block">Hi
                    Selamat Datang Di BKK SMK YPC TASIKMALAYA 👋
                </span>
                @endif
            </h1>
            <h2>Lorem ipsum dolor sit amet, tota senserit percipitur ius ut, usu et fastidii forensibus voluptatibus. His ei nihil feugait</h2>
            {{-- <a href="#" class="download-btn"><i class="bx bxl-play-store"></i> Google Play</a>
            <a href="#" class="download-btn"><i class="bx bxl-apple"></i> App Store</a> --}}
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{ asset('assets/assets1/img/hero-img.png') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>BKK (Bursa Kerja Khusus)</h2>
          <p>Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.</p>
        </div>

        <div class="row no-gutters">
          <div class="col-xl-6 d-flex align-items-stretch order-2 order-lg-1">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                    <h4 class="py-3 mb-4 ms-5 mt-3">
                        <span class="text-muted fw-light fw-bold">Perusahaan Yang Bekerjasama</span>
                    </h4>
                    </a>
                    <div class="container-fluid">
                        {{-- <a href="{{ url('add/perusahaan/', $perusahaan->id_perusahaan) }}" class="btn btn-primary">Tambah Perusahaan</a> --}}

                            @foreach ($perusahaan as $item)
                            <div class="col col-md-4 mb-5 ">
                                        <div class="card mb-3 ms-4 text-center" style="width: 500px;">
                                            <div class="card-body">

                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        <img src="/storage/{{ $item->foto}}" class="img-fluid rounded-circle" alt="..." height="70" width="70"><br>
                                                        {{ $item->perusahaan}}
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="card-body">
                                                            <h5 class="card-title fw-bold"></h5>
                                                            {{-- <div class=" mt-2">
                                                                <h5 class="fw-bold">Alamat Perusahaan : </h5>
                                                                <span class="mt-2">{{ $item->alamat }}</span>
                                                            </div>
                                                            <div class="mt-2">
                                                                <h5 class="fw-bold">Contact Perusahaan : </h5>
                                                                <span class="mt-2">{{ $item->kontak }}</span>
                                                            </div> --}}
                                                            {{-- <div class="mt-2">
                                                                <h5 class="fw-bold">Tentang Perusahaan : </h5>
                                                                <span class="mt-2">{{ $item->deskripsi }}</span>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                        </div>
                {{-- <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-atom"></i>
                  <h4>Molestiae dolor</h4>
                  <p>Et fuga et deserunt et enim. Dolorem architecto ratione tensa raptor marte</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-id-card"></i>
                  <h4>Explicabo consectetur</h4>
                  <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                </div> --}}
              </div>
            </div>
          </div>
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ asset('assets/assets1/img/features.svg') }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('assets/assets1/img/details-1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Tujuan</h3>
            <p class="fst-italic">
              Tujuan Dibuatnya Sistem BKK SMK YPC TASIKMALAYA
            </p>
            <ul>
              <li><i class="bi bi-check"></i>Sebagai wadah dalam mempertemukan tamatan dengan pencari kerja.</li>
              <li><i class="bi bi-check"></i>Memberikan layanan kepada tamatan sesuai dengan tugas dan fungsi masing-masing seksi yang ada dalam BKK.</li>
              <li><i class="bi bi-check"></i>Sebagai wadah dalam pelatihan tamatan yang sesuai dengan permintaan pencari kerja..</li>
              <li><i class="bi bi-check"></i>Sebagai wadah untuk menanamkan jiwa wirausaha bagi tamatan melalui pelatihan.
              </li>
            </ul>
            <p>
              Voluptas nisi in quia excepturi nihil voluptas nam et ut. Expedita omnis eum consequatur non. Sed in asperiores aut repellendus. Error quisquam ab maiores. Quibusdam sit in officia
            </p>
          </div>
        </div>

        {{-- <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('assets/assets1/img/details-2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <p>
              Inventore id enim dolor dicta qui et magni molestiae. Mollitia optio officia illum ut cupiditate eos autem. Soluta dolorum repellendus repellat amet autem rerum illum in. Quibusdam occaecati est nisi esse. Saepe aut dignissimos distinctio id enim.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="{{ asset('assets/assets1/img/details-3.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
            <p>
              Qui consequatur temporibus. Enim et corporis sit sunt harum praesentium suscipit ut voluptatem. Et nihil magni debitis consequatur est.
            </p>
            <p>
              Suscipit enim et. Ut optio esse quidem quam reiciendis esse odit excepturi. Vel dolores rerum soluta explicabo vel fugiat eum non.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('assets/assets1/img/details-4.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Et praesentium laboriosam architecto nam .</li>
              <li><i class="bi bi-check"></i> Eius et voluptate. Enim earum tempore aliquid. Nobis et sunt consequatur. Aut repellat in numquam velit quo dignissimos et.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div> --}}

      </div>
    </section><!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container" >
          <div class="section-title">
            <h2>Galerry</h2>
            <p>Gallery Alumni SMK YPC TASIKMALAYA</p>
          </div>
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($alumni as $item)
              <div class="swiper-slide">
                  <div class="">
                  <td>
                      <img src="/storage/{{ $item->foto }}" class="" alt="" width="400">
                  </td>
              </div>
          </div>
          @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    <!-- End Gallery Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Testimoni Alumni SMK YPC TASIKMALAYA</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
              @foreach ($testimoni as $item)
            <div class="swiper-slide">
                <div class="testimonial-item">
                <td>
                    <img src="/storage/{{ $item->alumni->foto }}" class="rounded-circle mb-1" alt="" width="50">
                    {{ $item->alumni->nama_alumni }}
                </td>
                <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{ $item->testimoni }}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
            </div>
        </div>
        @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    {{-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box" data-aos="fade-right">
            <h3>Free</h3>
            <h4>$0<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box featured" data-aos="fade-up">
            <h3>Business</h3>
            <h4>$29<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

          <div class="col-lg-4 box" data-aos="fade-left">
            <h3>Developer</h3>
            <h4>$49<span>per month</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
              <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
              <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
              <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
              <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
            </ul>
            <a href="#" class="get-started-btn">Get Started</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section --> --}}

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Website ini merupakan salah satu produk teknologi informasi yang menjadi bentuk peran dan eksistensi SMK YPC Tasikmalaya dalam mewujudkan pelayanan jasa dan informasi  kepada masyarakat dan berbagai pihak yang terkait di bidang pendidikan.

            Kami akan menidaklanjuti masukan yang Anda berikan dan bila perlu mengambil tindakan untuk mencegah masalah yang sama terulang kembali.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>Jl. Raya Mangunreja No. 73, Cikunten Singaparna Tasikmalaya Jawa Barat 46414 Indonesia
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>Telepon: (0265) 546 717</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>smkypctasikmalaya@gmail.com<br>info@example.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Senin - Kamis 07.00 - 15.00</p>
                <p>Jumat 07.00 - 11.00</p>
                <p>Sabtu 07.00 - 13.00</p>
                <p>Minggu Libur</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Nama Lengkap" type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder=" Email" type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Pesan" class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Kirim Pesan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>www.youtube.com/@smkypctasikmalayaofficial8673</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Appland</h3>
            <p>
                Jl. Garut - Tasikmalaya, Cikunten, <br>
                Kec. Singaparna, Kabupaten Tasikmalaya,<br>
              United States <br><br>
              <strong>Phone:</strong> (0265) 546 717<br>
              <strong>Email:</strong> smkypctasikmalaya@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Lowongan kerja</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Perusahaan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Riwayat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profil</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Appland</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- ========================= hero-section start ========================= -->
{{-- <section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                        @if (Auth::guard('alumnis')->check())
                        <span class="fw-medium d-block">Hi {{ Auth::guard('alumnis')->user()->nama_alumni }}
                            Selamat Datang Di BKK SMK YPC TASIKMALAYA 👋
                        </span>
                        @else
                        <span class="fw-medium d-block">Hi
                            Selamat Datang Di BKK SMK YPC TASIKMALAYA 👋
                        </span>
                        @endif
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        Please, purchase full version of the template to get all sections, docs and permission to remove footer credits.
                    </p>
                    <div class="hero-btns">
                        <a href="https://rebrand.ly/appgrids-gg/" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Purchase Now</a>
                        <a href="https://rebrand.ly/appgrids-gg/" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Learn More</a>
                    </div>
                 </div>
            </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/assets/img/hero/hero1-img.png" alt="">
                    </div>
                </div>
        </div>
    </div>
</section> --}}
    <!-- ========================= hero-section end ========================= -->

    <!-- ========================= feature-section start ========================= -->
    {{-- <section id="feature" class="feature-section pt-140">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="section-title text-center mb-30">
                        <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Awesome Features</h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon color-1">
                            <i class="lni lni-pointer-up"></i>
                        </div>
                        <div class="content">
                            <h3>Easy To Use</h3>
                            <p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon color-2">
                            <i class="lni lni-laptop-phone"></i>
                        </div>
                        <div class="content">
                            <h3>Fully Responsive</h3>
                            <p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon color-3">
                            <i class="lni lni-bootstrap"></i>
                        </div>
                        <div class="content">
                            <h3>Bootstrap 5</h3>
                            <p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= tracking-section start ========================= -->
    {{-- <section id="tracking" class="tracking-section pt-150">
        <div class="tracking-shape">
            <img src="assets/assets/img/plan/plan-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-7">
                    <div class="tracking-image">
                        <img src="assets/assets/img/plan/plan-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="tracking-content">
                        <div class="section-title mb-50">
                            <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">Why Use This App</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consenter discing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor samet consenter discing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                        <div class="single-plan">
                            <div class="icon-style color-1">
                                <i class="lni lni-map"></i>
                            </div>
                            <div class="content">
                                <h3>Travel Tools</h3>
                                <p>Lorem ipsum dolor samet consented sadie sling serewd diam nonumy eirmod tempor invidunt labore.</p>
                            </div>
                        </div>
                        <div class="single-plan">
                            <div class="icon-style color-2">
                                <i class="lni lni-travel"></i>
                            </div>
                            <div class="content">
                                <h3>Seat Tracker</h3>
                                <p>Lorem ipsum dolor samet consented sadie sling serewd diam nonumy eirmod tempor invidunt labore.</p>
                            </div>
                        </div>
                        <div class="single-plan">
                            <div class="icon-style color-3">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="content">
                                <h3>Point Tracker</h3>
                                <p>Lorem ipsum dolor samet consented sadie sling serewd diam nonumy eirmod tempor invidunt labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========================= tracking-section end ========================= -->

    <!-- ========================= search-section start ========================= -->
    {{-- <section class="search-section pt-150">
        <div class="search-shape">
            <img src="assets/assets/img/search/search-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 order-last order-lg-first">
                    <div class="search-content">
                        <div class="section-title mb-40">
                            <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">Explore and learn more about AppGrids</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                        <div class="app-info">
                            <div class="single-info">
                                <div class="icon-style color-1">
                                    <h2>2.2</h2>
                                </div>
                                <h4>Version</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-2">
                                    <h2>9.5</h2>
                                </div>
                                <h4>Mb</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-3">
                                    <h2>4.5</h2>
                                </div>
                                <h4>Rating</h4>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="search-img text-lg-right">
                        <img src="assets/assets/img/search/search-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= search-section end ========================= -->


    <!-- ========================= counter-up-section start ========================= -->
    <section class="counter-up-section pt-150">
        <div class="counter-shape">
            <img src="assets/assets/img/count-up/counter-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="counter-up-img">
                        <img src="assets/assets/img/count-up/count-up-img.png" alt="">
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="search-content">
                        <div class="section-title mb-40">
                            <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">AppGrids Expericne in Statistics and Numbers</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                        <div class="app-info">
                            <div class="single-info">
                                <div class="icon-style color-1">
                                    <h2 id="secondo1" class="countup" cup-end="2" cup-append="M+">2</h2>
                                </div>
                                <h4>Download</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-2">
                                    <h2 id="secondo2" class="countup" cup-end="5" cup-append="K+">5</h2>
                                </div>
                                <h4>Review</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-3">
                                    <h2 id="secondo3" class="countup" cup-end="9" cup-append="K+">9</h2>
                                </div>
                                <h4>Premium user</h4>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= counter-up-section end ========================= -->


    <!-- ========================= testimonial-section start ========================= -->
    <section id="testimonial" class="testimonial-section">
        <div class="container text-center">
        <h1>You are using free lite version of AppGrids</h1>
        <p>Please, purchase full version of the template to get all sections, docs and permission to remove footer credits.</p></br>
        <a href="https://rebrand.ly/appgrids-gg/" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Purchase Now</a>
        </div>
    </section>
<!-- ========================= testimonial-section end ========================= -->

    <!-- ========================= download-section start ========================= -->
    <section id="download" class="download-section pt-130 pb-130">
        <div class="map-bg">
            <img src="assets/assets/img/download/map-bg.svg" alt="">
        </div>
        <div class="download-shape">
            <img src="assets/assets/img/download/download-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="download-content mb-50">
                        <div class="section-title mb-40">
                            <h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Install and Start Using</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit arete.</p>
                        </div>
                        <ul class="download">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon"><i class="lni lni-apple"></i></span>
                                    <span class="text">Download on the <b>App Store</b> </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon"><i class="lni lni-play-store"></i></span>
                                    <span class="text">GET IT ON <b>Play Store</b> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="download-img mb-50 text-lg-right">
                        <img src="assets/assets/img/download/download-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========================= download-section end ========================= -->

<!-- ========================= footer start ========================= -->
{{-- <footer id="footer" class="footer">
        <div class="footer-shape">
            <img src="assets/assets/img/footer/footer-shape-1.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/assets/img/logo/logo-2.svg" alt="" class="logo-2">
                                    <img src="assets/assets/img/logo/logo.svg" alt="" class="logo-1">
                                </a>
                            </div>
                            <ul class="socials">
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>Features</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Easy to use</a> </li>
                                <li> <a href="javascript:void(0)">Work on all device</a> </li>
                                <li> <a href="javascript:void(0)">Always up to date</a> </li>
                                <li> <a href="javascript:void(0)">Track your devices</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>About Us</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Home</a> </li>
                                <li> <a href="javascript:void(0)">Features</a> </li>
                                <li> <a href="javascript:void(0)">Explore</a> </li>
                                <li> <a href="javascript:void(0)">Testimonials</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>Support</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">About Us</a> </li>
                                <li> <a href="javascript:void(0)">Privacy Policy</a> </li>
                                <li> <a href="javascript:void(0)">Terms of Service</a> </li>
                                <li> <a href="javascript:void(0)">Accessibility</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copy-right-wrapper">
                <p>Designed and Developed by <a href="https://graygrids.com" rel="nofollow" target="_blank">GrayGrids</a></p>
            </div>
        </div>


    </footer> --}}




<!-- ========================= footer end ========================= -->

<!-- ========================= scroll-top ========================= -->
{{-- <a href="#" class="scroll-top btn-hover">
  <i class="lni lni-chevron-up"></i>
</a> --}}
@endsection

    <!-- ========================= JS here ========================= -->


{{-- @extends('alumni.landing_page')
@section('content')

<!-- ========================= hero-section start ========================= -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">
                        You are using free lite version of AppGrids
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        Please, purchase full version of the template to get all sections, docs and permission to remove footer credits.
                    </p>
                    <div class="hero-btns">
                        <a href="https://rebrand.ly/appgrids-gg/" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Purchase Now</a>
                        <a href="https://rebrand.ly/appgrids-gg/" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Learn More</a>
                    </div>
                </div>
            </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/assets/img/hero/hero-img.png" alt="">
                    </div>
                </div>
        </div>
    </div>
        <div class="hero-shape">
            <img src="assets/assets/img/hero/hero-shape-1.svg" alt="" class="shape shape-1">
        </div>
</section>
    <!-- ========================= hero-section end ========================= -->

    <!-- ========================= feature-section start ========================= -->
<section id="feature" class="feature-section pt-140">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-7">
                <div class="section-title text-center mb-30">
                    <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Awesome Features</h1>
                    <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8 col-sm-10">
                <div class="single-feature">
                    <div class="icon color-1">
                        <i class="lni lni-pointer-up"></i>
                    </div>
                    <div class="content">
                        <h3>Easy To Use</h3>
                        <p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon color-2">
                            <i class="lni lni-laptop-phone"></i>
                        </div>
                        <div class="content">
                            <h3>Fully Responsive</h3>
                            <p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon color-3">
                            <i class="lni lni-bootstrap"></i>
                        </div>
                        <div class="content">
                            <h3>Bootstrap 5</h3>
                            <p>Lorem ipsum dolor samet consetet sadip scing elitr serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
    <!-- ========================= feature-section end ========================= -->

    <!-- ========================= tracking-section start ========================= -->
    <section id="tracking" class="tracking-section pt-150">
        <div class="tracking-shape">
            <img src="assets/assets/img/plan/plan-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-7">
                    <div class="tracking-image">
                        <img src="assets/assets/img/plan/plan-img.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="tracking-content">
                        <div class="section-title mb-50">
                            <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">Why Use This App</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consenter discing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor samet consenter discing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                        <div class="single-plan">
                            <div class="icon-style color-1">
                                <i class="lni lni-map"></i>
                            </div>
                            <div class="content">
                                <h3>Travel Tools</h3>
                                <p>Lorem ipsum dolor samet consented sadie sling serewd diam nonumy eirmod tempor invidunt labore.</p>
                            </div>
                        </div>
                        <div class="single-plan">
                            <div class="icon-style color-2">
                                <i class="lni lni-travel"></i>
                            </div>
                            <div class="content">
                                <h3>Seat Tracker</h3>
                                <p>Lorem ipsum dolor samet consented sadie sling serewd diam nonumy eirmod tempor invidunt labore.</p>
                            </div>
                        </div>
                        <div class="single-plan">
                            <div class="icon-style color-3">
                                <i class="lni lni-map-marker"></i>
                            </div>
                            <div class="content">
                                <h3>Point Tracker</h3>
                                <p>Lorem ipsum dolor samet consented sadie sling serewd diam nonumy eirmod tempor invidunt labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= tracking-section end ========================= -->

    <!-- ========================= search-section start ========================= -->
    <section class="search-section pt-150">
        <div class="search-shape">
            <img src="assets/assets/img/search/search-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 order-last order-lg-first">
                    <div class="search-content">
                        <div class="section-title mb-40">
                            <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">Explore and learn more about AppGrids</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                        <div class="app-info">
                            <div class="single-info">
                                <div class="icon-style color-1">
                                    <h2>2.2</h2>
                                </div>
                                <h4>Version</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-2">
                                    <h2>9.5</h2>
                                </div>
                                <h4>Mb</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-3">
                                    <h2>4.5</h2>
                                </div>
                                <h4>Rating</h4>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-6">
                    <div class="search-img text-lg-right">
                        <img src="assets/assets/img/search/search-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= search-section end ========================= -->


    <!-- ========================= counter-up-section start ========================= -->
    <section class="counter-up-section pt-150">
        <div class="counter-shape">
            <img src="assets/assets/img/count-up/counter-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="counter-up-img">
                        <img src="assets/img/count-up/count-up-img.png" alt="">
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6">
                    <div class="search-content">
                        <div class="section-title mb-40">
                            <h1 class="mb-40 wow fadeInUp" data-wow-delay=".2s">AppGrids Expericne in Statistics and Numbers</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt ut labore.</p>
                        </div>
                        <div class="app-info">
                            <div class="single-info">
                                <div class="icon-style color-1">
                                    <h2 id="secondo1" class="countup" cup-end="2" cup-append="M+">2</h2>
                                </div>
                                <h4>Download</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-2">
                                    <h2 id="secondo2" class="countup" cup-end="5" cup-append="K+">5</h2>
                                </div>
                                <h4>Review</h4>
                            </div>
                            <div class="single-info">
                                <div class="icon-style color-3">
                                    <h2 id="secondo3" class="countup" cup-end="9" cup-append="K+">9</h2>
                                </div>
                                <h4>Premium user</h4>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor samet consetetur sadipscing elitr, serewd diam nonumy eirmod tempor invidunt.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= counter-up-section end ========================= -->


    <!-- ========================= testimonial-section start ========================= -->
    <section id="testimonial" class="testimonial-section">
        <div class="container text-center">
        <h1>You are using free lite version of AppGrids</h1>
        <p>Please, purchase full version of the template to get all sections, docs and permission to remove footer credits.</p></br>
        <a href="https://rebrand.ly/appgrids-gg/" class="main-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Purchase Now</a>
        </div>
    </section>
<!-- ========================= testimonial-section end ========================= -->

    <!-- ========================= download-section start ========================= -->
    <section id="download" class="download-section pt-130 pb-130">
        <div class="map-bg">
            <img src="assets/assets/img/download/map-bg.svg" alt="">
        </div>
        <div class="download-shape">
            <img src="assets/assets/img/download/download-shape.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="download-content mb-50">
                        <div class="section-title mb-40">
                            <h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">Install and Start Using</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor Lorem ipsum dolor sit arete.</p>
                        </div>
                        <ul class="download">
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon"><i class="lni lni-apple"></i></span>
                                    <span class="text">Download on the <b>App Store</b> </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <span class="icon"><i class="lni lni-play-store"></i></span>
                                    <span class="text">GET IT ON <b>Play Store</b> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="download-img mb-50 text-lg-right">
                        <img src="assets/assets/img/download/download-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= download-section end ========================= -->

<!-- ========================= footer start ========================= -->
<footer id="footer" class="footer">
        <div class="footer-shape">
            <img src="assets/assets/img/footer/footer-shape-1.svg" alt="" class="shape shape-1">
        </div>
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="assets/assets/img/logo/logo-2.svg" alt="" class="logo-2">
                                    <img src="assets/assets/img/logo/logo.svg" alt="" class="logo-1">
                                </a>
                            </div>
                            <ul class="socials">
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-twitter-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-instagram-filled"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>Features</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Easy to use</a> </li>
                                <li> <a href="javascript:void(0)">Work on all device</a> </li>
                                <li> <a href="javascript:void(0)">Always up to date</a> </li>
                                <li> <a href="javascript:void(0)">Track your devices</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>About Us</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Home</a> </li>
                                <li> <a href="javascript:void(0)">Features</a> </li>
                                <li> <a href="javascript:void(0)">Explore</a> </li>
                                <li> <a href="javascript:void(0)">Testimonials</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3>Support</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">About Us</a> </li>
                                <li> <a href="javascript:void(0)">Privacy Policy</a> </li>
                                <li> <a href="javascript:void(0)">Terms of Service</a> </li>
                                <li> <a href="javascript:void(0)">Accessibility</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copy-right-wrapper">
                <p>Designed and Developed by <a href="https://graygrids.com" rel="nofollow" target="_blank">GrayGrids</a></p>
            </div>
        </div>


    </footer>
@endsection




    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
 --}}
