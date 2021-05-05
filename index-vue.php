<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Albums</title>
</head>
<body>
  <div id="main-app">
    <header>
      <img class="logo" src="img/logo.png" alt="spotify-logo">
      <div class="actions">
        <span class="text--action">Filter by genre:</span>
        <select class="filter-genre" name="filter-genre" v-model="filterGenre">
          <option value="All">All</option>
          <option v-for="genre in genres" :key="genre" :value="genre">{{ genre }}</option>
        </select>
      </div>
    </header>
    <main >
      <div v-if="filterGenre == album.genre || filterGenre == 'All'" v-for="album in albums" class="album-card">
        <img class="img--album" :src="album.poster" alt="album.title">
        <span class="text text--album-title">{{album.title}}</span>
        <span class="text text--author">{{album.author}}</span>
        <span class="text text--genre">{{album.genre}}</span>
        <span class="text text--year">{{album.year}}</span>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script src="js/script.js" charset="utf-8"></script>
</body>
</html>