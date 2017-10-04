
					
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
		


	<!--************************************
				Light Box Start				
	*************************************-->
	<div class="tg-modal tg-appointmentlightbox"  >
		<div class="modal-dialog tg-modaldialog">
			<div class="modal-content tg-modalcontent">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
				<h2>Prenez Rendez-vous!</h2>
				<form autocomplete="off" accept-charset="utf-8" class="tg-formbookappointmen" id="bookingform">
					<ul class="tg-formprogressbar">
						<li class="tg-active"><span>Demande de Rendez-vous</span></li>
						<li><span>Identification</span></li>
						<li><span>Verification</span></li>
						<li><span>Demande Envoyé</span></li>
					</ul>
					<fieldset class="tg-formstepone tg-current">
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
									<input type="text" name="patientName" id="patientName" class="form-control" placeholder="Nom du patient*" required>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12 tg-columnpadding" >
								<div class="form-group" id="affiliation">
									<div class="tg-select" >
										<select name="affiliation"   placeholder="Votre affiliation" required>
											<option value="">votre affiliation*</option>
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
										<select name="site" required>
											<option value="">Lieu*</option>
											<option value="SIT00000001">Clinique st bernard</option>
											<option value="">Clinique st jean</option>
											
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-12 tg-columnpadding">
								<div class="form-group">
									<div class="tg-select">
										<select name="motif" required>
											<option value="">Motif:*</option>
											<option value="CON00000001">Consultation</option>
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
										<time datetime="2011-10-10" name="dat"><?php $apt_dt = date('d-m-Y'); echo $apt_dt; ?></time>
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
											<input type="radio" id="firstavailableslot5" name="firstavailableslot" value="<?php $apt_tm = '11:00'; echo $apt_tm; ?>">
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
							<button type="button" id="suivant_1" class="tg-btn tg-btnnext">Suivant</button>
						</div>
					</fieldset>
					<fieldset class="tg-formsteptwo">
						
						<div class="tg-dashboardtabs">
										<ul class="tg-dashboardtabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#login" aria-controls="login" role="tab" data-toggle="tab">Connectez-vous</a>
											</li>
											<li role="presentation">
												<a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Inscrivez-vous</a>
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

							<div class="tg-btnbox">
							<button type="button" id="coninuer" class="tg-btn tg-btnnext">Continuer</button>
							<button type="button" id="precedent" class="tg-btn tg-btnprevious">Précedant</button>
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
							<div class="tg-btnbox">
							<button type="button" id="inscrire" class="tg-btn tg-btnnext">s'enregistrer</button>
							<button type="button" id="precedent" class="tg-btn tg-btnprevious">Précedant</button>
					      	</div>

						</div>

						</div>

										<!-- end signup form -->
			
						
							</div>

						
					</fieldset>
					<fieldset class="tg-formstepthree">
						<div class="row">
							<div class="col-sm-12 col-xs-12">
			<div class="tg-appointmentapprove tg-modal">
		<div class="modal-dialog tg-modaldialog">
			<div class="modal-content tg-modalcontent">
				<div class="tg-tablescroll">
					<div class="tg-favoritlistingbox">
						<div class="tg-invoicestitle">
							<span>Nom du Docteur</span>
							<span class="tg-titleamount">Nom du Patient</span>
							<span class="tg-titleaction">Affiliation</span>
						</div>
						<ul class="tg-favoritlist">
							<li>
								<div class="tg-favotirelistcontent">
									<figure><a href="#"><img src="images/thumbnails/img-21.jpg" alt="image description"></a></figure>
									<div class="tg-listdata">
										<h4><a href="#">Cinda Landgraf</a></h4>
										<span>Social Worker at Rival Links</span>
									</div>
								</div>
								<div class="tg-amout">
									<em>Nom_Patient</em>
								</div>
								<div class="tg-patientrelation">
									<span>Cinda Landgraf</span>
									<span>Husband</span>
								</div>
							</li>
						</ul>
						<div class="tg-visitreason">
							<div class="tg-leftbox">
								<h4>Motif</h4>
								<span>Consultations</span>
							</div>
							<div class="tg-rightbox">
								<time datetime="2017-12-12">Jan 11, 2017 @ 09:00</time>
							</div>
						</div>
						<div class="tg-description">
							<p>Commentaire: ......Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo conequats aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Apteur sint occaecat cupidatat non proident, sunt in culpa qui officia. deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium, totami rem aperiam, eaque ipsa quae.</p>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</div>
							</div>
							
						</div>
						<div class="tg-btnbox">
							<button type="button" id="envoyer" class="tg-btn tg-btnnext">Envoyer</button>
							<button type="button" id ="modifier" value="submit" class="tg-btn tg-btnprevious">Modifier</button>
						</div>
					</fieldset>
					<fieldset class="tg-formstepfour">
						<h3>Demande de Rendez-Vous Envoyé</h3>
						<?php echo _AJAX_.'booking.php'; ?>
						<div class="tg-description" >
							<p id="bookingConfirm"></p>
						</div>
						<div class="tg-regardbox" id ="stage2">
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
									<input type="hidden" value="<?php echo _AJAX_.'booking.php'; ?>" id="aj_url">
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
	<?php echo CHtml::script('open'); ?>
	
		
		
	$(document).ready(function(){






	    $("#myself").prop("checked", true) ;
	    $("#affiliation").hide();
			
		$("#myself").on("click", function(){
        $("#myself").prop("checked", true) ;
        $("#someoneelse").prop("checked", false) ;	
        $("#affiliation").hide();

        }); 

    	$("#someoneelse").on("click", function(){
    	$("#someoneelse").prop("checked", true) ;
        $("#myself").prop("checked", false) ;	
        $("#affiliation").show();



        });


			//ajax function to book appointment



            $("#envoyer").click(function(event){


            	var url = $('#aj_url').val();
				 
               $.ajax({ 
               	  cache: false,
               	  method: 'POST',
               	  url: '<?php echo WEB.'?ajax_request='.md5('booking');?>',
               	  data: {data : $("#bookingform").serialize()},
               	  
               		 
                  success: function(data){

                  					$('#bookingConfirm').html(data);
                  }

                  });
					
               var str = $("#bookingform").serialize();
               $("#stage2").text(str);
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




	
	<?php echo CHtml::script('close'); ?>
	
</body>

