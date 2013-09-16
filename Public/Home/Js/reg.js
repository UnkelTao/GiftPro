$(document).ready(function(){
  $(".btn-xieyi").click(function(){
    $('.balckscreen').css("display","block");
  });
    $(".xieyi").click(function(){
    $('.balckscreen').css("display","block");
  });
   $("#agree").click(function(){
        document.getElementById('xieyi2').value=1;
       $('.balckscreen').css("display","none");
  });
  $("#checkbox1").click(function(){
        if($("#checkbox1").attr("checked")=="checked"){
        	   $("#agree").attr("disabled", null);
             $("#agree").removeAttr("disabled");
        }else{
            $("#agree").attr("disabled", "disabled");
        }
    })
	//提示~
	$("input").focus(function(){
		$(this).parent().find("span").css("display","none");
	});
	$("input").blur(function(){
		if($(this).val()!="")
		{
		$(this).parent().find("span").css("display","none");
		$(this).parent().find(".tip").removeClass("false");
		$(this).parent().find(".tip").addClass("true");
		}
		else
		{
		$(this).parent().find("span").css("display","block");
		$(this).parent().find(".tip").removeClass("true");
		$(this).parent().find(".tip").addClass("false");
		}
		//验证
		var name=$(this).attr("name");
		switch (name)
		{
			case "email": ;break;
			case "password":  ;break;
			case "password-ag": ;break;
			case "name": ;break;
			default: ;
		 }
	
	});
  

  
});