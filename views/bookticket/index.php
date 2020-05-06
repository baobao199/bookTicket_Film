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
</style>

<div class='hot col-12'>
  <h4><hr>ĐẶT VÉ XEM PHIM<hr></h4> 
</div>
<div class="content">
  <form>
    <h6>Chọn phim</h6>
      <div class="custom-select" style="width: 600px;">
          <select>
            <option value="0">Chọn phim</option>
            <?php
              foreach ($namefilm as $f) {
                ?>
                  <option value="<?= $f->id ?>"><?= $f->name ?></option>
                <?php
              }
            ?>
          </select>
      </div>
  	<h6>Chọn Rạp Chiếu Phim</h6>
  			<div class="custom-select" style="width: 600px;">
  					<select>
  						<option value="0">Chọn Rạp</option>
  						<option value="1">CGV Hùng Vương Plaza</option>
  						<option value="2">CGV Vincom Thủ Đức</option>
  						<option value="3">CGV Crescent Mall</option>
  						<option value="4">CGV Thảo Điền Pearl</option>
  						<option value="5">CGV Vincom Thủ Đức</option>
  						<option value="6">CGV Vivo City</option>
  						<option value="7">CGV Pearl Plaza</option>
  						<option value="8">CGV Liberty Citypoint</option>
  						<option value="9">CGV Vincom Đồng Khởi</option>
  						<option value="10">CGV Trường Sơn (CGV CT Plaza)</option>
  						<option value="11">CGV Pandora City</option>
  						<option value="12">CGV Vincom Gò Vấp</option>
  						<option value="13">CGV Hoàng Văn Thụ</option>
  						<option value="14">CGV Aeon Bình Tân</option>
  						<option value="15">CGV Saigonres Nguyễn Xí</option>
  						<option value="16">CGV Parkson Đồng Khởi</option>
  						<option value="17">CGV Sư Vạn Hạnh</option>
  						<option value="18">CGV IMC Trần Quang Khải</option>
  						<option value="19">CGV Vincom Center Landmark 81</option>
  						<option value="20">CGV Satra Củ Chi</option>
  						<option value="21">CGV Lý Chính Thắng</option>
  					</select>
  		</div>
  		<h6>Chọn Loại vé</h6>
  		<div class="custom-select" style="width: 600px;">
  				<select>
            <option value="0">Chọn Loại Vé</option>
            <?php
              foreach ($nameticket as $t) {
                ?>
                  <option value="<?= $t->id ?>"><?= $t->name ?></option>
                <?php
              }
            ?>
  				</select>
  		</div>
  		<h6>Chọn Giờ chiếu</h6>
  		<div class="custom-select" style="width: 600px;">
  				<select>
  					<option value="0">Chọn giờ</option>
            <option value="9:30">9:30</option>
            <option value="10:30">10:30</option>
            <option value="11:30">11:30</option>
            <option value="13:30">13:30</option>
            <option value="14:30">14:30</option>
            <option value="15:30">15:30</option>
            <option value="16:30">16:30</option>
            <option value="17:30">17:30</option>
            <option value="18:30">18:30</option>
            <option value="19:30">19:30</option>
            <option value="20:30">20:30</option>
            <option value="21:30">21:30</option>
            <option value="22:30">22:30</option>
            <option value="23:30">23:30</option>
  				</select>
  		</div>

      <h6>Chọn Đồ Ăn</h6>
      <div class="custom-select" style="width: 600px;">
          <select>
            <option value="0">Chọn đồ ăn</option>
            <?php
              foreach ($namefood as $f) {
                ?>
                  <option value="<?= $f->idFood ?>"><?= $f->nameFood ?></option>
                <?php
              }
            ?>
          </select>
      </div>
  		<br>
  		<a href="chooseSite.html" class="btn btn-danger active">Chọn ghế</a>
  </form>
</div>

<script>
            var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script><script src="https://kit.fontawesome.com/a076d05399.js"></script>
