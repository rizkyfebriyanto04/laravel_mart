<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Karya Midas Mandiri</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{'template/landing/css/bootstrap.min.css'}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{'template/landing/css/style.css'}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{'template/landing/css/responsive.css'}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,800;1,400&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{'template/landing/css/jquery.mCustomScrollbar.min.css'}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <style>
        .modal-dialog {
            max-width: 80%; /* Mengatur lebar maksimal modal ke 80% */
        }

        .modal-dialog.modal-xl {
            max-width: 90%; /* Modal XL akan menggunakan 90% dari lebar layar */
        }
      </style>
   </head>
   <body>
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               {{-- <a class="navbar-brand"href="index.html"><img src="images/logo.png"></a> --}}
               <h4 style="color: white;">Karya Midas Mandiri</h4>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#exampleModal">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                     </li>
                  </ul>
                  {{-- <form class="form-inline my-2 my-lg-0">
                     <div class="search_icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                  </form> --}}
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- layout_border start -->
      <div class="container-fluid">
         <div class="layout_border">
            <!-- banner section start -->
            <div class="banner_section layout_padding">
               <div class="container-fluid">
                  <div id="main_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="row">
                              <div class="col-sm-6">
                                 <div class="banner_taital_main">
                                    <h1 class="banner_taital">Karya Midas Mandiri</h1>
                                    <p class="banner_text">Glosir Bandung Souvenir Tersedia Di MarketPlace Shopee</p>
                                    <div class="btn_main">
                                       <div class="started_text"><a href="#">Shopee</a></div>
                                       {{-- <div class="started_text active"><a href="#">Contact Us</a></div> --}}
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6">
                                 <div class="banner_img"><img src="{{'template/landing/images/banner-img.png'}}"></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="row">
                            <div class="col-sm-6">
                                <div class="banner_taital_main">
                                   <h2 class="banner_taital">Karya Midas Mandiri</h2>
                                   <p class="banner_text">Glosir Bandung Souvenir Tersedia Di MarketPlace Tokopedia</p>
                                   <div class="btn_main">
                                      <div class="started_text"><a href="#">Tokopedia</a></div>
                                      {{-- <div class="started_text active"><a href="#">Contact Us</a></div> --}}
                                   </div>
                                </div>
                             </div>
                              <div class="col-sm-6">
                                 <div class="banner_img"><img src="{{'template/landing/images/banner-img.png'}}"></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="row">
                            <div class="col-sm-6">
                                <div class="banner_taital_main">
                                   <h1 class="banner_taital">Karya Midas Mandiri</h1>
                                   <p class="banner_text">Glosir Bandung Souvenir Tersedia Di MarketPlace Lazada</p>
                                   <div class="btn_main">
                                      <div class="started_text"><a href="#">Lazada</a></div>
                                      {{-- <div class="started_text active"><a href="#">Contact Us</a></div> --}}
                                   </div>
                                </div>
                             </div>
                              <div class="col-sm-6">
                                 <div class="banner_img"><img src="{{'template/landing/images/banner-img.png'}}"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                     <img src="{{'template/landing/images/arrow-left.png'}}">
                     </a>
                     <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                     <img src="{{'template/landing/images/arrow-right.png'}}">
                     </a>
                  </div>
               </div>
            </div>
            <!-- banner section end -->
            <!-- about section start -->
            <div id="about" class="about_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h1 class="about_taital">Tentang Kami</h1>
                        <p class="about_text">Karya Midas Mandiri</p>
                     </div>
                  </div>
                  <div class="about_section_2">
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about_img"><img src="{{'template/landing/images/about-img.png'}}"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="fresh_taital">Glosir Bandung Souvenir</div>
                        <p class="ipsum_text">Glosir Bandung Souvenir menyediakan berbagai macam souvenir khas Bandung yang cocok sebagai oleh-oleh atau hadiah. Dari kerajinan tangan hingga aksesori unik, setiap produk kami mencerminkan kekayaan budaya lokal dan menjadi kenang-kenangan yang sempurna dari Bandung.</p>
                        <div class="read_bt"><a href="https://shopee.co.id/wnpaksesoris1" target="_blank">Shopee Kami</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- about section end -->
            <!-- vagetables section start -->
            <div class="vagetables_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="vagetables_taital">Produk Kami</h1>
                        {{-- <p class="vagetables_text">Produk </p> --}}
                     </div>
                  </div>
                  <div class="courses_section_2">
                     <div class="row">

                         @foreach ($data as $d)

                         <div class="col-md-4">
                             <div class="hover01 column">
                                 <figure><img src="{{ asset('storage/' . $d->foto) }}"></figure>
                                </div>
                                <h3 class="harshal_text">{{ $d->nama_produk }}</h3>
                                <h3 class="rate_text">Rp {{ number_format($d->harga_jual, 0, ',', '.') }}</h3>
                                {{-- <div class="read_bt_1"><a href="#">Read More</a></div> --}}
                            </div>

                        @endforeach

                     </div>
                  </div>
               </div>
            </div>
            <!-- vagetables section end -->
            <!-- contact section start -->
            <div id="contact" class="contact_section layout_padding">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-12">
                        <h1 class="contact_taital">Alamat</h1>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <div class="contact_section_2">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="map_main">
                              <div class="map-responsive">
                                    {{-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="340" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe> --}}
                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495.0405708667049!2d107.58627541377766!3d-6.97098246871393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97a6e883f57%3A0xe3d1d9a562e2d11e!2sWarung%20Arkan!5e0!3m2!1sid!2sid!4v1737296581713!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3271969620464!2d107.58403997535214!3d-6.970671268255271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e97f225fc001%3A0xddfba98671ef1c23!2sKp.%20Sekeawi!5e0!3m2!1sen!2sid!4v1737299626794!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- contact section end -->
            <!-- testimonial section end -->
            <!-- layout_border end -->
         </div>
      </div>
      <!-- footer section start -->
      {{-- <div class="footer_section layout_padding" style="height: 20%">
      </div> --}}
      {{-- <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-sm-6">
                  <h3 class="footer_text">Useful links</h3>
                  <div class="footer_menu">
                     <ul>
                        <li class="active"><a href="index.html"><span class="angle_icon active"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> Home</a></li>
                        <li><a href="about.html"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>  About</a></li>
                        <li><a href="services.html"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> Services</a></li>
                        <li><a href="domain.html"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span> Domain</a></li>
                        <li><a href="testimonial"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>  Testimonial</a></li>
                        <li><a href="contact.html"><span class="angle_icon"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>  Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <h3 class="footer_text">Address</h3>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-map-marker" aria-hidden="true"></i></span>It is a long established fact that a<br> reader will be distracted</a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>(+71) 1234567890<br>(+71) 1234567890
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>demo@gmail.com
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6">
                  <div class="footer_main">
                     <h3 class="footer_text">Find Us</h3>
                     <p class="dummy_text">more-or-less normal distribution </p>
                     <div class="social_icon">
                        <ul>
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document"> <!-- modal-xl untuk ukuran ekstra besar -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('simpan.order') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- Kolom Kiri: Data Pemesan -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
                                    <input type="text" class="form-control" id="recipient-name" name="nama_pembeli">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name2" class="col-form-label">Nomer Hp:</label>
                                    <input type="text" class="form-control" id="recipient-name2" name="nomer_hp">
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name3" class="col-form-label">Alamat:</label>
                                    <textarea class="form-control" id="recipient-name3" rows="5" name="alamat"></textarea>
                                </div>
                            </div>

                            <!-- Kolom Kanan: Data Produk -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="produk_id" class="col-form-label">Produk:</label>
                                    <select id="produk_id" name="produk_id" class="form-control">
                                        <option value="" selected>Pilih Produk</option>
                                        @foreach ($data as $p)
                                            <option value="{{ $p->id }}" data-harga="{{ $p->harga_jual }}">{{ $p->nama_produk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="harga_jual" class="col-form-label">Harga:</label>
                                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="qty" class="col-form-label">Qty:</label>
                                    <input type="number" class="form-control" id="qty" name="qty" min="1" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="total" class="col-form-label">Total:</label>
                                    <input type="text" class="form-control" id="total" name="total" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk menampilkan harga produk setelah dipilih dan menghitung total -->
    <script>
        document.getElementById('produk_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var harga = selectedOption.getAttribute('data-harga');
            document.getElementById('harga_jual').value = harga ? 'Rp ' + new Intl.NumberFormat().format(harga) : '';
            calculateTotal();  // Hitung total setiap kali produk dipilih
        });

        document.getElementById('qty').addEventListener('input', function() {
            calculateTotal();  // Hitung total setiap kali qty berubah
        });

        function calculateTotal() {
            var harga = document.getElementById('harga_jual').value.replace('Rp ', '').replace(',', '');
            var qty = document.getElementById('qty').value;

            if (harga && qty) {
                var total = parseFloat(harga) * parseInt(qty);
                document.getElementById('total').value = 'Rp ' + new Intl.NumberFormat().format(total);
            }
        }
    </script>





      <!-- Javascript files-->
      <script src="{{'template/landing/js/jquery.min.js'}}"></script>
      <script src="{{'template/landing/js/popper.min.js'}}"></script>
      <script src="{{'template/landing/js/bootstrap.bundle.min.js'}}"></script>
      <script src="{{'template/landing/js/jquery-3.0.0.min.js'}}"></script>
      <script src="{{'template/landing/js/plugin.js'}}"></script>
   </body>
</html>
