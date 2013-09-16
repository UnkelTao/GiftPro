 var flag=true;
  var cur=1;
function change(){
    if(flag) 
    { 
      $("#imgshow_"+cur).attr("style","display:none;");
      cur=cur+1;
      if(cur>4)cur=1;
      $("#imgshow_"+cur).attr("style","");
    }
  //alert("123");
  window.setTimeout("change()",2000); 
  };
  window.onload=change;   
  $(function(){
    $(".rk > p > a").each(function(){
      $(this).find("img").hover(function(){
        
        $(this).animate({
          width: 180,
          height: 160,
          padding: 3,
          left: 0,
          top: 0
        },200).addClass("hover");   

      },function(){
        $(this).animate({
          width: 165,
          height: 145,
          padding: 3,
          left: 0,
          top: 0
        },200).removeClass("hover");  
      }); 
    });
  });
  $(function(){  
    $(".lipin-list").each(function(){
      $(this).find("li").hover(function(){
        if($(this).attr("id")!='0'){
          $(".imgshow > img").each(function(){
            $(this).attr("style","display:none;");
          }); 
          $("#imgshow_"+$(this).attr("id")).attr("style","");
            cur=$(this).attr("id");
            //$("#previewImg").attr("src","img/show/show_"+$(this).attr("id")+".jpg");
        }
        $(this).addClass("hover");
        flag=false;
      },function(){
        $(this).removeClass("hover");
        flag=true;
      });
    });     
  });