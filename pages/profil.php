<?php

$app = new app\App();

?>

<div class="row">
    <div class="col s12 center-align">
        <div class="card">
            <div class="card-title">
                <h3>Bonjour <?= $_SESSION['pseudo'] ?></h3>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="row">
            <div class="card col s12">
                <div class="row">
                    <div class="card-content">
                        <div class="col s12">
                            <span>Vous avez le rôle de : <?= $app->getLevel($_SESSION['level']) ?></span>
                        </div>
                        <div class="col s12">
                            <div class="row">
                                <div class="card col s12">
                                    <?php $app->getOptions($_SESSION['level']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>