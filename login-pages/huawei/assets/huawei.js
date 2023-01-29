const urlParams = new URLSearchParams(window.location.search);
const product_name = urlParams.get('product_name').toLocaleUpperCase();
const real_page_address = urlParams.get('return_to').toLocaleUpperCase();
function loadFrame(){
let pr_name_div = document.getElementById('ProductName');
pr_name_div.innerText = product_name;
}
function LoginSubmit(){
    let username = document.getElementById('txt_Username').value;
    let password = document.getElementById('txt_Password').value;
    window.open(real_page_address,"_blank");
    let data = {"username":username,"password":password};
    console.table(data);
}