<?php include(_TEMPL_.'head.php'); ?>
<body class="tg-home tg-login">
<!--<div class="preloader-outer">
  <div class="pin"></div>
  <div class="pulse"></div>
</div>-->
<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
  <?php include(_TEMPL_.'header.php'); ?>
  <?php
	if( file_exists($content) == true ){
		include($content);
	}else{
		include(_PUBLIC_.'404.php');
	}
	?>
  <footer id="tg-footer" class="tg-footer tg-haslayout">
   
    <div class="tg-quicklinks">
      <div class="container">
        <div class="row">
          <div class="tg-fcols">
            <div class="tg-fcol"> <strong class="tg-logo"> <a href="<?php echo WEB; ?>"><img src="<?php echo _WEB_.'img/logo.png'; ?>" alt="image description"></a> </strong>
              <ul class="tg-contactinfo">
                <li><a href="#"><i class="fa fa-location-arrow"></i>
                  <address>
                  Consectetur aelit 2456, AC1255 Manchester, UK
                  </address>
                  </a></li>
                <li><a href="#"><i class="fa fa-phone"></i><span>+4 423 5215 652 - 8</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i><span>info@domain.com</span></a></li>
                <li><a href="#"><i class="fa fa-fax"></i><span>+4 551 5215 652</span></a></li>
              </ul>
              <ul class="tg-socialsharewithtext">
                <li class="tg-facebook"> <a class="tg-roundicontext" href="#"> <em class="tg-usericonholder"> <i class="fa fa-facebook-f"></i> <span>share on facebook</span> </em> </a> </li>
                <li class="tg-twitter"> <a class="tg-roundicontext" href="#"> <em class="tg-usericonholder"> <i class="fa fa-twitter"></i> <span>share on twitter</span> </em> </a> </li>
                <li class="tg-linkedin"> <a class="tg-roundicontext" href="#"> <em class="tg-usericonholder"> <i class="fa fa-linkedin"></i> <span>share on linkdin</span> </em> </a> </li>
                <li class="tg-googleplus"> <a class="tg-roundicontext" href="#"> <em class="tg-usericonholder"> <i class="fa fa-google-plus"></i> <span>share on googl+</span> </em> </a> </li>
                <li class="tg-rss"> <a class="tg-roundicontext" href="#"> <em class="tg-usericonholder"> <i class="fa fa-rss"></i> <span>share on RSS</span> </em> </a> </li>
                <li class="tg-youtube"> <a class="tg-roundicontext" href="#"> <em class="tg-usericonholder"> <i class="fa fa-youtube-play"></i> <span>share on YouTube</span> </em> </a> </li>
              </ul>
            </div>
            <div class="tg-fcol tg-specialities">
              <div class="tg-title">
                <h3>Top Specialities</h3>
              </div>
              <ul>
                <li><a href="#">Arnos Grove</a></li>
                <li><a href="#">Dalston</a></li>
                <li><a href="#">Balham</a></li>
                <li><a href="#">Denmark Hill</a></li>
                <li><a href="#">Barkingside</a></li>
                <li><a href="#">Derry Downs</a></li>
                <li><a href="#">Barnes Cray</a></li>
              </ul>
              <ul>
                <li><a href="#">East Bedfont</a></li>
                <li><a href="#">Camden Town</a></li>
                <li><a href="#">Eden Park</a></li>
                <li><a href="#">Canonbury</a></li>
                <li><a href="#">View All</a></li>
              </ul>
            </div>
            <div class="tg-fcol tg-latestlistings">
              <div class="tg-title">
                <h3>Latest Listings</h3>
              </div>
              <ul>
                <li>
                  <figure class="tg-authordp"> <img src="<?php echo _WEB_.''; ?>img/directpost/img-08.jpg" alt="image description"> </figure>
                  <div class="tg-directposthead">
                    <h3><a href="#">Dr. Steve Northrop</a></h3>
                    <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                  </div>
                </li>
                <li>
                  <figure class="tg-authordp"> <img src="<?php echo _WEB_.''; ?>img/directpost/img-09.jpg" alt="image description"> </figure>
                  <div class="tg-directposthead">
                    <h3><a href="#">Dr. Steve Northrop</a></h3>
                    <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                  </div>
                </li>
                <li>
                  <figure class="tg-authordp"> <img src="<?php echo _WEB_.''; ?>img/directpost/img-10.jpg" alt="image description"> </figure>
                  <div class="tg-directposthead">
                    <h3><a href="#">Dr. Steve Northrop</a></h3>
                    <div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
                  </div>
                </li>
              </ul>
              <a class="tg-btnviewmore" href="javascript:void(0);">View All <i class="fa fa-angle-double-right"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tg-footerbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12">
            <nav id="tg-footernav" class="tg-footernav">
              <ul>
                <li class="tg-active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">How It Works?</a></li>
                <li><a href="#">Categories</a></li>
              </ul>
            </nav>
            <span class="tg-copyright">2017 All Rights Reserved &copy; <a href="#">MedLink Direct</a></span> </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<div class="modal tg-modal tg-appointmentlightbox fade" id="tg-appointmentlightbox" tabindex="-1" role="dialog">
  <div class="modal-dialog tg-modaldialog">
    <div class="modal-content tg-modalcontent">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
      <h2>Book Your Appointment!</h2>
      <form class="tg-formbookappointment">
        <ul class="tg-formprogressbar">
          <li class="tg-active"><span>Request Appointment</span></li>
          <li><span>Verify Your Password</span></li>
          <li><span>Verify Code</span></li>
          <li><span>Complete</span></li>
        </ul>
        <fieldset class="tg-formstepone tg-current">
          <h3>What Would You Like To See The Doctor For?</h3>
          <div class="row tg-rowmargin">
            <div class="col-sm-4 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <div class="tg-patienttype"> <strong>Patient is:*</strong> <span class="tg-radio">
                  <input type="radio" id="myself" name="myself" value="Myself">
                  <label for="myself">Myself</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="someoneelse" name="someoneelse" value="Someone Else">
                  <label for="someoneelse">Someone Else</label>
                  </span> </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <input type="text" name="text" class="form-control" placeholder="His/Her Name">
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <div class="tg-select">
                  <select>
                    <option value="">His/Her Relation</option>
                    <option value="">His/Her Relation</option>
                    <option value="">His/Her Relation</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <div class="tg-select">
                  <select>
                    <option value="">Where to visit:*</option>
                    <option value="">Where to visit:*</option>
                    <option value="">Where to visit:*</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <div class="tg-select">
                  <select>
                    <option value="">Appointment Type:*</option>
                    <option value="">Appointment Type:*</option>
                    <option value="">Appointment Type:*</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <div class="tg-select">
                  <select>
                    <option value="">Reason for visit:*</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-xs-12 tg-columnpadding">
              <div class="form-group">
                <textarea class="form-control" placeholder="Comments:"></textarea>
              </div>
            </div>
            <div class="col-sm-12 col-xs-12 tg-columnpadding">
              <div class="tg-timeslothead">
                <h3>Select Best Time To See The Doctor</h3>
                <span class="tg-checkbox">
                <input type="checkbox" id="firstavailableslot" name="firstavailableslot" value="">
                <label for="firstavailableslot">Appoint First Available Time</label>
                </span> </div>
            </div>
            <div class="col-sm-12 col-xs-12 tg-columnpadding">
              <div class="tg-dateandtimeslots">
                <div class="tg-datebox">
                  <time datetime="2011-10-10">June 27, Wednesday</time>
                  <span>11 Available</span> <i class="fa fa-calendar-check-o"></i> </div>
                <div class="tg-timeslots"> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot1" name="firstavailableslot" value="09:00" disabled>
                  <label for="firstavailableslot1">09:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot2" name="firstavailableslot" value="09:30" disabled>
                  <label for="firstavailableslot2">09:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot3" name="firstavailableslot" value="10:00" disabled>
                  <label for="firstavailableslot3">10:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot4" name="firstavailableslot" value="10:30" disabled>
                  <label for="firstavailableslot4">10:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot5" name="firstavailableslot" value="11:00">
                  <label for="firstavailableslot5">11:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot6" name="firstavailableslot" value="11:30">
                  <label for="firstavailableslot6">11:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot7" name="firstavailableslot" value="12:00">
                  <label for="firstavailableslot7">12:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot8" name="firstavailableslot" value="12:30">
                  <label for="firstavailableslot8">12:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot9" name="firstavailableslot" value="01:00">
                  <label for="firstavailableslot9">01:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot10" name="firstavailableslot" value="01:30">
                  <label for="firstavailableslot10">01:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot11" name="firstavailableslot" value="02:00">
                  <label for="firstavailableslot11">02:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot12" name="firstavailableslot" value="02:30">
                  <label for="firstavailableslot12">02:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot13" name="firstavailableslot" value="03:00">
                  <label for="firstavailableslot13">03:00</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot14" name="firstavailableslot" value="03:30">
                  <label for="firstavailableslot14">03:30</label>
                  </span> <span class="tg-radio">
                  <input type="radio" id="firstavailableslot15" name="firstavailableslot" value="04:00">
                  <label for="firstavailableslot15">04:00</label>
                  </span> </div>
              </div>
            </div>
          </div>
          <div class="tg-btnbox">
            <button type="button" class="tg-btn tg-btnnext">Next Step</button>
          </div>
        </fieldset>
        <fieldset class="tg-formsteptwo">
          <h3>Verify Is That You?</h3>
          <div class="row tg-rowmargin">
            <div class="col-sm-6 tg-columnpadding">
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password*">
              </div>
            </div>
            <div class="col-sm-6 tg-columnpadding">
              <div class="form-group">
                <input type="password" name="retypepassword" class="form-control" placeholder="Retype Password*">
              </div>
            </div>
            <div class="col-sm-12 col-xs-12"> <span class="tg-checkbox">
              <input type="checkbox" id="remember" name="remember" value="remember">
              <label for="remember">Trust This Computer For Next Time</label>
              </span> </div>
          </div>
          <div class="tg-btnbox">
            <button type="button" class="tg-btn tg-btnnext">Next Step</button>
            <button type="button" class="tg-btn tg-btnprevious">previous Step</button>
          </div>
        </fieldset>
        <fieldset class="tg-formstepthree">
          <h3>Enter Authentication Code</h3>
          <div class="row">
            <div class="col-sm-12 col-xs-12">
              <div class="tg-description">
                <p>Consectetur adipisicing elit sed do eiusmod tempor code sent to <a href="#">yourmail@domain.com</a> incididunt ut labore et dolore magna aliqua enim adminim ayiam quis nostrud exercitation commodo.</p>
              </div>
            </div>
            <div class="col-sm-12 col-xs-12">
              <input type="text" name="code" class="form-control" placeholder="Enter Authentication Code Here">
            </div>
          </div>
          <div class="tg-btnbox">
            <button type="button" class="tg-btn tg-btnnext">Next Step</button>
            <button type="button" class="tg-btn tg-btnprevious">previous Step</button>
          </div>
        </fieldset>
        <fieldset class="tg-formstepfour">
          <h3>Appointment Confirmed</h3>
          <div class="tg-description">
            <p>Consectetur adipisicing elit sent to <a href="#">yourmail@domain.com</a> and your appointment ID is <a href="#">2124539</a> incididunt ut labore et dolore magna aliqua enim adminim ayiam quis nostrud exercitation commodo.</p>
          </div>
          <div class="tg-regardbox"> <span>Regard</span> <strong class="tg-logo"><a href="#"><img src="<?php echo _WEB_.''; ?>img/logos.png" alt="image description"></a></strong>
            <ul class="tg-contactdetail">
              <li> <i class="fa fa-phone"></i> <em>+4 212 245155 - 6</em> </li>
              <li> <i class="fa fa-envelope-o"></i> <a href="mailto:query@domain.com">query@domain.com</a> </li>
              <li> <i class="fa fa-laptop"></i> <a href="www.mediurl.html">www.mediurl.com</a> </li>
            </ul>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<?php include _TEMPL_.'footer.php'; ?>
</body>

</html>