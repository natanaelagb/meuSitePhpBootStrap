$(function(){


	var include_path = $("base").attr("base");
	
 	$(".nav-link,#banner-button").click(function(){

      var elementClass = $(this)[0].classList;
      $(".active").removeClass("active");

      $(this).addClass("active");
      var target = $(this).attr("target");
      var divScroll = $(target).offset().top-55;

      if(window.innerWidth < 992 && elementClass[0] == "nav-link")
        $("#button-toggle").click();

      $('html,body').animate({'scrollTop': divScroll});

      return false;
    })
 

/*
* Requisição ajax
*/

    $("body").on("submit",".form-contact",function(){

    	var form = $(this).serialize();

    	$.ajax({
    		url: include_path+'server/email.php',
    		method: 'post',
    		dataType: 'json',
    		data: form
    	}).done(function(data){

        var alertElement = '<div id="alert-div" class="alert alert-dismissible"><p class="mb-0"></p><button type="button" class="btn-close"></button></div>'
        var section = $("#section-banner");
        var alertDiv = "";

        section.prepend(alertElement);
        alertDiv = $("#alert-div");

    		if(data.return){
    			alertDiv.addClass("alert-success");
    			$("#alert-div>p").html("Email enviado com sucesso!");		
    		}else{
    			alertDiv.addClass("alert-warning");
    			$("#alert-div>p").html("Ocorreu um erro ao enviar o email!");
    		}
    	})
      return false;
   	})

   	$("body").on("click","#alert-div",function(){
    	$(this).remove();
   	})

})