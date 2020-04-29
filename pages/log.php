<div class="formulaire">
    <div class="row">
        <?php
        if (isset($_SESSION['level'])) {
            header('Location: ./index.php?p=profil');
            die();
        }

        if (isset($_COOKIE['error'])) {
            $err = $_COOKIE['error'];
            $app = new app\App();
            $app->returnError($_COOKIE['error']);
            setcookie("error", null);
        }

        if (isset($_COOKIE['success'])) {
            $s = $_COOKIE['success'];
            $app = new app\App();
            $app->returnSuccess($s);
            setcookie('success', null);
        }
        ?>
    </div>
    <div class="row center-align valign-wrapper">
        <div class="col s12">
            <div class="row">
                <div class="card col s12 m12 l6 hoverable">
                    <form action="./index.php?p=log-back&form=login" class="col s12" method="POST">
                        <div class="card-title">Connexion</div>
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Email" id="mail" type="email" class="validate" name="email">
                                    <label for="mail">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="pass" placeholder="*****" type="password" class="validate" name="pass">
                                    <label for="pass">Mot de passe</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-agency">Connexion</button>
                        </div>
                    </form>
                </div>
                <div class="card col s12 m12 l6 hoverable">
                    <form action="./index.php?p=log-back&form=register" class="col s12" method="POST" onsubmit="return checkPass()">
                        <div class="card-title">Inscription</div>
                        <div class="card-content">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Pseudo" id="pseudo" type="text" class="validate" name="pseudo">
                                    <label for="pseudo">Pseudo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input placeholder="Email" id="maili" type="email" class="validate" name="emaili">
                                    <label for="maili">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="passw" placeholder="*****" type="password" class="validate" name="passw">
                                    <label for="passw">Mot de passe</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="passw2" placeholder="*****" type="password" class="validate" name="passw2">
                                    <label for="passw2">Retapez Mot de passe</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-agency">Inscription</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>