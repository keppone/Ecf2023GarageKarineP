<h1>Bienvenue sur notre site de vente de voitures d'occasion</h1>

<h2> Nos voitures d'occasion </h2>

<?php foreach($params['cars'] as $car): ?>
    <div class="card d-flex justif-content-center" style="width: 18rem;">
        <?php foreach($car->getImage() as $image): ?>
        <img src="<?= $image->link?>" class="card-img-top" alt="Card image cap">
        <?php endforeach ?>
        <div class="card-body">
            <h5 class="card-title"><?= $car->name ?></h5>
            <p class="card-text"><?= $car->model?></p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item">Prix : <?= $car->price?> €</li>
            <li class="list-group-item">Kilomètrage : <?= $car->mileage?> km </li>
            <li class="list-group-item">Mise en Circulation : <?= $car->getDateCirculation()?></li>
            </ul>
            <a href="/voiture/<?=$car->id ?>" class="btn btn-primary">détails</a>
        </div>
        <div>
</div>
    </div>
<?php endforeach ?>

