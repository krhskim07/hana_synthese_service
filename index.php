<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="styles.css">
<title>message de fin de service</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <h2 style="text-align: center;">Message de fin de service</h2>
        </div>
    </div>
</div>
<div class="container">
    <div class="main">
        <div class="main-center">
            <form class="" method="post" action="form.php">
            <!--<div class="row">
                <h2>Deliveroo</h2>
                <div class="col-md-6 .col-xs-6">
                    <div class="form-group">
                        <label for="deliveroo_hana">Deliveroo Hana</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="deliveroo_hana" id="deliveroo_hana"  placeholder="Enter nb of take away Deliveroo Hana (total)"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 .col-xs-6">
                    <div class="form-group">
                        <label for="deliveroo_hana_new">Deliveroo hana new clients</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="deliveroo_hana_new" id="deliveroo_hana_new"  placeholder="Enter nb of new clients Deliveroo Hana"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="deliveroo_minato_fry">Deliveroo Minato Fry</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="deliveroo_minato_fry" id="deliveroo_minato_fry"  placeholder="Enter nb of take away Deliveroo Minato Fry"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="deliveroo_minato_fry_new">Deliveroo Minato fry new clients</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="deliveroo_minato_fry_new" id="deliveroo_minato_fry_new"  placeholder="Enter nb of new clients Deliveroo Minato Fry"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="deliveroo_minato_onigiri">Deliveroo Minato Onigiri</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="deliveroo_minato_onigiri" id="deliveroo_minato_onigiri"  placeholder="Enter nb of take away Deliveroo Minato Onigiri"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="form-group">
                        <label for="deliveroo_minato_fry_new">Deliveroo Minato Onigiri new clients</label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="deliveroo_minato_onigiri_new" id="deliveroo_minato_onigiri_new"  placeholder="Enter nb of new clients Deliveroo Minato Onigiri"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <h2>Uber</h2>
                <div class=".col-md-2 .col-xs-2 form-group">
                    <label for="uber_hana">Uber Eats Hana Bento</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="uber_hana_bento" id="uber_hana_bento"  placeholder="Enter nb of take away Uber Eats Hana Bento"/>
                    </div>
                </div>
                <div class=".col-md-2 .col-xs-2 form-group">
                    <label for="uber_hana">Uber Eats Hana Karaage</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="uber_hana_karaage" id="uber_hana_karaage"  placeholder="Enter nb of take away Uber Eats Hana Karaage"/>
                    </div>
                </div>
            </div>  -->
            <div class="row">
                <h2>CA</h2>
                <div class="col-md-12 form-group">
                    <label for="ca_resto">CA resto</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_resto" id="ca_resto"  placeholder="Enter CA resto"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_deli_hana">CA Deliveroo Hana</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_deli_hana" id="ca_deli_hana"  placeholder="Enter CA Deliveroo Hana"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_deli_minato_fry">CA Deliveroo Minato Fry</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_deli_minato_fry" id="ca_deli_minato_fry"  placeholder="Enter CA Deliveroo Minato Fry"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_deli_minato_onigiri">CA Deliveroo Minato Onigiri</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_deli_minato_onigiri" id="ca_deli_minato_onigiri"  placeholder="Enter CA Deliveroo Minato Onigiri"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_deli_minato_cocktail">CA Deliveroo Minato Cocktail</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_deli_minato_cocktail" id="ca_deli_minato_cocktail"  placeholder="Enter CA Deliveroo Minato Cocktail"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_uber_hana">CA Uber Hana</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_uber_hana" id="ca_uber_hana"  placeholder="Enter CA Uber Eats Hana"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_uber_hana_karaage">CA Uber Hana Karaage</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_uber_hana_karaage" id="ca_uber_hana_karaage"  placeholder="Enter CA Uber Eats Hana Karaage"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ca_uber_syko">CA Uber Syko</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ca_uber_syko" id="ca_uber_syko"  placeholder="Enter CA Uber Eats Syko"/>
                    </div>
                </div>
             <!--   <div class="col-md-12 form-group">
                    <label for="especes">Espèces</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="especes" id="especes"  placeholder="Enter montant espèces"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="cb">CB</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="cb" id="cb"  placeholder="Enter montant Carte Bleu"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="amex">Amex</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="amex" id="amex"  placeholder="Enter montant Amex"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="ticket_r">Ticket Restaurant</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="ticket_r" id="ticket_r"  placeholder="Enter montant Ticket Restaurant"/>
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    <label for="carte_tr">Carte TR</label>
                    <div class="input-group">
                        <input type="number" step="0.01" class="form-control" name="carte_tr" id="carte_tr"  placeholder="Enter montant Carte TR"/>
                    </div>
                </div> -->
                <div class="col-md-12 form-group">
                    <label for="remarque">Remarque</label>
                    <div class="input-group remarque">
                        <input type="textarea" step="0.01" class="form-control" name="remarque" id="remarque"  placeholder="Remarque"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-5 col-md-4">
                    <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        </div><!--main-center"-->
    </div><!--main-->
</div><!--container-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>
</body>
</html>