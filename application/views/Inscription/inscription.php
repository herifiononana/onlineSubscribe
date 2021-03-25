<div class="container">
    <h4>Inscription</h4>
</div>

<div class="container">
    <div class="card-panel red lighten-5">
        <div class="card-title">
            <h5>Inscription concours d'entrée ISPM</h5>
        </div>
        <div class="card-content">
            <p>Bienvenu dans la page d'inscription en ligne pour être candidat au concours d'entrée de l'ISPM.</p>
            <p>Veuillez remplir les champs par vos informations</p>
        </div>
    </div>
</div>

<form action="<?php echo site_url('Inscription/inscriptionInsert')?>" method="post">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="card-content">
                    <div class="card-title">
                        <h5><u>Informations personnelles : </u></h5>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="input-field">
                            <input type="text" name="nom_candidat" id="nom_candidat">
                            <label for="nom_candidat">Nom: </label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="prenom_candidat" id="prenom_candidat">
                            <label for="prenom_candidat">Prénom: </label>
                        </div>
                        <div>
                            <label for="genre">Genre : </label>
                            <select class="browser-default"  name="genre" id="genre">
                                <option value="homme">Homme</option>
                                <option value="femme">Femme</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <input type="date" name="ddn_candidat" id="ddn_candidat">
                            <label for="ddn_candidat">Date de naissance: </label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="lieuNaiss_candidat" id="lieuNaiss_candidat">
                            <label for="lieuNaiss_candidat">Lieu de naissance : </label>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="input-field">
                            <input type="text" name="adresse_candidat" id="adresse_candidat">
                            <label for="adresse_candidat">Adresse: </label>
                        </div>
                        <div class="input-field">
                            <input type="email" name="mail_candidat" id="mail_candidat">
                            <label for="mail_candidat">Mail : </label>
                        </div>
                        <div class="input-field">
                            <input type="tel" name="tel_candidat" id="tel_candidat">
                            <label for="tel_candidat">Numero téléphone : </label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="nationalite_candidat" id="nationalite_candidat">
                            <label for="nationalite_candidat">Nationalité : </label>
                        </div>
                        <div class="input-field">
                            <input type="text" name="loisir_candidat" id="loisir_candidat">
                            <label for="loisir_candidat">Loisir et centre d'interêt : </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-content">
                <div class="card-title">
                    <h5><u>Informations pédagogiques :</u></h5>
                </div>
                    <div class="input-field">
                        <label for="old_school">Ecole anterieure :</label>
                        <input type="text" name="old_school" id="old_school">
                    </div>
                    <div>
                        <p>Série au bacc : </p>
                        <select class="browser-default"  name="serie_bac" id="serie_bac">
                            <option value=""></option>
                            <option value="A1">Serie A1</option>
                            <option value="A2">Serie A2</option>
                            <option value="C">Serie C</option>
                            <option value="D">Serie< D</option>
                            <option value="G2">Serie G2</option>
                        </select>
                    </div><br/>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-content">
                <div class="card-title">
                    <h5><u>Les fichiers à joindre: </u></h5>
                </div>
                <div>
                        <p>Diplôme :</p>
                        <input type="file" name="diplome" id="diplome" />
                    </div>
                    <div>
                        <p>Carte d'identité :</p>
                        <input type="file" name="cin" id="diplome" />
                    </div>
                    <div>
                        <p>Photo d'indentité :</p>
                        <input type="file" name="photo" id="diplome" />
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <button type="submit" class="btn waves-effect waves-light" id="btnValiderInscription">
            <i class="material-icons left" id="sendInscriptionIcon">send</i>
            <i class="material-icons left chargement hide" id="chgtInscriptionIcon">loop</i>
            Valider
        </button>
    </div><br/><br/><br/>
</form>
