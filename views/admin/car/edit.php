<h1>Modifier <?= $params['car']->name ?></h1>

<form action="/admin/cars/edit/<?= $params['car']->id ?>" method="POST">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" name="name" id="name" value ="<?= $params['car']->name ?>">
    </div>
    <div class="form-group">
        <label for="model">Modèle : </label>
        <input type="text" class="form-control" name="model" id="model" value ="<?= $params['car']->model ?>">
    </div>
     <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" name="price" id="price" value ="<?= $params['car']->price ?>">
    </div>
    <div class="form-group">
        <label for="mileage">Kilomètrage </label>
        <input type="text" class="form-control" name="mileage" id="mileage" value ="<?= $params['car']->mileage ?>">
    </div>
    <div class="form-group">
        <label for="dateInCirculation">Mise en circulation le </label>
        <input type="text" class="form-control" name="dateInCirculation" id="dateInCirculation" value ="<?= $params['car']->dateInCirculation?>">
    </div>
    <h3>Caractéristiques : </h3>
       <div class="form-group">
        <label for="caracColor">Couleur </label>
        <input type="text" class="form-control" name="caracColor" id="caracColor" value ="<?= $params['car']->caracColor?>">
    </div>
    <div class="form-group">
        <label for="caracGearbox">Boîte de vitesses </label>
        <input type="text" class="form-control" name="caracGearbox" id="caracGearbox" value ="<?= $params['car']->caracGearbox?>">
    </div> 
    <div class="form-group">
        <label for="caracPower">Puissance fiscale</label>
        <input type="text" class="form-control" name="caracPower" id="caracPower" value ="<?= $params['car']->caracPower?>"> cv
    </div>
    <div class="form-group">
        <label for="name">Silhouette</label>
        <input type="text" class="form-control" name="caracType" id="caracType" value ="<?= $params['car']->caracType ?>">
    </div>
    <div class="form-group">
        <label for="caracCRITAIR">CRIT'AIR:</label>
        <input type="text" class="form-control" name="caracCRITAIR" id="caracCRITAIR" value ="<?= $params['car']->caracCRITAIR ?>">
    </div>
     <div class="form-group">
        <label for="caracFuel">Consommation : </label>
        <input type="text" class="form-control" name="caracFuel" id="caracFuel" value ="<?= $params['car']->caracFuel?>">
    </div>


  <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
</form>