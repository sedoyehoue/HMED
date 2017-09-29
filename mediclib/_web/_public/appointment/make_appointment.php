
					
<?PHP
// 					$a= array("1","2","3");
// print_r($a);

// echo '<br/>';
// $b=serialize($a);
// echo $b;

// echo '<br/>';
// $c=unserialize($b);
// print_r($c);

// $d=array('CON00000001','CON00000002','CON00000003');
// $e= serialize($d);

// echo '<br/>';

// echo $e;
// echo '<br/>';

// $f='DOC00000011';
// $table = DBPREF.'doctors';
// echo $table;
// echo '<br/>';


// $row = Sql::query('UPDATE `'.DBPREF.'doctors` SET DOC_CON_CODE = '.$sql->Param('1').' WHERE DOC_CODE ='.$sql->Param('2').' ', array($e, $f) );

// if($row){echo 'succeed';
// }
// else{echo 'nooooooo';}

// echo '<br/>';


// $row = Sql::select('SELECT  DOC_CON_CODE  FROM `'.DBPREF.'doctors` WHERE DOC_CODE ='.$sql->Param('2').' ', array($f), 'row' );

// $result = $row;

// echo $result{0};
// echo '<br/>';
// echo '<br/>';

// $c=unserialize($result{0});
// print_r($c);

//Run this program its echo the output

