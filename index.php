<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap v4 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- vue 2 -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.x"></script>
  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
  <link rel="stylesheet" href="style.css">

  <script src="script.js" charset="utf-8"></script>

  <title>PHP-Ajax-Dischi</title>

</head>
<body>

  <div id="app" class="container">

    <div class="row">
      <div v-for="album in array" class="album">
        
        <h2>{{ album.title }}</h2>

        <div class="poster">
          <img :src="album.poster">
        </div>

        <h3>{{ album.author }}</h3>
        <h3>{{ album.genre }}</h3>
        <h3>({{ album.year }})</h3>

      </div>
    </div>

  </div>

</body>
</html>
