<div class="contact">
  <div class="container">

    <div class="row">

      <div class="col-md-12 col-xs-12">
        <h2>For me contacted it is here !</h2>
      </div>

    </div>

    <form class="" action="contact" method="post">
        <div class="row">

             <div class="col-md-6 col-xs-6">
                <input type="text" name="nom" placeholder="Name">
                <input type="text" name="prenom" placeholder="First name">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="text" name="num" placeholder="Phone number">
            </div>

            <div class="col-md-6 col-xs-6">
                <div class="err">
                    <p><?php echo $_SESSION["err"];?></p>
                    <img src="<?= WEBROOT ?>view/images/No.png" >
                    <!-- <img src="<?= WEBROOT ?>view/images/OK.png" > -->
                </div>
            </div>

        </div>
        <div class="row">

          <div class="col-md-12 col-xs-12">
            <input type="text" class="msg" name="msg" placeholder="Your message">
          </div>

        </div>
        <div class="row">

          <div class="col-md-12 col-xs-12">
            <input class="button" type="submit" name="button" value="To send">
          </div>

        </div>
    </form>

  </div>
</div>