//a:3:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";}	
?>
		

		<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<form class="tg-formtheme tg-formsearch">
							<fieldset>
								<div class="tg-select">
									<select>
										<option>Doctors</option>
										<option>Hospitals</option>
										<option>Phramacy</option>
										<option>Clinics</option>
										<option>Blood Banks</option>
									</select>
								</div>
								<div class="tg-select">
									<select>
										<option>Dentist</option>
										<option>Specilist</option>
										<option>Heart Surgeon</option>
										<option>neurologist</option>
									</select>
								</div>
								<div class="tg-select">
									<select>
										<option value="">Select Location</option>
										<option value="aberdeen">Aberdeen</option>
										<option value="aldershot">Aldershot</option>
										<option value="altrincham">Altrincham</option>
										<option value="aylesbury">Aylesbury</option>
										<option value="bamber">Bamber</option>
										<option value="bangor">Bangor</option>
										<option value="batley">Batley</option>
										<option value="bebingto">Bebingto</option>
										<option value="bedford">Bedford</option>
										<option value="birmingham">Birmingham</option>
										<option value="blackpool">Blackpool</option>
										<option value="brentwood">Brentwood</option>
										<option value="bristol">Bristol</option>
										<option value="cardiff">Cardiff</option>
										<option value="carlisle">Carlisle</option>
										<option value="crawley">Crawley</option>
										<option value="darlington">Darlington</option>
										<option value="eastleigh">Eastleigh</option>
										<option value="edinburg">Edinburg</option>
										<option value="esher">Esher</option>
										<option value="glasgow-sco">Glasgow SCO</option>
										<option value="guildford">Guildford</option>
										<option value="halesowen">Halesowen</option>
										<option value="halifax">Halifax</option>
										<option value="hamilton">Hamilton</option>
										<option value="leeds">Leeds</option>
										<option value="leicester">Leicester</option>
										<option value="liverpool">Liverpool</option>
										<option value="london">London</option>
										<option value="louisville">Louisville</option>
										<option value="manchester">Manchester</option>
										<option value="sheffield">Sheffield</option>
									</select>
								</div>
								<div class="tg-select">
									<select>
										<option>City/State</option>
										<option>Manchester</option>
										<option>Birmingham</option>
										<option>Bradford</option>
									</select>
								</div>
								<input type="text" name="category" class="form-control" placeholder="Specialities, Doctors, Hospitals, Labs, Spas...">
								<button type="submit" class="tg-btnformsearch"><i class="fa fa-search"></i></button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
					Inner Banner End			
		*************************************-->
		<!--************************************
						Main Start				
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-pagehead">
								<p>25486 matches found for:  <span>Dentist in Manchester</span></p>
							</div>
						</div>
						<div class="col-sm-4">
							<aside id="tg-sidebar" class="tg-sidebar">
								<form class="tg-themeform tg-formrefinesearch">
									<h3>Narrow Your Search</h3>
									<fieldset>
										<h4>Appointment Type</h4>
										<span class="tg-radio">
											<input type="radio" id="instant" name="appointment" value="instant" checked>
											<label for="instant">Instant Appointment</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="oncall" name="appointment" value="oncall">
											<label for="oncall">On Call Appointment</label>
										</span>
									</fieldset>
									<fieldset>
										<h4>Availability</h4>
										<span class="tg-checkbox">
											<input type="checkbox" id="any" name="availability" value="Any" checked>
											<label for="any">Any</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="monday" name="availability" value="Monday">
											<label for="monday">Monday</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="tuesday" name="availability" value="Tuesday">
											<label for="tuesday">Tuesday</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="wednesday" name="availability" value="Wednesday">
											<label for="wednesday">Wednesday</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="thursday" name="availability" value="Thursday">
											<label for="thursday">Thursday</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="friday" name="availability" value="Friday">
											<label for="friday">Friday</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="saturday" name="availability" value="Saturday">
											<label for="saturday">Saturday</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="sunday" name="availability" value="Sunday">
											<label for="sunday">Sunday</label>
										</span>
										<div class="tg-uislider">
											<div id="tg-timerangeslider" class="tg-timerangeslider tg-themerangeslider">
												<div class="sliders_step1">
													<div id="slider-range"></div>
												</div>
											</div>
											<div class="tg-amountbox">
												<span>Time Range: </span>
												<span class="tg-timeslider">9:00 AM</span> - <span class="tg-timeslider2">5:00 PM</span>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<h4>Gender</h4>
										<span class="tg-checkbox">
											<input type="checkbox" id="allgender" name="gender" value="all gender">
											<label for="allgender">All</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="male" name="gender" value="male">
											<label for="male">Male</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="female" name="gender" value="female">
											<label for="female">Female</label>
										</span>
									</fieldset>
									<fieldset>
										<h4>Consultation Fee</h4>
										<div id="tg-consultationfeerangeslider" class="tg-consultationfeerangeslider tg-themerangeslider"></div>
										<div class="tg-amountbox">
											<span>Fee Range: </span>
											<input type="text" id="tg-consultationfeeamount" readonly>
										</div>
									</fieldset>
									<fieldset>
										<h4>Rating</h4>
										<div class="tg-ratingcheckbox">
											<span class="tg-checkbox">
												<input type="checkbox" id="allrating" name="ratingfilter" value="allrating" checked>
												<label for="allrating">all</label>
											</span>
											<span class="tg-checkbox">
												<input type="checkbox" id="onestar" name="ratingfilter" value="onestar">
												<label for="onestar"><span class="tg-stars"><span></span></span></label>
											</span>
											<span class="tg-checkbox">
												<input type="checkbox" id="twostar" name="ratingfilter" value="twostar">
												<label for="twostar"><span class="tg-stars"><span></span></span></label>
											</span>
											<span class="tg-checkbox">
												<input type="checkbox" id="threestar" name="ratingfilter" value="threestar">
												<label for="threestar"><span class="tg-stars"><span></span></span></label>
											</span>
											<span class="tg-checkbox">
												<input type="checkbox" id="fourstar" name="ratingfilter" value="fourstar">
												<label for="fourstar"><span class="tg-stars"><span></span></span></label>
											</span>
											<span class="tg-checkbox">
												<input type="checkbox" id="fivestar" name="ratingfilter" value="fivestar">
												<label for="fivestar"><span class="tg-stars"><span></span></span></label>
											</span>
										</div>
									</fieldset>
									<fieldset>
										<h4>Radius</h4>
										<div id="tg-radiusrangeslider" class="tg-radiusrangeslider tg-themerangeslider"></div>
										<div class="tg-amountbox">
											<span>Distance in (Miles): </span>
											<input type="text" id="tg-radiusamount" readonly>
										</div>
									</fieldset>
									<fieldset>
										<h4>Language</h4>
										<span class="tg-checkbox">
											<input type="checkbox" id="alllanguages" name="languages" value="all languages" checked>
											<label for="alllanguages">all</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="chinese" name="languages" value="Chinese">
											<label for="chinese">Chinese</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="czech" name="languages" value="Czech">
											<label for="czech">Czech</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="arabic" name="languages" value="Arabic">
											<label for="arabic">Arabic</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="english" name="languages" value="English">
											<label for="english">English</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="french" name="languages" value="French">
											<label for="french">French</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="spanish" name="languages" value="Spanish">
											<label for="spanish">Spanish</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="russian" name="languages" value="Russian">
											<label for="russian">Russian</label>
										</span>
									</fieldset>
									<fieldset>
										<button class="tg-btn" type="reset">reset all</button>
										<button class="tg-btn" type="submit">apply filter</button>
									</fieldset>
								</form>
							</aside>
						</div>
						<div class="col-sm-8">
							<div id="tg-content" class="tg-content">
								<div class="tg-searchresult">
									<div class="tg-directposts">
										<div class="tg-directpost">
											<figure class="tg-directpostimg">
												<a href="#"><img src="images/directpost/img-01.jpg" alt="image description"></a>
												<figcaption>
													<a class="tg-usericon tg-iconfeatured" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-bolt"></i>
															<span>featured</span>
														</em>
													</a>
													<a class="tg-usericon tg-iconvarified" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-shield"></i>
															<span>varified</span>
														</em>
													</a>
												</figcaption>
											</figure>
											<div class="tg-directinfo">
												<div class="tg-leftarea">
													<div class="tg-directposthead">
														<h3><a href="#">Dr. Steve Northrop</a></h3>
														<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
													</div>
													<ul class="tg-contactinfo">
														<li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
														<li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
													</ul>
												</div>
												<div class="tg-rightarea">
													<div class="tg-bookappoinment">
														<a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
														<button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
														<ul class="tg-metadata">
															<li><span class="tg-stars"><span></span></span></li>
															<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="tg-directpost">
											<figure class="tg-directpostimg">
												<a href="#"><img src="images/directpost/img-02.jpg" alt="image description"></a>
												<figcaption>
													<a class="tg-usericon tg-iconfeatured" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-bolt"></i>
															<span>featured</span>
														</em>
													</a>
													<a class="tg-usericon tg-iconvarified" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-shield"></i>
															<span>varified</span>
														</em>
													</a>
												</figcaption>
											</figure>
											<div class="tg-directinfo">
												<div class="tg-leftarea">
													<div class="tg-directposthead">
														<h3><a href="#">Dr. Steve Northrop</a></h3>
														<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
													</div>
													<ul class="tg-contactinfo">
														<li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
														<li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
													</ul>
												</div>
												<div class="tg-rightarea">
													<div class="tg-bookappoinment">
														<a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
														<button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
														<ul class="tg-metadata">
															<li><span class="tg-stars"><span></span></span></li>
															<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="tg-directpost">
											<figure class="tg-directpostimg">
												<a href="#"><img src="images/directpost/img-03.jpg" alt="image description"></a>
												<figcaption>
													<a class="tg-usericon tg-iconfeatured" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-bolt"></i>
															<span>featured</span>
														</em>
													</a>
													<a class="tg-usericon tg-iconvarified" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-shield"></i>
															<span>varified</span>
														</em>
													</a>
												</figcaption>
											</figure>
											<div class="tg-directinfo">
												<div class="tg-leftarea">
													<div class="tg-directposthead">
														<h3><a href="#">Dr. Steve Northrop</a></h3>
														<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
													</div>
													<ul class="tg-contactinfo">
														<li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
														<li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
													</ul>
												</div>
												<div class="tg-rightarea">
													<div class="tg-bookappoinment">
														<a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
														<button type="button" class="tg-btn">Available on Call</button>
														<ul class="tg-metadata">
															<li><span class="tg-stars"><span></span></span></li>
															<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="tg-directpost">
											<figure class="tg-directpostimg">
												<a href="#"><img src="images/directpost/img-04.jpg" alt="image description"></a>
												<figcaption>
													<a class="tg-usericon tg-iconfeatured" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-bolt"></i>
															<span>featured</span>
														</em>
													</a>
													<a class="tg-usericon tg-iconvarified" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-shield"></i>
															<span>varified</span>
														</em>
													</a>
												</figcaption>
											</figure>
											<div class="tg-directinfo">
												<div class="tg-leftarea">
													<div class="tg-directposthead">
														<h3><a href="#">Dr. Steve Northrop</a></h3>
														<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
													</div>
													<ul class="tg-contactinfo">
														<li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
														<li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
													</ul>
												</div>
												<div class="tg-rightarea">
													<div class="tg-bookappoinment">
														<a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
														<button type="button" class="tg-btn" data-toggle="modal" data-target="#tg-appointmentlightbox">Book Appointment</button>
														<ul class="tg-metadata">
															<li><span class="tg-stars"><span></span></span></li>
															<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="tg-directpost">
											<figure class="tg-directpostimg">
												<a href="#"><img src="images/directpost/img-05.jpg" alt="image description"></a>
												<figcaption>
													<a class="tg-usericon tg-iconfeatured" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-bolt"></i>
															<span>featured</span>
														</em>
													</a>
													<a class="tg-usericon tg-iconvarified" href="#">
														<em class="tg-usericonholder">
															<i class="fa fa-shield"></i>
															<span>varified</span>
														</em>
													</a>
												</figcaption>
											</figure>
											<div class="tg-directinfo">
												<div class="tg-leftarea">
													<div class="tg-directposthead">
														<h3><a href="#">Dr. Steve Northrop</a></h3>
														<div class="tg-subjects">MDS - Paedodontics &amp; Preventive Dentistry</div>
													</div>
													<ul class="tg-contactinfo">
														<li><a href="#"><i class="fa fa-location-arrow"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
														<li><a href="#"><i class="fa fa-phone"></i><span>+4 235 856843</span></a></li>
													</ul>
												</div>
												<div class="tg-rightarea">
													<div class="tg-bookappoinment">
														<a href="#"><i class="fa fa-thumbs-o-up"></i>99%<span>(1009 votes)</span></a>
														<button type="button" class="tg-btn">Available on Call</button>
														<ul class="tg-metadata">
															<li><span class="tg-stars"><span></span></span></li>
															<li><a href="#"><i class="fa fa-heart tg-like"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
						Main End				
		*************************************-->

	<!--************************************
				Light Box Start				
	*************************************-->
	<div class="modal tg-modal tg-appointmentlightbox fade" id="tg-appointmentlightbox" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-modaldialog">
			<div class="modal-content tg-modalcontent">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
				<h2>Prenez Rendez-vous!</h2>
				<form method="post" autocomplete="off" accept-charset="utf-8" class="tg-formbookappointment">
					<ul class="tg-formprogressbar">
						<li class="tg-active"><span>Demande de Rendez-vous</span></li>
						<li><span>Identification</span></li>
						<li><span>Code de Verification</span></li>
						<li><span>Demande Envoyé</span></li>
					</ul>
					<fieldset class="tg-formstepone tg-current">
						<h3>Motif de Consultation</h3>
						<div class="row tg-rowmargin">
							<div class="col-sm-4 col-xs-12 tg-columnpadding">
								<div class="form-group">
									<div class="tg-patienttype">
										<strong>Le Patient est:*</strong>
										<span class="tg-checkbox">
											<input type="checkbox" id="myself" name="patient_is" value="myself">
											<label for="myself">Moi-même</label>
										</span>
										<span class="tg-checkbox">
											<input type="checkbox" id="someoneelse" name="patient_is" value="someoneelse">
											<label for="someoneelse">Autre</label>
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12 tg-columnpadding">
								<div class="form-group">
									<input type="text" name="patientName" class="form-control" placeholder="Nom du patient:*" required>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12 tg-columnpadding" id="relation">
								<div class="form-group">
									<div class="tg-select">
										<select name="relation" placeholder="His/Her Relation">
											<option value="">votre relation*</option>
											<option value="Family">Famille</option>
											<option value="Friend">Ami(e)</option>
											<option value="Colleague">Collègue</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12 tg-columnpadding">
								<div class="form-group">
									<div class="tg-select">
										<select name="site_rdv" required>
											<option value="">Lieu de RDV*</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12 tg-columnpadding">
								<div class="form-group">
									<div class="tg-select">
										<select name="motif" required>
											<option value="">Motif:*</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 tg-columnpadding">
								<div class="form-group">
									<textarea class="form-control" placeholder="Commentaire:"></textarea>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 tg-columnpadding">
								<div class="tg-timeslothead">
									<h3>Choississez la date et l'horaire de votre RDV</h3>
									<span class="tg-checkbox">
										<input type="checkbox" id="firstavailableslot" name="firstavailableslot" value="">
										<label for="firstavailableslot">Selectionnez le 1er horaire disponible</label>
									</span>
								</div>
							</div>
							<div class="col-sm-12 col-xs-12 tg-columnpadding">
								<div class="tg-dateandtimeslots">
									<div class="tg-datebox">
										<time datetime="2011-10-10">June 27, Wednesday</time>
										<span>11 Available</span>
										<i class="fa fa-calendar-check-o"></i>
									</div>
									<div class="tg-timeslots">
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot1" name="firstavailableslot" value="09:00" disabled>
											<label for="firstavailableslot1">09:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot2" name="firstavailableslot" value="09:30" disabled>
											<label for="firstavailableslot2">09:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot3" name="firstavailableslot" value="10:00" disabled>
											<label for="firstavailableslot3">10:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot4" name="firstavailableslot" value="10:30" disabled>
											<label for="firstavailableslot4">10:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot5" name="firstavailableslot" value="11:00">
											<label for="firstavailableslot5">11:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot6" name="firstavailableslot" value="11:30">
											<label for="firstavailableslot6">11:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot7" name="firstavailableslot" value="12:00">
											<label for="firstavailableslot7">12:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot8" name="firstavailableslot" value="12:30">
											<label for="firstavailableslot8">12:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot9" name="firstavailableslot" value="01:00">
											<label for="firstavailableslot9">01:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot10" name="firstavailableslot" value="01:30">
											<label for="firstavailableslot10">01:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot11" name="firstavailableslot" value="02:00">
											<label for="firstavailableslot11">02:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot12" name="firstavailableslot" value="02:30">
											<label for="firstavailableslot12">02:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot13" name="firstavailableslot" value="03:00">
											<label for="firstavailableslot13">03:00</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot14" name="firstavailableslot" value="03:30">
											<label for="firstavailableslot14">03:30</label>
										</span>
										<span class="tg-radio">
											<input type="radio" id="firstavailableslot15" name="firstavailableslot" value="04:00">
											<label for="firstavailableslot15">04:00</label>
										</span>
										
									</div>
								</div>
							</div>
						</div>
						<div class="tg-btnbox">
							<button type="button" class="tg-btn tg-btnnext">Suivant</button>
						</div>
					</fieldset>
					<fieldset class="tg-formsteptwo">
						
						<div class="tg-dashboardtabs">
										<ul class="tg-dashboardtabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#login" aria-controls="login" role="tab" data-toggle="tab">Connectez-vous</a>
											</li>
											<li role="presentation">
												<a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">SInscrivez-vous</a>
											</li>
										</ul>

										<div class="tab-content tg-dashboardtabcontent">

											<!-- login form	 -->
									
										<div role="tabpanel" class="tab-pane active" id="login">
							<div class="col-sm-6 tg-columnpadding" >
								<div class="form-group">
									<input type="email" name="p_username" class="form-control" placeholder="votre Email*">
								</div>
							</div>

			
							<div class="col-sm-6 tg-columnpadding">
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Votre mot de passe*">
								</div>
							</div>

							<div class="col-sm-12 col-xs-12">
								<span class="tg-checkbox">
									<input type="checkbox" id="confirmez_donnees" name="confirmez_donnees" value="confirmez_donnees">
									<label for="remember">J'accepte la Politique relative à la protection des données personnelles de Mediclib.</label> </span>			
							</div>	

							<div class="col-sm-12 col-xs-12">
								<span class="tg-checkbox">
									<input type="checkbox" id="remember" name="remember" value="remember">
									<label for="remember">Se souvenir de moi sur cet appareil</label> </span>
							</div>

							</div>

							<!-- End login form -->

							<!-- signup form -->

											<div role="tabpanel" class="tab-pane " id="signup">

													<div class="col-sm-6 tg-columnpadding">
								<div class="form-group">
								<input type="email" name="p_username" class="form-control" placeholder="votre Email*">
								</div>
							</div>
							<div class="col-sm-6 tg-columnpadding">
								<div class="form-group">
									
									<input type="text" name="p_tel" class="form-control onlynums" placeholder="Telephone portable*">
								</div>
							</div>

							<div class="col-sm-6 tg-columnpadding">
								<div class="form-group">

									<input type="password" name="password" class="form-control" placeholder="votre mot de passe*">
								</div>
							</div>
							<div class="col-sm-6 tg-columnpadding">
								<div class="form-group">
									<input type="password" name="retypepassword" class="form-control" placeholder="Confirmez votre mot de passe*">
								</div>
							</div>
							<div class="col-sm-12 col-xs-12">
								<span class="tg-checkbox">
									<input type="checkbox" id="remember" name="remember" value="remember">
									<label for="remember">Se souvenir de moi sur cet appareil</label>
								</span>
							</div>

										</div>

										</div>

										<!-- end signup form -->
			
						
							</div>

						<div class="tg-btnbox">
							<button type="button" class="tg-btn tg-btnnext">Suivant</button>
							<button type="button" class="tg-btn tg-btnprevious">Précedant</button>
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
							<button type="button" value="submit" class="tg-btn tg-btnprevious">previous Step</button>
						</div>
					</fieldset>
					<fieldset class="tg-formstepfour">
						<h3>Demande de Rendez-Vous Envoyé</h3>
						<div class="tg-description">
							<p>Consectetur adipisicing elit sent to <a href="#">yourmail@domain.com</a> and your appointment ID is <a href="#">2124539</a> incididunt ut labore et dolore magna aliqua enim adminim ayiam quis nostrud exercitation commodo.</p>
						</div>
						<div class="tg-regardbox">
							<span>Regard</span>
							<strong class="tg-logo"><a href="#"><img src="images/logos.png" alt="image description"></a></strong>
							<ul class="tg-contactdetail">
								<li>
									<i class="fa fa-phone"></i>
									<em>+4 212 245155 - 6</em>
								</li>
								<li>
									<i class="fa fa-envelope-o"></i>
									<a href="mailto:query@domain.com">query@domain.com</a>
								</li>
								<li>
									<i class="fa fa-laptop"></i>
									<a href="www.mediurl.html">www.mediurl.com</a>
								</li>
							</ul>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!--************************************
				Light Box End				
	*************************************-->
	<script>
		
		
		$(document).ready(function(){


	$("#myself").prop("checked", true) ;
			
								$("#myself").on("click", function(){
        $("#myself").prop("checked", true) ;
        $("#someoneelse").prop("checked", false) ;	
        $("#relation").show();

    }); 

    	$("#someoneelse").on("click", function(){
    	$("#someoneelse").prop("checked", true) ;
     $("#myself").prop("checked", false) ;	
     $("#relation").hide();
   });




       // $("#signup").hide();

     // ALLOW ONLY NUMBERS
if($('.onlynums')){

				$('.onlynums').keypress(function(event){
        this.value = this.value.replace(/[^0-9\./*+-]/g,'');
	});

	   $('.onlynums').keydown(function(event){
        this.value = this.value.replace(/[^0-9\./*+-]/g,'');
	});
	   
    $('.onlynums').keyup(function(event){
        this.value = this.value.replace(/[^0-9\./*+-]/g,'');
	});

   }

    
});




	</script>
	
</body>

