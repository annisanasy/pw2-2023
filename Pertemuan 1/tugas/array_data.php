<?php
$m_fruits = [
    ["name" => "Anggur", "color" => "Ungu", "stock" => 15, "price" => 25000, "description" => "Anggur memiliki rasa yang manis dan asam"],
    ["name" => "Salak", "color" => "Coklat", "stock" => 9, "price" => 15000, "description" => "Salak memiliki kulit yang sedikit tajam"],
    ["name" => "Rambutan", "color" => "Merah", "stock" => 12, "price" => 12000, "description" => "Buah yang memiliki rambut di kulitnya"],
    ["name" => "Melon", "color" => "Hijau", "stock" => 5, "price" => 20000, "description" => "Melon memiliki bentuk yang bulat"],
    ["name" => "Durian", "color" => "Kuning", "stock" => 10, "price" => 30000, "description" => "Buah yang memiliki bau menyengat"]
];

foreach ($m_fruits as $fruit){
    echo '<li>' . $fruit["name"] . '</li>';
    echo '<li>' . $fruit["color"] . '</li>';
    echo '<li>' . $fruit["stock"] . '</li>';
    echo '<li>' . $fruit["price"] . '</li>';
    echo '<li>' . $fruit["description"] . '</li>';
    echo '<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Color</th>
          <th>Stock</th>
          <th>Price</th>
          <th>Description</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>Anggur</td>
          <td>Ungu</td>
          <td>15</td>
          <td>25000</td>
          <td>Anggur memiliki rasa yang manis dan asam</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Salak</td>
          <td>Coklat</td>
          <td>9</td>
          <td>15000</td>
          <td>Salak memiliki kulit yang sedikit tajam</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Rambutan</td>
          <td>Merah</td>
          <td>12</td>
          <td>12000</td>
          <td>Buah yang memiliki rambut di kulitnya</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Melon</td>
          <td>Hijau</td>
          <td>5</td>
          <td>20000</td>
          <td>Melon memiliki bentuk yang bulat</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Durian</td>
          <td>Kuning</td>
          <td>10</td>
          <td>30000</td>
          <td>Buah yang memiliki bau yang menyengat</td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>