<!DOCTYPE html>
<html lang="en">
<head><script src="../../resources/libs/bootstrap/site/static/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Publicación</title>

    <link href="../../resources/scss/styles.css" rel="stylesheet" >
    <link href="../../resources/styles/style.css" rel="stylesheet" >
</head>
<body>
    
    <!--Inicia iconos-->
    <?php
        require_once('iconos.php')
    ?>
    <!--Termina iconos-->

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
                id="bd-theme"
                type="button"
                aria-expanded="false"
                data-bs-toggle="dropdown"
                aria-label="Toggle theme (auto)">
          <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
          <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
              Light
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
              Dark
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
          <li>
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
              <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
              Auto
              <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
            </button>
          </li>
        </ul>
    </div>

    <!--Inicia NavbarAdmin-->
    <?php
        require_once('navAdmin.php')
    ?>
    <!--Termina NavbarAdmin-->

    <div class="container-fluid">
        <div class="row">
            <!--Inicia Sidebar-->
            <?php
                require_once('sideAdmin.php')
            ?>
            <!--Termina Sidebar Admin-->
            
            <!--Inicia main-->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                      <div class="btn-group me-2">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="#" style="text-decoration: none;">
                            Crear 
                            <svg class="bi" style="width: 1em; height: 1em;"><use xlink:href="#file-earmark"/></svg>
                        </a>
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="#" style="text-decoration: none;">
                            Exportar 
                        </a>
                      </div>
                      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
                        <svg class="bi" style="width: 1em; height: 1em;"><use xlink:href="#calendar3"/></svg>
                        This week
                      </button>
                    </div>
                </div>

                <h2>Section title</h2>
                
            </main>
            <!--Termina main-->
        </div>
    </div>
    
</body>
</html>