<header id="tg-header" class="tg-header tg-haslayout">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12"> <strong class="tg-logo"> <a href="<?php echo WEB; ?>"><img src="<?php echo _WEB_.'img/logo.png'; ?>" alt="image description"></a> </strong>
        <div class="tg-navigationarea">
          <nav id="tg-nav" class="tg-nav">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
              <ul>
                <li><a href="<?php echo WEB.'appointment/make_appointment'; ?>">Vous êtes praticien?</a></li>
                <li><a href="<?php echo WEB.'how-it-works'; ?>">Comment ça marche?</a></li>
                <li><a href="<?php echo WEB.'about'; ?>">A propos</a></li>
              </ul>
            </div>
          </nav>
          <?php if(Session::get('m_d_l_account') == true){ ?>
          <div class="tg-admin">
            <div class="tg-user">
              <div class="tg-dropdown">
                <figure class="tg-adminpic"> <span class="tg-dashboardbadge hide">3</span> <a href="<?php echo WEB.'user/dashboard'; ?>"><img src="<?php echo _WEB_.''; ?>img/icons/icon-41.png" alt="image description"></a> </figure>
                <a href="javascript:void(0);" class="tg-usermenu tg-btndropdown"> <em>howdy, Anjela doe!</em> </a>
                <div class="dropdown-menu tg-dropdownbox tg-usermenu">
                  <ul>
                    <li> <a href="<?php echo WEB.'user/dashboard'; ?>"> <i class="fa fa-line-chart"></i> <span>Insights</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/settings'; ?>"> <i class="fa fa-user"></i> <span>Profile settings</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/jobs-locations'; ?>"> <i class="fa fa-location-arrow"></i> <span>Job Locations</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/inbox'; ?>"> <i class="fa fa-envelope-o"></i> <span>Private Messages</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/appointments'; ?>"> <i class="fa fa-calendar-check-o"></i> <span>Appointments</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/appoinment-setting'; ?>"> <i class="fa fa-gear"></i> <span>Appointment Settings</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/favourite-listing'; ?>"> <i class="fa fa-heart"></i> <span>Favourite Listings</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/invoices'; ?>"> <i class="fa fa-clone"></i> <span>Invoices</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/upgrade-package'; ?>"> <i class="fa fa-arrow-up"></i> <span>Update Package</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/security-settings'; ?>"> <i class="fa fa-gears"></i> <span>Security Settings</span> </a> </li>
                    <li> <a href="<?php echo WEB.'user/privacy-settings'; ?>"> <i class="fa fa-eye"></i> <span>Privacy Settings</span> </a> </li>
                    <li> <a href="<?php echo WEB.'login/logout'; ?>"> <i class="fa fa-sign-out"></i> <span>Se Déconnecter</span> </a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php }else{ ?>
          <div class="tg-admin">

            <div class="tg-user">
              <div class="tg-dropdown"> <a href="<?php echo WEB.'login/login'; ?>" class="tg-usermenu"> <em><i class="fa fa-sign-in"></i> <span>Se connecter</span></em> </a> </div>
            </div>

          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</header>
