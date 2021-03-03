<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
      //Deliveroo
     // $deliveroo_hana = $_POST['deliveroo_hana']; 
    // $deliveroo_hana_new = $_POST['deliveroo_hana_new']; 
    // $deliveroo_minato_fry = $_POST['deliveroo_minato_fry'];
   //  $deliveroo_minato_fry_new = $_POST['deliveroo_minato_fry_new'];
    // $deliveroo_minato_onigiri = $_POST['deliveroo_minato_onigiri'];
    // $deliveroo_minato_onigiri_new = $_POST['deliveroo_minato_onigiri_new'];

    //Uber Eats
   // $uber_hana_bento = $_POST['uber_hana_bento'];
   // $uber_hana_karaage = $_POST['uber_hana_karaage'];


    //CA
    $ca_resto = $_POST['ca_resto'];
    $ca_deli_hana = $_POST['ca_deli_hana'];
    $ca_deli_minato_fry = $_POST['ca_deli_minato_fry'];
    $ca_deli_minato_onigiri = $_POST['ca_deli_minato_onigiri'];
    $ca_deli_minato_cocktail = $_POST['ca_deli_minato_cocktail'];
    $ca_uber_hana = $_POST['ca_uber_hana'];
    $ca_uber_hana_karaage = $_POST['ca_uber_hana_karaage'];
    $ca_uber_syko = $_POST['ca_uber_syko'];

    //Pertes
    $perte_onigiri_thon = $_POST['perte_onigiri_thon'];
    $perte_onigiri_saumon = $_POST['perte_onigiri_saumon'];
    $perte_onigiri_prune = $_POST['perte_onigiri_prune'];
    $perte_gyudon = $_POST['perte_gyudon'];
    $perte_teriyakidon = $_POST['perte_teriyakidon'];
    $perte_toridon = $_POST['perte_toridon'];
    $perte_currydon = $_POST['perte_currydon'];
    $perte_avocat = $_POST['perte_avocat'];
    $perte_saumon = $_POST['perte_saumon'];
    $perte_comcombre = $_POST['perte_comcombre'];
    $perte_california = $_POST['perte_california'];
    $perte_sushi = $_POST['perte_sushi'];



    //CA services
    //$especes = $_POST['especes'];
    //$cb = $_POST['cb'];
    //$amex = $_POST['amex'];
    //$ticket_r = $_POST['ticket_r'];
    //$carte_tr = $_POST['carte_tr'];


    //Remarque
    $remarque = $_POST['remarque'];

    //Calcul Deliveroo
   // $habitues_hana = $deliveroo_hana - $deliveroo_hana_new;
   // $habitues_minato_fry = $deliveroo_minato_fry - $deliveroo_minato_fry_new;
   // $habitues_minato_onigiri = $deliveroo_minato_onigiri - $deliveroo_minato_onigiri_new;

    //Calcul CA
    $ca_journee_minato = $ca_deli_minato_fry + $ca_deli_minato_onigiri + $ca_deli_minato_cocktail;
    $ca_journee_hana = $ca_resto + $ca_deli_hana + $ca_uber_hana + $ca_uber_hana_karaage;
    $ca_journee_total_deli = $ca_deli_hana + $ca_deli_minato_onigiri + $ca_deli_minato_fry + $ca_deli_minato_cocktail;
    $ca_journee_total_uber = $ca_uber_hana + $ca_uber_hana_karaage + $ca_uber_syko;
    $ca_journee_total = $ca_journee_hana + $ca_journee_minato + $ca_uber_syko;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="styles.css">
<title>synthèse de la journée </title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 style="text-align: center;">Synthèse de fin de service</h2>
        </div>
    </div>
</div>
<div class="conatiner">
    <div class="main">
        <div class="main-center">
            <p>Bonsoir !</p>

            <p>Take away</p>

 <!--       <p><?php echo $deliveroo_hana .  " Deliveroo Hana ( "   . $deliveroo_hana_new . " new, " . $habitues_hana . " regulars) "; ?></p>

            <p><?php echo $deliveroo_minato_fry . " Deliveroo Minato Fry ( " . $deliveroo_minato_fry_new . " new, " . $habitues_minato_fry . " regulars) "; ?></p>

            <p><?php echo $deliveroo_minato_onigiri . " Deliveroo Minato Onigiri ( " . $deliveroo_minato_onigiri_new . " new, " . $habitues_minato_onigiri . " regulars) "; ?></p>

            <p><?php echo $uber_hana_bento; ?> Uber Eats Hana Bento</p>

            <p><?php echo $uber_hana_karaage; ?> Uber Eats Hana Karaage</p> -->

            <p>CA resto = <?php echo $ca_resto . "€"; ?></p>

            <p>CA Deliveroo Hana = <?php echo $ca_deli_hana . "€"; ?></p>
            
            <p>CA Deliveroo Minato Fry = <?php echo $ca_deli_minato_fry . "€"; ?></p>

            <p>CA Deliveroo Minato Onigiri = <?php echo $ca_deli_minato_onigiri . "€"; ?></p>

            <p>CA Deliveroo Minato Cocktail = <?php echo $ca_deli_minato_cocktail . "€"; ?></p>

            <p>CA Hana Uber = <?php echo $ca_uber_hana . "€"; ?></p>

            <p>CA Hana Karaage Uber = <?php echo $ca_uber_hana_karaage . "€"; ?></p>

            <p>CA Syko Uber = <?php echo $ca_uber_syko . "€"; ?></p>

            <p>CA JOURNEE Hana <?php echo $ca_journee_hana . "€"; ?> + Minato <?php echo $ca_journee_minato . "€"; ?>  + Syko <?php echo $ca_uber_syko ?> = <?php echo $ca_journee_total . "€ dont " . $ca_journee_total_deli . "€ de Deliveroo et " . $ca_journee_total_uber . "€ de Uber ";  ?></p>

            <br>
            <p>Pertes :</p>

            <p>Onigiri Thon-Mayo : <?php echo $perte_onigiri_thon ?></p>
            <p>Onigiri Saumon : <?php echo $perte_onigiri_saumon ?></p>
            <p>Onigiri Prune : <?php echo $perte_onigiri_prune ?></p>

            <p>Donburi Teriyakidon : <?php echo $perte_teriyakidon ?></p>
            <p>Donburi Toridon : <?php echo $perte_toridon ?></p>
            <p>Donburi Currydon : <?php echo $perte_currydon ?></p>

            <p>Maki Avocat : <?php echo $perte_avocat ?></p>
            <p>Maki Saumon : <?php echo $perte_saumon ?></p>
            <p>Maki Comcombre : <?php echo $perte_comcombre ?></p>
            <p>California Saumon : <?php echo $perte_california ?></p>
            <p>Sushi Saumon : <?php echo $perte_sushi ?></p>








            <p>Remarques :</p>

            <p><?php echo $remarque ?></p>

        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<?php   } ?>