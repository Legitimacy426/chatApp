setInterval(
fetchData
,500);

const userBox = document.getElementById('users');

function fetchData(){
    const request = new XMLHttpRequest();
  
    request.onload = ()=>{
     let data = request.responseText;
      if(request.readyState === 4){
       userBox.innerHTML = data;
       console.log(data);
      }
   
    }
    request.open('GET','php/user.php')
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    request.send();
}