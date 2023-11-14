<h1> Nos voitures de locations </h1>

<?php foreach($params['cars'] as $car): ?>
    <div class="card mb-3">
        <div class="card-body">
            <h2 class="card-title"><?= $car->name ?></h2>
            <p class="card-text"><?= $car->model?></p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix : <?= $car->price?> €</li>
            <li class="list-group-item">Kilomètrage : <?= $car->mileage?> km </li>
            <li class="list-group-item">Mise en Circulation : <?= $car->getDateCirculation()?></li>
            </ul>
            <a href="/voiture/<?=$car->id ?>" class="btn btn-primary"> Lire plus</a>
        </div>
    </div>
<?php endforeach ?>

