<?php include("inc/head.php") ?>
<div class="container">

  <div class="wrapper">
    <h2>Contactez-nous</h2>
  <p>Nous mettons tout en oeuvre pour faciliter votre
      visite sur notre site afin de répondre au mieux à vos attentes.
      Vous pouvez nous contacter par téléphone ou par email et nous vous
      répondrons dans les plus brefs délais. </p>
</div>

  <div id="fliptexte">
  <div class="flip">
    <div class="page">
      <div class="devant">
        <p>FLAM BLEU</p>
        <p>01-49-51-31-71</p>
        <p>10 Rue du Capitaine Alfred Dreyfus</p>
        <p>93210 La Plaine Saint Denis</p>
      </div>
      <div class="arriere">
        <figure>
          <img  src="assets/img/header/logo.jpg">
        </figure>
      </div>
    </div>
  </div>
  </div>

  <div class="formap">
  <div id="map" class="map2"></div>
  <form method="post" action="data/mail.php">
    <p class="coordonnees">Vos Coordonnées</p>
    <label for="nom">Nom <span class="asterix">*</span></label>
    <input type="text" name="nom" required/>
    <label for="email">Email <span class="asterix">*</span></label>
    <input type="email" name="email" required />
    <label for="telephone">Tél <span class="asterix">*</span></label>
    <input name="telephone" type="tel" required/>
    <label for="message">Message <span class="asterix">*</span></label>
    <textarea name="message" required></textarea>
    <input class="btn" name="envoi" type="submit" value="Envoyer" />
  </form>
</div>

</div>
<?php include("inc/footer.php") ?>
