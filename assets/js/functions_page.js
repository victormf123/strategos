

function maisPosts(json){ // When btn is pressed.
	var url_atual = window.location.href.toString();
	url_atual.slice(0 , url_atual.length - 1);
	$.ajax({
	   url:   url_atual + 'wp-content/themes/viainfinda/assets/js/php_funcoes/Carregar_posts.php',
	   type:  'post',
	   async: false,
	   error: function() {
	         alert('Erro ao tentar ação!');
	   }
	}).done(function(data){
		data = $.parseJSON(data);
		alert(data);
	});
}