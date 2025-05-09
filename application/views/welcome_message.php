<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>MyPortofolio</title>
<!-- 
Moonlight Template 
http://www.templatemo.com/tm-512-moonlight
-->
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-theme.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/fontAwesome.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/light-box.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/templatemo-main.css'); ?>">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<script src="<?= base_url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'); ?>"></script>

<body>
    
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
        <nav>
          <div class="logo">
              <img src="img/logo.png" alt="">
          </div>
          <div class="mini-logo">
              <img src="img/mini_logo.png" alt="">
          </div>
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Project</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Sertificate</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-3">
				  <img src="<?= base_url('assets/img/me.jpeg'); ?>" alt="Author Image">
                  </div>
                  <div class="col-md-9">
                      <h2>Diki Eka Kurnia</h2>
                      <p>Portofolio ini menjelaskan beberapa <em> project</em>, yang sudah saya buat dari jenjang <em>Smk dan
					  Universitas,</em> dengan fokus pada bidang web
					  developer dan backend developer.</p>
					  
  
                      <div class="main-btn"><a href="#2">Read More</a></div>
                      <!-- <div class="fb-btn"><a href="https://www.facebook.com/templatemo/" target="_blank">Our FB Page</a></div> -->
                  </div>
              </div>
            </div>
          </div>
		  <div class="slide" id="2">
  <div class="content second-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="left-content">
            <h2>Tentang Saya</h2>
            <p style="text-align: justify;">
              Mahasiswa semester 5 di program studi Manajemen Informatika dengan ketertarikan dalam mengelola database dan backend developer menggunakan SQL dan lainnya. Memiliki keterampilan dalam analisis, merancang, dan membangun website sederhana menggunakan PHP dan framework CodeIgniter. Berpengalaman dalam perancangan sistem informasi website.
            </p>
            <h2>Biodata</h2>
<table>
  <tr>
    <td><strong><p>Nama</p></strong></td>
    <td><p>: Diki Eka Kurnia</p></td>
  </tr>
  <tr>
    <td><strong><p>Tempat, Tanggal Lahir</p></strong></td>
    <td><p>: Cimahi, 27 Desember 2003</p></td>
  </tr>
  <tr>
    <td><strong><p>Alamat</strong></p></td>
    <td><p>: Kp Nyalindung Rt 05 Rw 05 Kel.Citeureup Kec.Cimahi Utara Kota Cimahi</p></td>
  </tr>
  <tr>
    <td><strong><p>Email</p></strong></td>
    <td><p>: dikiekakurnia2003@gmail.com</p></td>
  </tr>
  <tr>
    <td><strong><p>Status</p></strong></td>
    <td><p>: Mahasiswa</p></td>
  </tr>
</table>


            <h2>Riwayat Pendidikan</h2>
            <ul>
              <li><strong><p>Universitas Logistik dan Bisnis Internasional (ULBI)</strong><br>
              D3 Manajemen Informatika</p></li>
              <li><strong><p>SMK Negeri 2 Cimahi</strong><br>
              Rekayasa Perangkat Lunak (RPL)</p></li>
            </ul>

            <!-- <div class="main-btn"><a href="#3">Read More</a></div> -->
          </div>
        </div>

        <div class="col-md-6">
          <div class="right-image">
            <img src="<?= base_url('assets/img/about_image.jpg'); ?>" alt="About Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
										<div class="left-content">
    <h2>Sistem Informasi Pengaduan Mahasiswa Berbasis Web (Studi Kasus : D3 Manajemen Informatika)</h2>
	<p style="text-align: justify;">
    Pengaduan mahasiswa di Prodi Manajemen Informatika ULBI masih bersifat manual, sehingga kurang efisien dan rentan kesalahan. Sebagai solusinya, dikembangkan aplikasi pengaduan berbasis web yang praktis, aman, dan mendukung komunikasi interaktif antara mahasiswa dan Prodi.
</p>

    <div class="main-btn"><a href="#4">Continue Reading</a></div>
</div>

                                        </div>
                                        <div class="col-md-6">
										<div class="right-image">
    <img src="<?= base_url('assets/img/p1.jpeg'); ?>" alt="first service" style="max-width: 400px; height: auto; width: 100%;">
