const form = document.getElementById('login-form');


const usernameVal = form.getElementsByClassName('username')[0].value;
const password1Val = form.getElementsByClassName('pass1')[0].value;
const submitBtn = form.getElementsByClassName('submit')[0];
const error = document.getElementById('error');

form.addEventListener('submit',(e)=>{
  e.preventDefault();
  
})
submitBtn.addEventListener('click',()=>{
 const request = new XMLHttpRequest();
 const formData = new FormData(form);
 request.onload = ()=>{
  let data = request.responseText;
   if(request.readyState === 4 && data === 'success'){
    location.href = 'users.php';
   }else{
    error.innerText = data;
    error.style.display= 'block';

  }
  
  }
 
 request.open('POST','php/login.php')
 request.send(formData);
})


//show password
const pass1 = document.getElementsByClassName('pass1')[0];

const icon = document.getElementById('icon');
icon.addEventListener('click',()=>{
  if(icon.classList.contains('fa-eye')){
    icon.classList.remove('fa-eye')
    icon.classList.add('fa-eye-slash')
    pass1.type = 'text';

  }else{
    icon.classList.add('fa-eye')
    icon.classList.remove('fa-eye-slash')
    pass1.type = 'password';
   
  }
   
})