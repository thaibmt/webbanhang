<!DOCTYPE html>
<html>
   <head>
      
    
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="icon" type="image/png" sizes="16x16" href="https://gokisoft.com/uploads/2021/03/s-568-ico-web.jpg">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>{{ $title }}</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('themes/frontend/css/bootstrap.css') }}" />
      <!-- font awesome style -->
      <link href="{{ asset('themes/frontend/css/font-awesome.min.css') }}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{ asset('themes/frontend/css/style.css') }}" rel="stylesheet" />
      <link href="{{ asset('themes/frontend/css/style1.css') }}" rel="stylesheet" />

      <!-- responsive style -->
      <link href="{{ asset('themes/frontend/css/responsive.css') }}" rel="stylesheet" />

      <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/css/reset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/lib/font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/lib/jquery.bxslider/jquery.bxslider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/lib/owl.carousel/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/lib/jquery-ui/jquery-ui.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/lib/fancyBox/source/jquery.fancybox.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/hoaqua/css/green.css') }}"/>
      <style type="text/css">
        nav.items-center {
            margin-top: 30px;
            display: flex;
        }

        nav.items-center .justify-between {
            display: none;
        }

        nav.items-center .relative.inline-flex span {
            float: left;
            width: 50px !important;
            height: 45px !important;
            text-align: center;
        }

        nav.items-center svg {
            max-width: 30px !important;
        }

        nav.items-center a {
            color: black !important;
            width: 50px !important;
            height: 45px !important;
            text-align: center;
            float: left;
        }
      </style>

      @yield('css')
   </head>
   <body>
      <div class="{{ $mainClass }}">
         <!-- header section strats -->
         <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left" style="margin-left:40px">
                            <ul href="https://www.facebook.com/tnelectric.com.vn">
                                <li><i class="fa fa-envelope" ></i>Tủ Điện Công Nghiệp Thiên Nam</li>
                                <li><i style="font-size: 16px;" class="fa fa-phone"></i>Call:+84 963.520.485</li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right" style="margin-right:20px;margin-top:5px">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/tnelectric.com.vn"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.facebook.com/tnelectric.com.vn"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/tnelectric.com.vn"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/tnelectric.com.vn"><i class="fa fa-yahoo"></i></a>
                            </div>
                            <div class="header__top__right__language">
                              <img width="22" height="18" src="{{ asset('themes/hoaqua/images/product-detail/vegetables/covietnam.jpg') }}" />
                                <div>Việt Nam</div>
                                
                                <ul>
                                    <li><a href="#">Việt Nam</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth" >
                              @if(auth()->check())
                              @isset(Auth::user()->name)
                            <b>{{ Auth::user()->name }}</b>
                           <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><i class="mdi mdi-logout m-r-5 m-l-5"></i>
                                   Thoát</a>
                            @else
                               @if(Session::has('ten_kh'))
                               {{Session::get('ten_kh')}}
                                @endif
                               @endisset 
                              @else
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                              <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                              </svg> 
                              <a href="{{ route('login') }}"> Đăng Nhập</a>
                              @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="{{ route('home_index') }}"><img style='margin-top:-20px;margin-left:30px' width="140"  src="{{ asset('themes/frontend/images/logo2.png') }}" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent" style='margin-top:20px;font-size:16px'>
                     <ul class="navbar-nav">
                        <li class="nav-item  ">
                           <a class="nav-link" href="{{ route('home_index') }}">Trang Chủ <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about">Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('frontend.products') }}">Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('frontend.news') }}">Tin Tức</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('frontend.contact') }}">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                           @if($cartNum > 0)
                              <label class="badge bg-danger" style="position: absolute; top: 17px; color: white;font-size:14px">{{ $cartNum }}</label>
                           @endif
                           <a class="nav-link" href="{{ route('frontend.cart') }}">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <form class="form-inline" action="{{route('frontend.search')}}">
                           <input style='width:180px;height:30px;border-radius: 10px;' name="s" placeholder="Tìm kiếm từ khóa..."/>
                           <button   class="btn btn-success" type="submit" style='border-radius: 10px;;margin-left: 6px; margin-bottom: 20px;'>Tìm Kiếm </button>
                             
                        </form>   
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        </form>    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                        </form>   
                                  
                     </ul>
                  </div>
               </nav>
            </div>
         </header>

         <!-- end header section -->
         @yield('slider')
      </div>
      
      @yield('main-content')
      <!-- footer start -->
      <footer style=''>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="130" src="{{ asset('themes/frontend/images/logo2.png') }}" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>Địa Chỉ:</strong> Minh Quang - Tam Đảo - Vĩnh Phúc</p>
                        <p><strong>Phone:</strong> +84 389665732</p>
                        <p><strong>Email:</strong> td33284@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Trang Của Tôi</h3>
                        <ul>
                           <li><a href="{{ route('home_index') }}">Trang Chủ</a></li>
                           <li><a href="{{ route('frontend.products') }}">Sản Phẩm</a></li>
                           <li><a href="{{ route('frontend.news') }}">Tin Tức</a></li>
                           <li><a href="{{ route('frontend.contact') }}">Liên Hệ</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Tin Mới Nhất</h3>
                        <ul>
                           <li><a href="#">Tài Khoản</a></li>
                           <li><a href="#">Đăng Nhập</a></li>
                           <li><a href="#">Đăng Ký</a></li>
                           <li><a href="#">Shopping</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>Bản Tin</h3>
                        <div class="information_f">
                          <p>Theo dõi bản tin của chúng tôi và nhận thông tin cập nhật.</p>
                        </div>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter Your Mail" name="email" />
                                    <input type="submit" value="Subscribe" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://www.facebook.com/DoTrungThanh.TamDao">Đỗ Trung Thành Vĩnh Phúc</a>
         </p>
      </div>
      <!-- jQery -->
      <script src="{{ asset('themes/frontend/js/jquery-3.4.1.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ asset('themes/frontend/js/popper.min.js') }}"></script>
      <!-- bootstrap js -->
      <script src="{{ asset('themes/frontend/js/bootstrap.js') }}"></script>
      <!-- custom js -->
      <script src="{{ asset('themes/frontend/js/custom.js') }}"></script>
      <script type="text/javascript" src="{{ asset('themes/hoaqua/lib/jquery/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/lib/fancyBox/source/jquery.fancybox.pack.js') }}" ></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/lib/select2/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/lib/jquery.bxslider/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/lib/owl.carousel/owl.carousel.min.js') }}"></script>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/js/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('themes/hoaqua/js/theme-script.js') }}"></script>
      @yield('js')
   </body>
</html>