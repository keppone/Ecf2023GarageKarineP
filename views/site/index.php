<h1>Bienvenue sur notre site de vente de voiture d'occasion</h1>


<h2> Nos voitures de locations </h2>

<?php foreach($params['cars'] as $car): ?>
    <div class="card" style="width: 18rem;">
        <img src="<?=$car->principalPicture?>" class="card mx-auto d-block" alt="image">
        <div class="card-body">
            <h5 class="card-title"><?= $car->name ?></h5>
            <p class="card-text"><?= $car->model?></p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix : <?= $car->price?> €</li>
            <li class="list-group-item">Kilomètrage : <?= $car->mileage?> km </li>
            <li class="list-group-item">Mise en Circulation : <?= $car->getDateCirculation()?></li>
            </ul>
            <a href="/Ecf2023GarageKarineP/voiture/<?=$car->id ?>" class="btn btn-primary">détails</a>
        </div>
        <div>
</div>
    </div>
<?php endforeach ?>

