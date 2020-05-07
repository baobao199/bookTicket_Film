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
  .quantity {
    display: inline-block; }

  .quantity .input-text.qty {
    width: 35px;  
    height: 39px;
    padding: 0 5px;
    text-align: center;
    background-color: transparent;
    border: 1px solid #efefef;
  }

  .quantity.buttons_added {
    text-align: left;
    position: relative;
    white-space: nowrap;
    vertical-align: top; 
  }
  .quantity.buttons_added input {
    display: inline-block;
    margin: 0;
    vertical-align: top;
    box-shadow: none;
  }
  .quantity.buttons_added .minus,
  .quantity.buttons_added .plus {
    padding: 7px 10px 8px;
    height: 41px;
    background-color: #ffffff;
    border: 1px solid #efefef;
    cursor:pointer;
  }
  .quantity.buttons_added .minus {
    border-right: 0; 
  }
  .quantity.buttons_added .plus {
    border-left: 0; 
  }
  .quantity.buttons_added .minus:hover,
  .quantity.buttons_added .plus:hover {
    background: #eeeeee; 
  }
  .quantity input::-webkit-outer-spin-button,
  .quantity input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    margin: 0; 
  }
  .quantity.buttons_added .minus:focus,
  .quantity.buttons_added .plus:focus {
   outline: none; 
  }
</style>

<script type="text/javascript">
  let movieList = <?= $showtime ?>;
  console.log(movieList);
  var currentIdFilm;
  function onMovieTheaterSelect(id){
    var id = id.value;  
    console.log(id);
    currentIdFilm =id;
    let currentFilmList = [...movieList].filter( film => film['idMovieTheater'] === id);
    var obj = {};

    for ( var i=0, len=currentFilmList.length; i < len; i++ )
        obj[currentFilmList[i]['nameFilm']] = currentFilmList[i];

    currentFilmList = new Array();
    for ( var key in obj )
        currentFilmList.push(obj[key]);
    console.log("current", currentFilmList);

    var select = document.getElementById("flim_select");
    select.innerHTML = "";
    var opt = document.createElement('option');
    opt.innerHTML = "Chọn phim";
    select.appendChild(opt);
    for (var i = 0; i < currentFilmList.length; i++) {
      var opt = document.createElement('option');
      opt.value = currentFilmList[i]['idFilm'] ;
      opt.innerHTML = currentFilmList[i]['nameFilm'];
      select.appendChild(opt);
    }
  }
  function onFilmSelect(){
      var e = document.getElementById("flim_select");
      console.log(currentIdFilm);

      var strUser = e.options[e.selectedIndex].value;
      console.log(strUser);

      let currentDateList = [...movieList].filter( film => film['idFilm'] === strUser );
      let currentFilmList = [...currentDateList].filter( film => film['idMovieTheater'] === currentIdFilm);

      var select = document.getElementById("date_select");
      select.innerHTML = "";
      var opt = document.createElement('option');
      opt.innerHTML = "Ngày chiếu";
      select.appendChild(opt);
      for (var i = 0; i < currentFilmList.length; i++) {
        var opt = document.createElement('option');
        opt.value = currentDateList[i]['idFilm'] ;
        opt.innerHTML = currentDateList[i]['dateF'];
        select.appendChild(opt);
      }
  }
</script>

<div class="container">
  <form>
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
      <select class="form-control" id="flim_select" onchange="onFilmSelect()">
        <option>Chọn phim</option>
      </select>
    </div>

    <h6>Chọn ngày chiếu</h6>
    <div class="form-group">
      <select class="form-control" id="date_select">
          <option value="0">Chọn ngày</option>
      </select>
    </div>

    <h6>Chọn Giờ chiếu</h6>
    <div class="form-group">
      <select class="form-control" id="time_select">
          <option value="0">Chọn giờ</option>
      </select>
    </div>

    <h4>Loại vé</h4>
    <div class="form-group">
      <select class="form-control" id="ticket_select">
        <option>Chọn vé</option>
      </select>
       <div class="quantity buttons_added">
        <input type="button"value="-" class="minus">
        <input type="number"id="inputQuantity${x.id}" step="1" min="1" max="" name="quantity" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
        <input type="button"value="+" class="plus">
      </div>
    </div>

    <h4>Đồ ăn</h4>
    <div class="form-group">
      <select class="form-control" id="ticket_select">
        <option value="0">Chọn đồ ăn</option>
        <?php
          foreach ($namefood as $f) {
            ?>
            <option value="<?= $f->idFood ?>"><?= $f->nameFood ?></option>
            <?php
          }
        ?>
      </select>
      <div class="quantity buttons_added">
        <input type="button"value="-" class="minus">
        <input type="number"id="inputQuantity${x.id}" step="1" min="1" max="" name="quantity" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
        <input type="button"value="+" class="plus">
      </div>
    </div>
    <button style="margin-left: 65px" type="submit" class="btn btn-info">Chọn ghế</button>
  </form>
</div>

<script type="text/javascript">
  // Init quantity box
  function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
      var c = jQuery(b);
      c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
  }
  String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
    b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
  }), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
  }), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
  }), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
    b = parseFloat(a.val()),
    c = parseFloat(a.attr("max")),
    d = parseFloat(a.attr("min")),
    e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
  });
</script>