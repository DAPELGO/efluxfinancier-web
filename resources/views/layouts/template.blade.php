<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Phoenix</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../../../vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../../vendors/simplebar/simplebar.min.js"></script>
    <script src="../../../assets/js/config.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../../vendors/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../../vendors/choices/choices.min.css" rel="stylesheet">
    <link href="../../../vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
      var phoenixIsRTL = window.config.config.phoenixIsRTL;
      if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-vertical navbar-expand-lg">
          <script>
            var navbarStyle = window.config.config.phoenixNavbarStyle;
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          @include('layouts.nav')
          <div class="navbar-vertical-footer">
            <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-0"></span><span class="uil uil-arrow-from-right fs-0"></span><span class="navbar-vertical-footer-text ms-2">Collapsed View</span></button>
          </div>
        </nav>
        @include('layouts.header')
        <div class="modal fade" id="searchBoxModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="true" data-phoenix-modal="data-phoenix-modal" style="--phoenix-backdrop-opacity: 1;">
          <div class="modal-dialog">
            <div class="modal-content mt-15 rounded-pill">
              <div class="modal-body p-0">
                <div class="search-box navbar-top-search-box" data-list='{"valueNames":["title"]}' style="width: auto;">
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search rounded-pill form-control-lg" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                  </form>
                  <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
                    <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
                  </div>
                  <div class="dropdown-menu border border-300 font-base start-0 py-0 overflow-hidden w-100">
                    <div class="scrollbar-overlay" style="max-height: 30rem;">
                      <div class="list pb-3">
                        <h6 class="dropdown-header text-1000 fs--2 py-2">24 <span class="text-500">results</span></h6>
                        <hr class="text-200 my-0" />
                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Recently Searched </h6>
                        <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"><span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> Store Macbook</div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"> <span class="fa-solid fa-clock-rotate-left" data-fa-transform="shrink-2"></span> MacBook Air - 13″</div>
                            </div>
                          </a>

                        </div>
                        <hr class="text-200 my-0" />
                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Products</h6>
                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="file-thumbnail me-2"><img class="h-100 w-100 fit-cover rounded-3" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 text-1000 title">MacBook Air - 13″</h6>
                              <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600">8GB Memory - 1.6GHz - 128GB Storage</span></p>
                            </div>
                          </a>
                          <a class="dropdown-item py-2 d-flex align-items-center" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="file-thumbnail me-2"><img class="img-fluid" src="../../../assets/img/products/60x60/3.png" alt="" /></div>
                            <div class="flex-1">
                              <h6 class="mb-0 text-1000 title">MacBook Pro - 13″</h6>
                              <p class="fs--2 mb-0 d-flex text-700"><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                            </div>
                          </a>

                        </div>
                        <hr class="text-200 my-0" />
                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Quick Links</h6>
                        <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"><span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Support MacBook House</div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"> <span class="fa-solid fa-link text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                            </div>
                          </a>

                        </div>
                        <hr class="text-200 my-0" />
                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Files</h6>
                        <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"><span class="fa-solid fa-file-zipper text-900" data-fa-transform="shrink-2"></span> Library MacBook folder.rar</div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"> <span class="fa-solid fa-file-lines text-900" data-fa-transform="shrink-2"></span> Feature MacBook extensions.txt</div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"> <span class="fa-solid fa-image text-900" data-fa-transform="shrink-2"></span> MacBook Pro_13.jpg</div>
                            </div>
                          </a>

                        </div>
                        <hr class="text-200 my-0" />
                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Members</h6>
                        <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                            <div class="avatar avatar-l status-online  me-2 text-900">
                              <img class="rounded-circle " src="../../../assets/img/team/40x40/10.webp" alt="" />

                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 text-1000 title">Carry Anna</h6>
                              <p class="fs--2 mb-0 d-flex text-700">anna@technext.it</p>
                            </div>
                          </a>
                          <a class="dropdown-item py-2 d-flex align-items-center" href="../../../pages/members.html">
                            <div class="avatar avatar-l  me-2 text-900">
                              <img class="rounded-circle " src="../../../assets/img/team/40x40/12.webp" alt="" />

                            </div>
                            <div class="flex-1">
                              <h6 class="mb-0 text-1000 title">John Smith</h6>
                              <p class="fs--2 mb-0 d-flex text-700">smith@technext.it</p>
                            </div>
                          </a>

                        </div>
                        <hr class="text-200 my-0" />
                        <h6 class="dropdown-header text-1000 fs--1 border-bottom border-200 py-2 lh-sm">Related Searches</h6>
                        <div class="py-2"><a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"><span class="fa-brands fa-firefox-browser text-900" data-fa-transform="shrink-2"></span> Search in the Web MacBook</div>
                            </div>
                          </a>
                          <a class="dropdown-item" href="../../../apps/e-commerce/landing/product-details.html">
                            <div class="d-flex align-items-center">

                              <div class="fw-normal text-1000 title"> <span class="fa-brands fa-chrome text-900" data-fa-transform="shrink-2"></span> Store MacBook″</div>
                            </div>
                          </a>

                        </div>
                      </div>
                      <div class="text-center">
                        <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
          @yield('content')
          <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900"><small> Tous droits reservés<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="https://themewagon.com">EFLUX</a></small></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.0.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <script>
            window.onload = function() {
                // dropzoneFormis the configuration for the element that has an id attribute
                // with the value dropzone-form (or dropzoneForm)
                //initialize the dropzone;
                Dropzone.options.dropzoneForm = {
                        autoProcessQueue: 'your value',
                        acceptedFiles: 'your value',
                        maxFilesize: 'your value',
                        init: function() {
                        myDropzone = this;

                        this.on('addedfile', function(file) {
                            //todo...something...
                        });
                        //catch other events here...
                        }
                };
            };

            document.addEventListener("DOMContentLoaded", function() {
                Dropzone.options.dropzone = {
                    url: "/admin/update-product",
                    method: "POST",
                    maxFilesize: 2, // 2 MB
                    paramName: "file",
                    uploadMultiple: true,
                    acceptedFiles: ".jpeg,.jpg,.png,.pdf", // Allowed extensions
                    success: function(file, response){ // Dropzone upload response
                        var jsonObj = JSON.parse(response);
                        alert(jsonObj);
                        if(jsonObj.status == 0){
                                alert(jsonObj.msg);
                        }
                    }
            };
            });


    </script>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../vendors/feather-icons/feather.min.js"></script>
    <script src="../../../vendors/dayjs/dayjs.min.js"></script>
    <script src="../../../vendors/tinymce/tinymce.min.js"></script>
    <script src="../../../vendors/dropzone/dropzone.min.js"></script>
    <script src="../../../vendors/choices/choices.min.js"></script>
    <script src="../../../assets/js/phoenix.js"></script>
  </body>
</html>
