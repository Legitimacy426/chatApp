const form = document.getElementById('chat-area');
let message = document.getElementById('messege');


const submitBtn = document.getElementById('submit');

// const messageVal = document.getElementById('messege').value;

form.addEventListener('submit',(e)=>{
  e.preventDefault();
  message.value = '';
  
})


submitBtn.addEventListener('click',()=>{

 const request = new XMLHttpRequest();
 const formData = new FormData(form);
 request.onload = ()=>{
  let data = request.responseText;
   if(request.readyState === 4 ){
    //    messageVal = '';
       console.log(data); 
        
    //  location.href = 'login.php';
   }
 }
 request.open('POST','php/chats.php')
 request.send(formData);
})