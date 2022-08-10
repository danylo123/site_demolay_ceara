<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid text-uppercase">
        <a class="navbar-brand" href="?page=inicio"><img src="assets/img/favicons/icone.png" alt="" width="30" height="30" class="d-inline-block align-text-top"></a>
        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if ($url[0] == 'demolay') {
                                            echo 'active';
                                        } ?>" aria-current="page" href="?page=demolay">Ordem Demolay</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url[0] == 'gce') {
                                            echo 'active';
                                        } ?>" href="?page=gce">GCE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url[0] == 'cavalaria') {
                                            echo 'active';
                                        } ?>" href="?page=cavalaria">Ordem da Cavalaria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url[0] == 'fale_conosco') {
                                            echo 'active';
                                        } ?>" href="?page=fale_conosco">Fale Conosco</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://webmail.demolayceara.org.br/">Webmail</a>
                </li>
            </ul>
            <div class="d-flex">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                <a href="http://sis-dev.demolayceara.org.br" target="_blank" class="btn btn-outline-success">Acesso Restrito</a>
            </div>
        </div>
    </div>
</nav>