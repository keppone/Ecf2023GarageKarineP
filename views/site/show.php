<img src="<?=$params['car']->principalPicture?>" class="card mx-auto d-block" alt="image">
<h1><?= $params['car']->name?></h1>
<h3><?= $params['car']->model?></h3>
<p>Prix: <?= $params['car']->price?>€</p>
<p>Kilométrage : <?= $params['car']->mileage?>km</p>
<p>Mise en circulation le <?= $params['car']->getDateCirculation()?></p>

<div>
<?php foreach($params['car']->getOptionCar() as $optionCar): ?>
    <ul class="list-group">
    <li class="list-group-item"><?= $optionCar->name ?></li>
    </ul>
<?php endforeach ?>
</div>

<a href ="/Ecf2023GarageKarineP/" class="btn btn-secondary">Retour</a>
