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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icons/armoirie-bf.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/icons/armoirie-bf.png') }}">
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
        </nav>
        @include('layouts.header')
        <div class="content bg-white" style="padding-top: 3.2rem;">
          @yield('content')
          <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900"><small> Tous droits reservés<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023 &copy;<a class="mx-1" href="#">EFLUX FINANCIER</a> Ministère de la santé et de l'hygiène publique. BF</small></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600"><small class="text-700">v1.0</small></p>
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
    <script src="../../../vendors/echarts/echarts.min.js"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=revenueMapInit" async></script>
    <script src="../../../assets/js/ecommerce-dashboard.js"></script>
    <script src="../../../assets/js/jquery/jquery.min.js"></script>

    <script>
        $(function(){
            $("#montant_livre").keyup(function(event) {
                var montant_livre = $("#montant_livre").val();
                var solde_actuel_banque = $("#solde_actuel_banque").val();
                var solde_actuel_caisse = $("#solde_actuel_caisse").val();
            });

            // CHANGE CREANCE DETTE
            $("#id_type_creancedette").change(function(){
                var id_type_creancedette = $(this).val();

                if(id_type_creancedette == {{ env('IDTYPECREANCE') }}){
                    $("#type_creancedette").val("Creance");
                    $("#val_id_type_dette").hide();
                    $("#val_id_type_creance").show();
                }else if(id_type_creancedette == {{ env('IDTYPEDETTE') }}){
                    $("#type_creancedette").val("Dette");
                    $("#val_id_type_creance").hide();
                    $("#val_id_type_dette").show();
                }
            });

            // CHANGE OPERATION ACTION
            $("#id_type_operation").change(function(){
                var id_type_operation = $(this).val();

                if(id_type_operation == {{ env('IDTYPEOPERATIONDE') }}){
                    $("#action_livre").val("Dépense");
                    $("#disabled_action").val('Dépense');
                }else if(id_type_operation == {{ env('IDTYPEOPERATIONRE') }}){
                    $("#action_livre").val("Recettes");
                    $("#disabled_action").val('Recettes');
                }else if(id_type_operation == {{ env('IDTYPEOPERATIONMI') }}){
                    $("#action_livre").val("Mouvement interne");
                    $("#disabled_action").val('Mouvement interne');
                }
            });
        });

        /************ BEGIN SELECT CHARGEMENT SOUS TABLES **************************/
            // Région
            function changeValue(parent, child, table_item)
            {
                // alert(0);
                var idparent_val = $("#"+parent).val();
                // alert(idparent_val);
                var table = table_item;

                var url = '{{ route('root.selection') }}';

                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {idparent_val: idparent_val, table:table},
                    dataType: 'json',
                    error:function(data){alert("Erreur");},
                    success: function (data) {
                        var data = data.data;
                        if(table == 'langue') {
                            var content = '';
                            for (var x = 0; x < data.length; x++) {
                                if(data[x]['id'] !='') {
                                    content += '<div class="radio-custom radio-primary"><input type="radio" id="'+data[x]['id']+'" name="langue[]" value="'+data[x]['id']+'"><label class="no-fw" for="'+data[x]['id']+'">'+data[x]['name']+'</label></div>';
                                }
                            }

                            $('#'+child).html(content);

                        }else{
                            var options = '<option value="" selected>--- Choisir une valeur </option>';
                            for (var x = 0; x < data.length; x++) {
                                if(data[x]['id'] !='') {
                                    options += '<option value="' + data[x]['id'] + '">' + data[x]['name'] + '</option>';
                                }
                            }
                            $('#'+child).html(options);
                        }

                    }
                });
            }
        /************ END SELECT CHARGEMENT SOUS TABLES **************************/
    </script>

  </body>
</html>
