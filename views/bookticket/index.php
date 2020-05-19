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

  var currentIdMovieTheater;

  function onMovieTheaterSelect(id){
    var id = id.value;  
    console.log(id);
    currentIdMovieTheater = id;
    let currentFilmList = [...movieList].filter( film => film['idMovieTheater'] === id);
    var obj = {};

    for ( var i=0, len=currentFilmList.length; i < len; i++ )
        obj[currentFilmList[i]['nameFilm']] = currentFilmList[i];

    currentFilmList = new Array();
    for ( var key in obj ){
        currentFilmList.push(obj[key]);
    }
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

  var currentFilm;
  function onFilmSelect(){
      var e = document.getElementById("flim_select");
      console.log(currentIdMovieTheater);

      var strUser = e.options[e.selectedIndex].value;
      console.log(strUser);

      currentFilm = strUser;

      let currentDateList = [...movieList].filter( film => film['idFilm'] === strUser );
      let currentFilmList = [...currentDateList].filter( film => film['idMovieTheater'] === currentIdMovieTheater);

      var select = document.getElementById("date_select");
      select.innerHTML = "";
      var opt = document.createElement('option');
      opt.innerHTML = "Ngày chiếu";
      select.appendChild(opt);
      for (var i = 0; i < currentFilmList.length; i++) {
        var opt = document.createElement('option');
        opt.value = currentDateList[i]['dateF'] ;
        opt.innerHTML = currentDateList[i]['dateF'];
        select.appendChild(opt);
      }

      

  }

  var currentDate;
  function onDateSelect(){
     var e = document.getElementById("date_select");

      console.log(currentIdMovieTheater);

      var dateFilm = e.options[e.selectedIndex].value;
      currentDate = dateFilm;

      console.log(dateFilm);
      console.log(currentFilm);

      let currentFilmList = [...movieList].filter( film => film['idFilm'] === currentFilm );
      let currentMovieTheaterList = [...currentFilmList].filter( film => film['idMovieTheater'] === currentIdMovieTheater);
      let currentTimeList = [...currentMovieTheaterList].filter( film => film['dateF'] === dateFilm);

      var select = document.getElementById("time_select");
      select.innerHTML = "";
      var opt = document.createElement('option');
      opt.innerHTML = "Giờ chiếu";
      select.appendChild(opt);
      for (var i = 0; i < currentTimeList.length; i++) {
        var opt = document.createElement('option');
        opt.value = currentTimeList[i]['timeF'] ;
        opt.innerHTML = currentTimeList[i]['timeF'];
        select.appendChild(opt);
      }
  }

  function onTimeSelect(){
     var e = document.getElementById("time_select");

     var timeFilm = e.options[e.selectedIndex].value;

     console.log(timeFilm);
     console.log(currentIdMovieTheater);
     console.log(currentFilm);
     console.log(currentDate);

      let currentFilmList = [...movieList].filter( film => film['idFilm'] === currentFilm );
      let currentMovieTheaterList = [...currentFilmList].filter( film => film['idMovieTheater'] === currentIdMovieTheater);
      let currentTimeList = [...currentMovieTheaterList].filter( film => film['dateF'] === currentDate);
      let currentTicketList = [...currentMovieTheaterList].filter( film => film['timeF'] === timeFilm);


      var select = document.getElementById("ticket_select");
      select.innerHTML = "";
      var opt = document.createElement('option');
      opt.innerHTML = "Loại vé";
      select.appendChild(opt);
      for (var i = 0; i < currentTimeList.length; i++) {
        var opt = document.createElement('option');
        opt.value = currentTimeList[i]['ticket'] ;
        opt.innerHTML = currentTimeList[i]['ticket'];
        select.appendChild(opt);
      }

      let currentSeat = [...currentTimeList].filter( film => film['timeF'] === timeFilm);
      console.log(currentSeat[0]['seatSelected']);

      let seatSelected = currentSeat[0]['seatSelected'];
      for (var i = 0; i <= 9; i++) {
          if(String(seatSelected).includes(i)){
            $("#A"+i).css("display", "none");
          }
          else{
          }
      }

      

 }

</script>

<div class="container">
  <form action="?controller=bookticket&action=bookticket" method="post">

    <h4>Chọn rạp chiếu</h4>
    <div class="form-group">
      <select class="form-control" onchange="onMovieTheaterSelect(this)" name="movietheater">
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
      <select class="form-control" id="flim_select" onchange="onFilmSelect()" name="namefilm">
        <option>Chọn phim</option>
      </select>
    </div>

    <h6>Chọn ngày chiếu</h6>
    <div class="form-group">
      <select class="form-control" id="date_select" onchange="onDateSelect()" name="datef">
          <option value="0">Chọn ngày</option>
      </select>
    </div>

    <h6>Chọn Giờ chiếu</h6>
    <div class="form-group">
      <select class="form-control" id="time_select" onchange="onTimeSelect()" name="timef">
          <option value="0">Chọn giờ</option>
      </select>
    </div>

    <h4>Loại vé</h4>
    <div class="form-group">
      <select class="form-control" id="ticket_select" name="idticket">
        <option>Chọn vé</option>
      </select>
       <div class="quantity buttons_added">
        <input type="button"value="-" class="minus">
        <input type="number"id="inputQuantity${x.id}" step="1" min="1" max="" name="quantityticket" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
        <input type="button"value="+" class="plus">
      </div>
    </div>

    <h4>Đồ ăn</h4>
    <div class="form-group">
      <select class="form-control" id="ticket_select" name="idfood">
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
        <input type="number"id="inputQuantity${x.id}" step="1" min="1" max="" name="quantityfood" value="0" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
        <input type="button"value="+" class="plus">
      </div>
    </div>

    <h4>Chọn ghế</h4>
    <style type="text/css">
        table{
          width: 500px;
          margin-bottom: 20px;
        }

        table .screen{
          background-color: green;
          text-align: center;
        }

        table td{
          text-align: center;
          padding: 2px;
        }

        .seatGap{
          width:40px;
        }

        input[type=checkbox] {
          width:0px;
          margin-right:18px;
        }

        input[type=checkbox]:before {
          content: "";
          width: 15px;
          height: 15px;
          display: inline-block;
          vertical-align:middle;
          text-align: center;
          box-shadow: inset 0px 2px 3px 0px rgba(0, 0, 0, .3), 0px 1px 0px 0px rgba(255, 255, 255, .8);
          background-color:#ccc;
        }
        .redBox::before
        {
          content:"";
          background:Red;
        }
        input[type=checkbox]:checked:before {
          background-color:Green;
          font-size: 15px;
        }
        div#empty {
          width: 20px;
          height: 20px;
          background: white;
        }
        div#choose {
          width: 20px;
          height: 20px;
          background: green;
        }
        div#choosed {
          width: 20px;
          height: 20px;
          background: red;
        }
    </style>

    <div class="seat">
      <table>
        <p id="notification"></p>
          <tr>
            <td colspan="14"><div class="screen">SCREEN</div></td>
          </tr>

          <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td></td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
          </tr>

          <tr>
            <td>A</td>
            <td><input type="checkbox" class="seats" id = "A1" value="A1" name="seat[]" id="select" 
            onclick="clicked()"></td>
            <td><input type="checkbox" class="seats" id = "A2"value="A2" name="seat[]"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" class="seats" id = "A3"value="A3" name="seat[]"></td>
            <td><input type="checkbox" class="seats" id = "A4"value="A4" name="seat[]"></td>
            <td><input type="checkbox" class="seats" id = "A5"value="A5" name="seat[]"></td>
            <td><input type="checkbox" class="seats" id = "A6"value="A6" name="seat[]"></td>
            <td><input type="checkbox" class="seats" id = "A7"value="A7" name="seat[]"></td>
            <td><input type="checkbox" class="seats" id = "A8"value="A8" name="seat[]"></td>
            <td><input type="checkbox" class="seats" id = "A9" value="A9" name="seat[]"></td>
          </tr>

          <tr>
            <td>B</td>
            <td><input type="checkbox" class="seats" value="B1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B2" name="seat"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" class="seats" value="B3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B5" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B9" name="seat"></td>
          </tr>

          <tr>
            <td>C</td>
            <td><input type="checkbox" class="seats" value="C1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C2" name="seat"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" class="seats" value="C3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C5" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C9" name="seat"></td>
          </tr>

          <tr>
            <td>D</td>
            <td><input type="checkbox" class="seats" value="D1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D2" name="seat"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" class="seats" value="D3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D5" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="D9" name="seat"></td>
          </tr>

          <tr>
            <td>E</td>
            <td><input type="checkbox" class="seats" value="E1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E2" name="seat"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" class="seats" value="E3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E5" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="E9" name="seat"></td>
          </tr>

      </table>
      <tr class="note">
          <td><div id="empty"></div>Ghế trống</td>
          <td><div id="choose"></div>Đang Chọn</td>
          <td><div id="choosed"></div>Đã chọn</td>
      </tr>

    </div>

    <button type="submit" class="btn btn-info">Đặt vé</button>
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