<?php include("inc/head.php") ?>
<div class="container">

  <div class="wrapper">
    <h2>Demander un Devis Gratuit</h2>
    <p>Vous souhaitez obtenir un devis afin de faire chiffrer votre futur projet, vous avez des travaux de plomberie à effectuer et vous recherchez un professionnel libre dans votre région, faites nous confiance et faites votre demande de devis sans plus
      tarder..
    </p>
  </div>

  <form method="post" action="data/devis.php">
    <label for="nom">Nom <span class="asterix">*</span></label>
    <input type="text" name="nom" required/>
    <label for="panne">Type d'intervention <span class="asterix">*</span></label>
    <select name="panne">
     <option>Installation</option>
     <option>Réparation</option>
     <option>Entretien</option>
   </select>
    <label for="email">Email</label>
    <input type="email" name="email" />
    <label for="telephone">Tél <span class="asterix">*</span></label>
    <input name="telephone" type="tel" required/>
    <label for="message">Décrivez précisément les travaux que vous souhaitez faire réaliser<span class="asterix">*</span></label>
    <textarea name="message" required></textarea>
    <input id="devis" name="envoi" class="btn" type="submit" value="Envoyer Ma Demande de Devis" />
  </form>
</div>
<?php include("inc/footer.php") ?>
