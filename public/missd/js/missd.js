$(document).ready(function(){

	var val = $('#val_missD').val();

	if(val == 1 )
	{
		var contenido = "";
		contenido += '<div>';
			contenido += '<h2>Let me know if u are miss D </h2>';
		contenido += '</div>';

		$('#cont_md').html(contenido);
	}
});

$(document).on('click','.opt',function(e){
	var id  = $(this).attr('id');
	if(id == 2)
	{
		var contenido = '';
		contenido += '<h2>';
			contenido+= 'OK OK, THAT ONE WAS TOO EASY';
		contenido += '</h2>';
		$('#cont_md').html(contenido);
		$('#title-c').text("What are those things that i can't stop to watch on YOU???" );
	}else
	{
		var contenido = '';
		contenido += '<p>';
			contenido+= 'YOU HAVE TO BE KIDDING ME, U COULDN´T BE MY MISS D...';
		contenido += '</p>';
		$('#cont_md').html(contenido);
	}
	//alert(id);
		e.preventDefault();
});