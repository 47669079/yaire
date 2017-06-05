$(document).ready(function(){

  var f_cont = 0;

    $("#nav_user").click( function () {

        if(f_cont==0)
        {
          $(".nav_off").css("display","inline");
          f_cont = 1;
        }
        else{
          $(".nav_off").css("display","none");
          f_cont = 0;
        }

      });

  });