</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-image">
                                                <img src="<?= base_url('assets/img/p2.jpeg');?>" alt="second ">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2>Perancangan Sistem Informasi Pengaduan Mahasiswa</h2>
                                                <p>sistem informasi pengaduan mahasiswa ini, didapatkan suatu rancangan sistem yang dapat mempunyai fitur pengelolaan pengaduan mahasiswa berbasis web, detail pengaduan, notif hasil pengaduan dan laporan pengaduan. Sehingga dapat mengatasi permasalahan keterlambatan dalam penyelesain permasalahan pengaduan, tidak tertampungnya data dari mahasiswa yang terjadi serta memberi solusi terhadap pengaduan mahasiswa.</p>
                                                <div class="main-btn"><a href="#4">Continue Reading</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
								<a href="<?= base_url('assets/img/s1.jpeg'); ?>" data-lightbox="image-1">
								<div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Java Fundamental</h2>
                                            <p>Sertifikat Java Fundamental dan Foundation membuktikan pemahaman saya terhadap dasar pemrograman Java dan konsep OOP sebagai bekal membangun aplikasi tingkat dasar.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
    <img src="<?= base_url('assets/img/s1.jpeg'); ?>" alt="First Item">
</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                <a href="<?= base_url('assets/img/s2.jpeg'); ?>" data-lightbox="image-1">
<div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Java Foundation</h2>
                                            <p>Sertifikat Java Fundamental dan Foundation membuktikan pemahaman saya terhadap dasar pemrograman Java dan konsep OOP sebagai bekal membangun aplikasi tingkat dasar.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
    <img src="<?= base_url('assets/img/s2.jpeg'); ?>" alt="Second Item">
</div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
								<a href="<?= base_url('assets/img/s3.jpeg'); ?>" data-lightbox="image-1">
								<div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Mobile Programe</h2>
                                            <p>Sertifikat ini membuktikan keikutsertaan saya dalam workshop pembuatan aplikasi mobile yang diadakan oleh Dinas Perdagangan dan Perindustrian Kota Cimahi.</p>
                                        </div>
                                    </div></a>
									<div class="image">
    <img src="<?= base_url('assets/img/s3.jpeg'); ?>" alt="Third Item">
</div>

                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
								<a href="<?= base_url('assets/img/fourth_big_item.jpg'); ?>" data-lightbox="image-1">
								<div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Four</h2>
                                            <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
    <img src="<?= base_url('assets/img/fourth_item.jpg'); ?>" alt="Fourth Item">
</div>

                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
								<a href="<?= base_url('assets/img/fifth_big_item.jpg'); ?>" data-lightbox="image-1">
								<div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Fifth Item</h2>
                                            <p>Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
									<img src="<?= base_url('assets/img/fifth_item.jpg'); ?>" alt="Fifth Item">

                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
								<a href="<?= base_url('assets/img/sixth_big_item.jpg'); ?>" data-lightbox="image-1">
								<div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Sixth Item</h2>
                                            <p>Maecenas dapibus neque sed nisl consectetur, id semper nisi egestas.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
									<img src="<?= base_url('assets/img/sixth_item.jpg'); ?>" alt="Sixth Item">

                                    </div>
                                </div>
                            </div>
                        </div> -->
                       
                        
                        
						
                        
                        
                    </div>
                </div>
            </div>
          </div>
          <div class="slide" id="5">
            <div class="content fifth-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div id="map">
    <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
	<iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.0920601837874!2d107.5429833!3d-6.8598982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e412f6873891%3A0xd3ae62925c9b6e65!2sCiteureup%2C%20Kec.%20Cimahi%20Utara%2C%20Kota%20Cimahi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1713174912345" 
    width="100%" 
    height="500px" 
    frameborder="0" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-12">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="footer">
          <div class="content">
              <p>Copyright &copy; 2025 Your Company . <a href="">PT evolution corporation</a> by <a href="http://www.html5max.com" target="_parent">Diki Eka Kurnia</a></p>
          </div>
        </div>

    
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url('assets/js/vendor/jquery-1.11.2.min.js'); ?>"><\/script>')</script>

<script src="<?= base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/datepicker.js'); ?>"></script>
<script src="<?= base_url('assets/js/plugins.js'); ?>"></script>
<script src="<?= base_url('assets/js/main.js'); ?>"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>
