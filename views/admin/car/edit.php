<h1>Modifier <?= $params['car']->name ?></h1>

<form action="/Ecf2023GarageKarineP/admin/cars/edit/<?= $params['car']->id ?>" method="POST">
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" class="form-control" name="name" id="name" value ="<?= $params['car']->name ?>">
    </div>
    <div class="form-group">
        <label for="model">Modèle</label>
        <input type="text" class="form-control" name="model" id="model" value ="<?= $params['car']->model ?>">
    </div>
     <div class="form-group">
        <label for="mileage">Kilomètrage </label>
        <input type="text" class="form-control" name="mileage" id="mileage" value ="<?= $params['car']->mileage ?>">
    </div>
     <div class="form-group">
        <label for="price">Prix</label>
        <input type="text" class="form-control" name="price" id="price" value ="<?= $params['car']->price ?>">
    </div>
     <div class="form-group">
        <label for="dateInCirculation">Mise en circulation le </label>
        <input type="text" class="form-control" name="dateInCirculation" id="dateInCirculation" value ="<?= $params['car']->dateInCirculation?>">
    </div>
   <div class="form-group">
    <label for="image">Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>