document.addEventListener('DOMContentLoaded',function(event){
   
    var dataText = [ "Java", "PHP", "Python", "JavaSript", "MySql", "HTLM", "CSS"];
    
   
    function typeWriter(text, i, fnCallback) {
   
      if (i < (text.length)) {
        
       document.querySelector("h3").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';
  
        
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 250);
      }
      
      else if (typeof fnCallback == 'function') {
        // call callback after timeout
        setTimeout(fnCallback, 700);
      }
    }
    
     function StartTextAnimation(i) {
       if (typeof dataText[i] == 'undefined'){
          setTimeout(function() {
            StartTextAnimation(0);
          }, 20000);
       }
     
      if (i < dataText.length) {
       
       typeWriter(dataText[i], 0, function(){
        
         StartTextAnimation(i + 1);
       });
      }
    }

    for (let index = 0; index < 10; index++) {
       
        StartTextAnimation(0);
    }
    //StartTextAnimation(0);
  });