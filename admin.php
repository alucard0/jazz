<!DOCTYPE html>
<html lang="es">

<head>
  <!--metas-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Somefriends">
  <meta name="description" content="Parker&Lenox Restaurante, bar y foro de música en la Ciudad de México (CDMX). La mejor experiencia en un espacio lleno de magia y las mejores presentaciones en vivo.">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <!-- Metadatos Facebook-->
  <meta property="og:url" content="http://parker-lenox.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Parker & Lenox" />
  <meta property="og:description" content="Restaurante, bar y foro de música en la Ciudad de México (CDMX). La mejor experiencia en un espacio lleno de magia y las mejores presentaciones en vivo." />
  <meta property="og:image" content="http://parker-lenox.com/images/content/mainBG-desk.jpg" />

  <!-- Metadatos Twitter-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@parkerandlenox">
  <meta name="twitter:creator" content="@parkerandlenox">
  <meta name="twitter:title" content="Parker & Lenox">
  <meta name="twitter:description" content="Restaurante, bar y foro de música en la Ciudad de México (CDMX). La mejor experiencia en un espacio lleno de magia y las mejores presentaciones en vivo.">
  <meta name="twitter:image" content="http://parker-lenox.com/images/content/mainBG-desk.jpg">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin | Parker & Lenox</title>
  <!--css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
  <link rel="stylesheet" href="css/admin-main.css">


  <!--fonts-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <!--js-->

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="images/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137244781-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-137244781-1');
  </script>
</head>

<body>
  <section id="login" class="container-fluid">
    <div class="row align-items-center justify-content-center contenido-login">
      <div class="login-wrapper">
        <h1 class="text-center">Iniciar sesión</h1>
        <form id="login-form">
          <div class="form-group">
            <label for="email">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="correo@ejemplo.com" value="" required />
            <p class="error"></p>
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" value="" required />
            <p class="error"></p>
          </div>
          <button type="button" id="btnEnviar" class="btn btn-primary btn-lg float-right">Enviar</button>
        </form>
        <p class="error"></p>
      </div>
    </div>
  </section>

  <section id="admin" class="container-fluid">
    <div class="row ">
      <div class="col-12 p-0">
        <header>
          <p class="welcome-text">Bienvenido usuario</p>
          <button id="logout" class="btn btn-primary btn-lg">Cerrar Sesión</button>
        </header>
      </div>
    </div>

    <div class="admin-container">
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="information"><strong>¡Éxito!</strong>  </p>
      </div>

      <ul class="nav nav-tabs" id="adminTabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="show-tab" data-toggle="tab" href="#show" role="tab" aria-controls="show" aria-selected="true">Espectáculos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="reservations-tab" data-toggle="tab" href="#reservations" role="tab" aria-controls="reservations" aria-selected="false">Reservaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="false">General</a>
        </li>
      </ul>
      <div class="tab-content" id="adminTabsContent">
        <div class="tab-pane fade show active" id="show" role="tabpanel" aria-labelledby="show-tab">
          <div class="container-fluid" id="list-show">
            <div class="row">
              <div class="col-12">
                <div class="row row--margin-top-bottom justify-content-end">
                  <button type="button" id="add-show" class="btn btn-primary btn-lg"><i class="mdi mdi-plus icon--margin-right"></i>Agregar Espectáculo</button>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="table-responsive">
                <table id="table-shows" class="table table--with-70 table-hover">
                  <thead>
                    <th>Artista</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th></th>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="container-fluid" id="add-newShow">
            <div class="row">
              <div class="col-12">
                <p class="title">Crear nuevo espectáculo</p>
                <form action="" class="form-add-newshow" enctype="multipart/form-data">
                  <div class="form-row justify-content-center">
                    <fieldset class="col-12 col-md-6 col-xl-3 mr-sm-3">
                      <div class="form-group">
                        <label for="nameShow" class="label">Nombre espectáculo</label>
                        <input id="nameShow" type="text" class="form-control input-text" placeholder="Espectáculo" maxlength="50" required/>
                        <p class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="img-mobile" class="label">Imagen Móvil</label>
                        <input id="img-mobile" type="file" class="form-control input-text" accept=".png,.jpg"  required/>
                        <p class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="img-desktop" class="label">Imagen Desktop</label>
                        <input id="img-desktop" type="file" class="form-control input-text" accept=".png,.jpg" required/>
                        <p class="error"></p>
                      </div>
                      <div class="form-group">
                        <label for="money" class="label">Costo <span class="small-info">($0.00 = No cover)</span></label>
                        <input id="money" type="text" class="form-control input-text" value="$0.00" maxlength="100" />
                      </div>

                      <div class="form-group">
                        <label for="nameShow" class="label">Género(s) del espectáculo</label>
                        
                        <select id="multiple-checkboxes" multiple="multiple">
                        </select>
                        <p class="error"></p>
                      </div>
                    </fieldset>

                    <fieldset class="col-12 col-md-6 col-xl-6">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-xl-7">
                            <div class="labels">
                              <label for="dateShow" class="label">Fecha(s) del espectáculo</label>
                              <label for="dateShow" class="label">Hora del espectáculo</label>
                            </div>

                            <div id="dateShow"></div>
                            <p class="error"></p>
                            <div class="col-12">
                              <div class="row row--margin-top-bottom justify-content-end">
                                <button type="button" id="addDateTime" class="btn btn--margin-top btn-primary btn-lg"><i class="mdi mdi-plus icon--margin-right"></i>Agregar fecha</button>
                              </div>
                            </div>

                          </div>
                          <div class="col-xl-4 col--border-red">
                            <label class="label">Fecha(s) capturadas</label>
                            <ol id="date-timeShowList">

                            </ol>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <fieldset class="col-12 col-md-6 col-xl-8">
                      <div class="col-12">
                        <div class="row justify-content-end">
                          <button type="button" id="cancel-new-show" class="btn btn--margin-right btn-secundary btn-lg">Cancelar</button>
                          <button type="button" id="save-new-show" class="btn btn-primary btn-lg">Guardar</button>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </form>
              </div>
            </div>

          </div>

        </div>
        <div class="tab-pane fade" id="reservations" role="tabpanel" aria-labelledby="reservations-tab">
          <div class="container-fluid" id="list-reservation">
            <div class="row">
              <div class="col-12">
                <div class="row row--margin-top-bottom justify-content-end">
                  <button type="button" id="add-show" class="btn btn-primary btn-lg"><i class="mdi mdi-plus icon--margin-right"></i>Descargar Excel</button>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="table-responsive">
              <table id="table-reservation" class="table table--with-70 table-hover">
                  <thead>
                    <th>Cliente</th>
                    <th>Espectáculo</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th></th>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>  
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">...

        </div>
      </div>
    </div>

  </section>

  <!--js-->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
  <script src="js/utils.js"></script>
  <script src="js/login.js"></script>
  <script src="js/shows.js"></script>
  <script src="js/genre.js"></script>
  <script src="js/reservation.js"></script>
</body>

</html>