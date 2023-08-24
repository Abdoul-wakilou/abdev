<?php
    $title = "AbDev - Contact";
    $description = "Contactez-moi dès maintenant pour discuter de vos besoins en création de sites web, rédaction web SEO, gestion de campagne publicitaire facebook, instagram, youtube, google et autres services digitaux. En tant que freelance expérimenté, je suis spécialisé dans la réalisation de projets web personnalisés qui captivent votre audience et améliorent votre présence en ligne. J'offre également des services de rédaction optimisée pour les moteurs de recherche et de stratégie de marketing digital. Contactez-moi pour une collaboration professionnelle et une demande de devis.";
    $keywords = "Freelance en création de sites web, Rédacteur web SEO, Services digitaux, Contact professionnel, Demande de devis, Collaboration web, Expert en développement web, Optimisation SEO, Rédaction de contenu, Stratégie de marketing digital, contacter un freelance, créateur de sites web, freelance, abdoul-wakilou tiga, abdev";
    $bg = "assets/img/hero-bg.jpg";
    $titre_page = "Services en freelance";
    $machine_ecrire = "Création de site web e-commerce, Vitrine, Blog, Développeur de plateformes web, Rédaction web SEO, Gestion de publicités facebook, Développement d'applications android, Développement d'applications iphone, Créateur digital";
  ?>
  <?php
    include "header.php";
  ?>

  <!-- ======= Hero Section ======= -->
    <?php
      include "hero-section.php";
    ?>
   <!-- End Hero Section -->

   <form action="traitement_formulaire.php" method="POST">
    <input type="text" name="nom" placeholder="Votre nom" required>
    <input type="email" name="email" placeholder="Votre adresse e-mail" required>
    <textarea name="message" placeholder="Votre message" required></textarea>
    <button type="submit">Envoyer</button>
</form>


  <?php
    include "footer.php";
  ?>