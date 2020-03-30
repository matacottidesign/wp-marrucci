 <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
    var currentScrollpos = window.pageYOffset;

      if (prevScrollpos > currentScrollpos) {
        //document.getElementsByTagName("nav")[0].style.backgroundColor = 'red';
      } 
      else {
        document.getElementsByTagName("nav")[0].style.backgroundColor = 'rgba(255,255,255,1)';
        document.getElementById("indice").style.boxShadow = '0px .5rem 1rem rgba(0,0,0,.15)';
      }

      if(currentScrollpos === 0){
        document.getElementsByTagName("nav")[0].style.backgroundColor = 'rgba(255,255,255,0)';
        document.getElementById("indice").style.boxShadow = '0px .5rem 1rem rgba(255,255,255,0)';
      }

      prevScrollpos = currentScrollpos;
    };
  </script>