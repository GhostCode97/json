<<<<<<< HEAD
<?php

// Get the data recorded in the file and display it in the table (HTML tag for dynamically generating the table)
$contents = file_get_contents('listData.json');
// string in JSON format
// The process of converting JSON-formatted strings into objects is called deserialization

// Converting objects in JSON to objects of type stdClass in PHP by default deserialization of json_decode
$data = json_decode($contents, true);
// $data => []
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <h1 class="display-4"></h1>
        <hr>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <?php foreach ($data[0] as $items=>$item): ?>
                    <th class="text-center"><?php print_r($items)?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php foreach ($data as $item): ?>
                <tr>
                    <td><?=$item['name'] ?></td>
                    <td><?= $item['key'] ?></td>
                    <td><?=$item['country'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

=======
<?php

// Get the data recorded in the file and display it in the table (HTML tag for dynamically generating the table)
$contents = file_get_contents('listData.json');
// string in JSON format
// The process of converting JSON-formatted strings into objects is called deserialization

// Converting objects in JSON to objects of type stdClass in PHP by default deserialization of json_decode
$data = json_decode($contents, true);
// $data => []

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container py-5">
    <h1 class="display-4"></h1>
    <hr>

    <table class="table table-bordered table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th class="text-center">name </th>
          <th class="text-center">key</th>
          <th class="text-center">country </th>
        </tr>
      </thead>
      <tbody class="text-center">
        <?php foreach ($data as $item): ?>
        <tr>
          <td><?=$item['name'] ?></td>
          <td><?= $item['key'] ?></td>
          <td><?=$item['country'] ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

>>>>>>> d3ee3b79d755522d586b747b381b2276f3890952
</html>