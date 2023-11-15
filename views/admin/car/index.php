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
          <a href="#" class="btn btn-warning">Modifier</a>
          <form action = "/admin/cars/delete/<?= $car->id ?>" method ="POST" class="d-inline"></form>
            <button type="submit" class="btn btn-danger">Supprimer</button>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>