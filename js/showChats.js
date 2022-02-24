const chatMain = document.getElementById('chat-main');
const chatArea = document.getElementById('chat-area');
const foreign_id = document.getElementById('foreign_id').value;





setInterval(
    fetchData
    ,100);
    form.addEventListener('submit',(e)=>{
        e.preventDefault();
       
        
      })
      chatMain.onmouseover = ()=>{
          Scrolltobottom()
      }
        function Scrolltobottom(){
            chatMain.scrollTop = chatMain.scrollHeight;
        }  
    function fetchData(){
        const request = new XMLHttpRequest();
      
        request.onload = ()=>{
         let data = request.responseText;
          if(request.readyState === 4){
          chatMain.innerHTML = data;
          }
       
        }
        request.open('GET','php/showChats.php?foreign_id=' + foreign_id)
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        request.send();
    }
    