<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" type="text/css" href="css/bookticket.css">

<style>
  h4{
    font-weight: bold;
  }
  .content{
    padding: 20px;
    padding-left: 100px;
  }
  h6{
    font-weight: bold;
  }
  .custom-select{
    margin-bottom: 20px;
  }
  .form-group{
    width: 600px;
  }
</style>

<script type="text/javascript">
    let movieList = <?= $showtime ?>;
    console.log(movieList);

    function onMovieTheaterSelect(id){
      var id = id.value;  
      console.log(id);

      let currentFilmList = [...movieList].filter( film => film['idMovieTheater'] === id);
      console.log("current", currentFilmList);

      var select = document.getElementById("flim_select");
      for (var i = 0; i < currentFilmList.length; i++) {
        var opt = document.createElement('option');
        opt.value = currentFilmList[i]['idFilm'] ;
        opt.innerHTML = currentFilmList[i]['nameFilm'];
        select.appendChild(opt);
      }
    }
</script>

<div class="container">
  <h4>Chọn rạp chiếu</h4>
  <div class="form-group">
    <select class="form-control" onchange="onMovieTheaterSelect(this)">
      <option value="">Chọn rạp</option>
      <?php
        foreach ($namemovietheater as $mt) {
          ?>
             <option value="<?= $mt->id ?>"><?= $mt->name ?></option>
          <?php
        }
      ?>
    </select>
  </div>

  <h4>Chọn phim</h4>
  <div class="form-group">
    <select class="form-control" id="flim_select">
      <option>Chọn phim</option>
    </select>
  </div>
  
</div>

