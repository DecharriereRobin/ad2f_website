
<!--**************** OPEN EXTRA SMALL HEADER **************************-->    
<!-- OPEN HEADER-->
<main>
  <div class="visible-xs-block">
    <div class="container-fluid">
      <h1 class="hidden_title_h1">association des deux faubourgs</h1>
      <!-- Top -->
        <div class="row">
          <div class="top_logo col-xs-12"> <!-- LOGO --> </div>      	
        </div> <!-- Close Row -->
      <!-- Close Top -->

      <!-- OPEN NAV -->
        <div class="row">
          <nav class="nav">
            <p class="title_nav_menu">MENU</p>
            <div class="dropdown_xs">
              <div class="col-xs-6">      
                <p class="para_title">
                  L'ASSOCIATION
                </p>
                 
                    <p class="para_lien_dropdown"><a href="<?= $this->url('association_home') ?>">PRÉSENTATION</a></p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('association_contact') ?>">CONTACT</a></p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('association_adhesion') ?>">ADHÉSION</a></p>                
              </div>
              <div class="col-xs-6">      
                <p class="para_title">
                  LES ÉVÉNEMENTS
                </p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('eventViewer_carnaval') ?>">CARNAVAL</a></p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('eventViewer_fetes') ?>">FÊTE DU QUARTIER</a></p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('eventViewer_braderie') ?>">BRADERIE</a></p> 
              </div>
              <div class="col-xs-6">      
                <p class="para_title">
                  AGENDA
                </p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('agenda_soon') ?>">ÉVÉNEMENTS À VENIR</a></p>
                    <p class="para_lien_dropdown"><a href="<?= $this->url('agenda_meeting') ?>">RÉUNIONS DE L'ASSO</a></p>
              </div>
              <div class="col-xs-6">      
                <p class="para_title">
                  PARTICIPER
                </p>
                    <p class="para_lien_dropdown"><a href="">ADHÉRER À L'ASSO</a></p>
                    <p class="para_lien_dropdown"><a href="">S'INSCRIRE À LA BRADERIE</a></p>
              </div>
              <div class="col-xs-6">      
                <p class="para_title">
                  LE BON COIN
                </p>               
                    <p class="para_lien_dropdown"><a href="#">(COMMING SOON)</a></p>
                    <p class="para_lien_dropdown border_bottom_dropdown"><a href="#">(COMMING SOON)</a></p>
              </div>
            </div> <!-- Close Dropdown -->
          </nav> <!-- Close Nav -->
        </div> <!-- Close Row -->
      <!-- END NAV -->
  </div>
  </div>
<!-- CLOSE HEADER-->
<!--**************** CLOSE EXTRA SMALL HEADER **************************-->

<!--**************** OPEN SMALL AND MEDIUM HEADER **************************-->

<!-- OPEN HEADER-->
  <div class="visible-sm-block visible-md-block">
    <div class="container-fluid">
      
        <div class="row">
          <div class="top_logo col-sm-4">
            <img src="<?= $this->assetUrl('front/img/header/logo_sm_and_md.png') ?>" alt="logo association des deux faubourgs">
          </div>
          <div class="col-sm-8">   
            <h1>association des deux faubourgs</h1>
          </div>
        </div> <!-- Close Row -->
      <!-- Close Top -->

  <!-- NAV SMALL -->
  <nav class="navbar navbar-default">
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
                <li><a href="association_presentation.php">PRÉSENTATION</a></li>
                <li><a href="association_contact.php">CONTACT</a></li>
                <li><a href="association_adhesion.php">ADHÉSION</a></li>
              </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LES&nbsp;ÉVÉNEMENTS</a>
              <ul class="dropdown-menu ul_dropdown_evenements">
                <li><a href="#">CARNAVAL</a></li>
                <li><a href="#">FÊTE DU QUARTIER</a></li>
                <li><a href="#">BRADERIE</a></li>
              </ul>
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
  </div>
  </div>
<!-- CLOSE HEADER-->
<!--**************** CLOSE SMALL AND MEDIUM HEADER **************************-->

<!--**************** OPEN LARGE HEADER **************************-->
<div class="visible-lg-block">

  <!-- NAV SMALL AND MEDIUM AND LARGE -->
  <nav class="navbar navbar-default">
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
                <li><a href="association_presentation.php">PRÉSENTATION</a></li>
                <li><a href="association_contact.php">CONTACT</a></li>
                <li><a href="association_adhesion.php">ADHÉSION</a></li>
              </ul>
          </li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LES&nbsp;ÉVÉNEMENTS</a>
              <ul class="dropdown-menu ul_dropdown_evenements">
                <li><a href="#">CARNAVAL</a></li>
                <li><a href="#">FÊTE DU QUARTIER</a></li>
                <li><a href="#">BRADERIE</a></li>
              </ul>
          </li>

          <li  id="site-logo" class="hidden-xs">
            <img id="logo-navbar-middle" src="<?= $this->assetUrl('front/img/header/logo_lg.png') ?>" width="257" alt="Logo association des 2 faubourgs">
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
</div>
</main>
<!--************************* CLOSE LARGE HEADER *****************************-->

