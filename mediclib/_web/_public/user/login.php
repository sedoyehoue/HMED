<div class="tg-pageinnerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?php echo _WEB_.''; ?>img/banner/img-02.jpg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <div class="tg-pageheadcontent">
          <div class="tg-pagetitle">
            <h1>Se connecter</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<main id="tg-main" class="tg-main tg-haslayout">
  <div class="container">
    <?php $alert::alertMsg($msg, $status); ?>
    <div class="row">
      <div id="tg-twocolumns" class="tg-twocolumns">
        <div class="col-md-4 col-sm-5 col-xs-12 col-break">
          <aside id="tg-sidebar" class="tg-sidebar">
            <div class="tg-widget tg-widgetlogin">
              <div class="tg-widgetcontent">
                <div class="tg-widgettitle">
                  <h3>Se Connecter</h3>
                </div>
                <form method="post" autocomplete="off" accept-charset="utf-8" class="tg-themeform tg-formsignin">
                  <?php echo CHtml::aempty(); ?>
                  <fieldset>
                    <div class="form-group tg-formgroup">
                      <input type="text" name="username" class="form-control" value="<?php echo isset($username)?$username:''; ?>" placeholder="Nom d'utilisateur">
                    </div>
                    <div class="form-group tg-formgroup">
                      <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="tg-kepploginpassword">
                      <div class="tg-checkbox">
                        <input type="checkbox" name="keeplogin" id="keeplogin" checked value="1">
                        <label for="keeplogin" class="pointer">Se souvenir de moi sur cet appareil</label>
                      </div>
                    </div>
                    <button class="tg-btn tg-btn-lg" type="submit" name="submit" value="login">Se connecter</button>
                  </fieldset>
                </form>
              </div>
              <a href="#" class="tg-btnforgotpassword">Forgot your password?</a> </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
</main>
