<h1> <?= $params['car']->name ?? 'Créer une nouvelle voiture' ?></h1>

<form action="<?= isset($params['car']) ? "/Ecf2023GarageKarineP/admin/cars/edit/{$params['car']->id}" : "/Ecf2023GarageKarineP/admin/cars/create" ?>" method="POST">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" name="name" id="name" value ="<?= $params['car']->name ?? ' ' ?>">
    </div>
    <div class="form-group">
        <label for="model">Modèle : </label>
        <input type="text" class="form-control" name="model" id="model" value ="<?= $params['car']->model ?? ' ' ?>">
    </div>
     <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" name="price" id="price" value ="<?= $params['car']->price ?? ' ' ?>">
    </div>
    <div class="form-group">
        <label for="mileage">Kilomètrage </label>
        <input type="text" class="form-control" name="mileage" id="mileage" value ="<?= $params['car']->mileage ?? ' '?>">
    </div>
    <div class="form-group">
        <label for="dateInCirculation">Mise en circulation le </label>
        <input type="text" class="form-control" name="dateInCirculation" id="dateInCirculation" value ="<?= $params['car']->dateInCirculation ?? ' '?>">
    </div>

    <div class="form-group">
        <label for="carOption">Option et Equipement de la voiture : </label>
        <select multiple class="form-control" id="carOption" name="carOption[]">
            <?php foreach($params['carOption'] as $carOption): ?>
            
                <option value ="<?=$carOption->id?>"
                <?php if (isset($params['car'])): ?>
                <?php foreach($params['car']->getOptionCar() as $optionCar){
                echo ($carOption->id === $optionCar->id) ? 'selected': '';
                }
                ?>
                <?php endif ?>><?=$carOption->name?></option>
            
            <?php endforeach ?>
        </select>
    </div>


  <button type="submit" class="btn btn-primary"><?= isset($params['car']) ? 'Enregistrer les modifications' : 'Enregistrer la voiture' ?> </button>
</form>