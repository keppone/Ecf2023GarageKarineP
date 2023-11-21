<?php foreach($params['car']->getImage() as $image): ?>
<img src="<?= $image->link?>" class="card mx-auto d-block" alt="image">
<?php endforeach ?>
<h1><?= $params['car']->name?></h1>
<h3><?= $params['car']->model?></h3>
<p>Prix: <?= $params['car']->price?>€</p>
<p>Kilométrage : <?= $params['car']->mileage?>km</p>
<p>Mise en circulation le <?= $params['car']->getDateCirculation()?></p>
<span>
<div>
<h2>Listes des équipements et options: </h2>
<?php foreach($params['car']->getOptionCar() as $optionCar): ?>
    <ul class="list-group">
    <li class="list-group-item"><?= $optionCar->name ?></li>
    </ul>
<?php endforeach ?>
</div>
<span>
<div>
<h2>Listes des équipements et options: </h2>
<table class="table table-responsive">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Couleur: </th>
      <th scope="col">Boite de Vitesse: </th>
      <th scope="col">Puissance fiscale: </th>
      <th scope="col">Silhouette: </th>
      <th scope="col">CRIT'AIR: </th>
      <th scope="col">Consommation: </th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($params['car']->getCaracCar() as $carac): ?>
    <tr>
      <td><?= $carac->color ?></td>
      <td><?= $carac->gearbox ?></td>
      <td><?= $carac->fiscalPower ?> cv</td>
      <td><?= $carac->type ?></td>
      <td><?= $carac->CRITAIR?></td>
      <td><?= $carac->fuel?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
<a href ="/" class="btn btn-secondary">Retour</a>
