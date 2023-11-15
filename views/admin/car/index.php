<h1> Administration des publications</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Modèle</th>
      <th scope="col">Mise en circulation</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($params['cars'] as $car): ?>
      <tr>
        <th scope="row"><?= $car-> id ?></th>
        <td><?= $car->name ?></td>
        <td><?= $car->model ?></td>
        <td><?= $car->getDateCirculation() ?></td>
        <td>
          <a href="/Ecf2023GarageKarineP/admin/cars/edit/<?= $car->id ?>" class="btn btn-warning">Modifier</a>
          <form action = "/Ecf2023GarageKarineP/admin/cars/delete/<?= $car->id ?>" method ="POST" class="d-inline">
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>