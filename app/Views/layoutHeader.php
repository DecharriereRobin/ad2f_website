
<!-- NAV mdALL AND MEDIUM AND LARGE -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav nav-justified navbar-nav center-block">

          <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">L'ASSOCIATION</a>
              <ul class="dropdown-menu ul_dropdown_association">
                <li><a href="#">PRÉSENTATION</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">ADHÉSION</a></li>
              </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LES&nbsp;ÉVÉNEMENTS</a>
              <ul class="dropdown-menu ul_dropdown_evenements">
                <li><a href="#">CARNAVAL</a></li>
                <li><a href="#">FÊTE DU QUARTIER</a></li>
                <li><a href="#">BRADERIE</a>
                    <ul class="dropdown-menu ul_dropdown_evenements">
                        <li><a href="#">S'INSCRIRE</a>
                    </ul>
                </li>


              </ul>
          </li>

          <li  id="site-logo" class="hidden-xs">
            <img id="logo-navbar-middle" src="<?= $this->assetUrl('img/header/Logo_Ad2f_good.png') ?>" width="257" alt="Logo association des 2 faubourgs">
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AGENDA</a>
              <ul class="dropdown-menu  ul_dropdown_agenda">
                <li class=ul_li_agenda><a href="#">ÉVÉNEMENTS À VENIR</a></li>
                <li><a href="#">RÉUNIONS DE L'ASSO</a></li>
              </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PARTICIPER</a>
              <ul class="dropdown-menu ul_dropdown_participer">
                <li><a href="#">ADHÉRER À L'ASSO</a></li>
                <li><a href="#">S'INSCRIRE À LA BRADERIE</a></li>
              </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LE&nbsp;BON&nbsp;COIN</a>
              <ul class="dropdown-menu ul_dropdown_boncoin">
                <li><a href="#">(COMING SOON)</a></li>
                <li><a href="#">(COMING SOON)</a></li>
              </ul>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<!-- Close NAV -->