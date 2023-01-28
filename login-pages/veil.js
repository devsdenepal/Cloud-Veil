const urlParams = new URLSearchParams(window.location.search);
const product_name = urlParams.get('product_name').toLocaleUpperCase();
const real_page_address = urlParams.get('return_to').toLocaleUpperCase();
function loadFrame(){
let pr_name_div = document.getElementById('ProductName');
pr_name_div.innerText = product_name; n
}