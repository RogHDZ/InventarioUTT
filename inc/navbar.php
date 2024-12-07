<nav class="navbar" role="navigation" aria-label="main navigation">

    <div class="navbar-brand">
    <a  class="navbar-brnd" href="index.php?vista=user_search">
      <img src="./img/logoutt.png" style="margin-left: 20px; margin-top: 15px;" width="250" height="550">
    </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Usuarios</a> 

                <div class="navbar-dropdown">
                    <a href="index.php?vista=user_new" class="navbar-item">Nuevo</a>
                <a href="index.php?vista=user_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=user_search" class="navbar-item">Buscar</a>
                </div>
            </div>

            <!-- <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Edificios</a>

                <div class="navbar-dropdown">
                    <a href="index.php?vista=category_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=category_list" class="navbar-item">Lista</a>  
                    <a href="index.php?vista=category_search" class="navbar-item">Buscar</a>
                </div>
            </div> -->

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Mobiliario</a> 

                <div class="navbar-dropdown">
                    <a href="index.php?vista=product_new" class="navbar-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="navbar-item">Lista</a>
                    <a href="index.php?vista=product_category" class="navbar-item">Por aula</a>
                    <a href="index.php?vista=product_search" class="navbar-item">Buscar</a>
                </div>
            </div>

        </div>

        <div class="navbar-end" style="margin-right: 20px; margin-top: 10px;">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                        Mi cuenta
                    </a>

                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>