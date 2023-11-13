<h1> Nos voiture de locations </h1>

<?php foreach($params['cars'] as $car): ?>
    <div class="card mb-3">
        <div class="card-body">
            <h2 class="card-title"><?= $car->name ?></h2>
            <p class="card-text"><?= $car->model?></p>
        </div>
            <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $car->price?></li>
            <li class="list-group-item"><?= $car->mileage?></li>
            <li class="list-group-item"><?= $car->dateInCirculation?></li>
            </ul>
            <a href="/voiture/<?=$car->id ?>" class="btn btn-primary"> Lire plus</a>
        </div>
    </div>
<?php endforeach ?>

