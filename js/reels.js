setInterval(
    fetchData
    ,500);
    
    const reelsBox = document.getElementById('reels');
    
    function fetchData(){
        const request = new XMLHttpRequest();
      
        request.onload = ()=>{
         let data = request.responseText;
          if(request.readyState === 4){
           reelsBox.innerHTML = data;
          }
       
        }
        request.open('GET','php/reels.php')
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        request.send();
    }