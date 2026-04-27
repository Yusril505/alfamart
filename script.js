const container = document.querySelector('.container1');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

registerBtn.addEventListener('click', ()=>{
    container.classList.add('active');
})
loginBtn.addEventListener('click', ()=>{
    container.classList.remove('active');
})

async function cekuser(nama) {

    const psn = document.getElementById("psn");
    if(nama === ""){
        psn.innerHTML = "";
        return
    }
    const php = await fetch("cek.php",{
        method: "POST",
        headers:{"Content-Type": "application/json"},
        body: JSON.stringify({ username: nama})
    });
    const hasil = await php.text();

    psn.innerHTML= nama + " " + hasil;
}
let eye = document.getElementById('eye');
let pw = document.getElementById('pwlogin'); 

eye.onclick = function(){
    if(pw.type == "password"){
        pw.type = "text";

    } else {
        pw.type = "password";

    }
}
function togglePassword(inputId, tombol) {
    const input = document.getElementById(inputId);
    
    if (input.type === "password") {
        input.type = "text";
        tombol.style.opacity = "0.5"; 
    } else {
        input.type = "password";
        tombol.style.opacity = "1";
    }
}