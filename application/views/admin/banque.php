<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php
        if(isset($Gcss)){
            foreach($Gcss as $style){
    ?>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/'.$style);?>">
    <?php
            }
        }
        if(isset($Gjs)){
            foreach($Gjs as $JS){
    ?>
        <script src="<?php echo base_url('assets/js/'.$JS);?>"></script>
    <?php
            }
        }
    ?>

    <?php
        if(isset($css)){
            foreach($css as $style){
    ?>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/'.$style);?>">
    <?php
            }
        }
        if(isset($js)){
            foreach($js as $JS){
    ?>
        <script src="<?php echo base_url('assets/js/'.$JS);?>"></script>
    <?php
            }
        }
    ?>


    <title>Admin</title>
</head>
<body>

    <div class="banque">
        <div class="container">
            <h4>Formulaire pour le banque</h4>
        </div>

        <div class="row container">
            <form action="" class="container col s12">
                <div class="input-field col s12">
                    <input id="nom" type="text" class="validate" name="nom">
                    <label for="nom">Banque</label>
                </div>
                <div class="input-field col s12">
                    <input id="RIB" type="text" class="validate" name="RIB">
                    <label for="RIB">RIB</label>
                </div>
                <div class="input-field col s12">
                    <input id="compte" type="text" class="validate" name="compte">
                    <label for="compte">Numero de compte</label>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect" type="button" id="btn_add_banque">
                        <i class="material-icons left" id="sd_ico_mdc">send</i>
                        <i class="material-icons left hide chargement" id="chgt_ico_mdc">loop</i>
                        Inserer
                    </button>
                </div>
            </form>
        </div>

        <input type="hidden" id="url_banque" value="<?php echo site_url('Admin/insert_banque');?>">

    </div>


    <div class="mobile">
        <div class="container">
            <h4>Formulaire pour le Mobile</h4>
        </div>

        <div class="row container">
            <form action="" class="container col s12">
                <div class="input-field col s12">
                    <input id="operateur" type="text" class="validate" name="operateur">
                    <label for="operateur">Operateur</label>
                </div>
                <div class="input-field col s12">
                    <input id="tel" type="text" class="validate" name="numero">
                    <label for="tel">Numero telephone</label>
                </div>
                <div class="input-field col s12">
                    <input id="ref" type="text" class="validate" name="reference">
                    <label for="ref">Reférence</label>
                </div>
                <div class="card-action">
                    <button class="btn waves-effect" type="button" id="btn_add_mobile">
                        <i class="material-icons left" id="sd_ico_mdc">send</i>
                        <i class="material-icons left hide chargement" id="chgt_ico_mdc">loop</i>
                        Inserer
                    </button>
                </div>
            </form>

            <input type="hidden" id="url_mobile" value="<?php echo site_url('Admin/insert_mobile');?>">

        </div>
    </div>


</body>
</html>