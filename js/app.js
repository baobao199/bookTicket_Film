function validateForm() {
    var a = document.forms["Form"]["fname"].value;
    var b = document.forms["Form"]["lname"].value;
    if (a == null || a == "") {
      alert("Vui lòng nhập Tên tài khoản");
      return false;
    }
	else if(b == null || b == ""){
		alert("Vui lòng nhập mật khẩu");
      return false;
	}
	
  }
function validateFormRegister(){
	var name = document.forms["formRegister"]["name"].value;
	var date = document.forms["formRegister"]["date"].value;
	var phone = document.forms["formRegister"]["phone"].value;
	var Address = document.forms["formRegister"]["Address"].value;
	var accountName = document.forms["formRegister"]["accountName"].value;
	var userPassword = document.forms["formRegister"]["userPassword"].value;
	var confirmPassword = document.forms["formRegister"]["confirmPassword"].value;
	var patt1 = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
	var strongRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
	var resultPass = userPassword.match(strongRegex);
	var result = date.match(patt1);
	if (name == null || name == "") {
      alert("Vui lòng nhập Họ và Tên");
      return false;
    }
	else if(date == null || date == ""){
		alert("Vui lòng nhập ngày tháng năm sinh");
      return false;
	}
	else if(phone == null || phone == ""){
		alert("Vui lòng nhập Số điện thoại");
      return false;
	}
	else if(Address == null || Address == ""){
		alert("Vui lòng nhập địa chỉ");
      return false;
	}
	else if(accountName == null || accountName == ""){
		alert("Vui lòng nhập tên tài khoản");
      return false;
	}
	else if(userPassword == null || userPassword == ""){
		alert("Vui lòng nhập mật khẩu");
      return false;
	}
	else if(confirmPassword == null || confirmPassword == ""){
		alert("Vui lòng xác  nhận lại mật khẩu");
      return false;
	}
	if(userPassword != confirmPassword){
		alert("xác thực mật khẩu không trùng khớp");
      return false;
	}
	if(result == null){
		alert("Ngày tháng năm sinh không hợp lệ");
      return false;
	}
	if(resultPass == null){
		alert("Mật khẩu phải chứa ít nhất một chữ số,một chữ thường,một chữ hoa và phải chứa ít nhất 8 ký tự");
      return false;
	}
	
}
function playTrailer(){
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	modal.style.display = "block";
	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
}
