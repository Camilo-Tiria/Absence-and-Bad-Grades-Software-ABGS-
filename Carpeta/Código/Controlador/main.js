jQuery(document).on('submit','#form_insert',function(event){
	event.preventDefault();
	jQuery.ajax({
		url: 'Controlador/AgregarInasistencia1.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
	})
	.done(function(respuesta){
		console.log(respuesta);
		if(!respuesta.error){
			alert('bien gfhfghfghfghghgfhhfh');
		}else{
			alert('malgfhgfhgfhfghgfhgh');
		}
	})
	.fail(function(resp){
		console.log(resp.responseText);
	})
	.always(function(){
		console.log("complete");
	})

});