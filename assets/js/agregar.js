//recordar 2 cosas importantes
//jquery + ajax

$('#agregar').click(function(){
	var nombre = $('#nombre').val(),
	apellido = $('#apellido').val(),
	nacionalidad = $('#nacionalidad').val();


	$.ajax({
			dataType:'json',							//baseurl en el main
			url: baseurl + '/artista_controller/agregar',//http:localhost/galeria_arte/artista_controller/agregar
			type: 'post',
			dataType: 'json',
			data:{
				nombre, apellido, nacionalidad
			},
			dataType: 'json',
			beforesend: function(){
				//gif de carga
			},
			success: function(data){
				if(data.success === 1){
					alert('Registros insertados');
					document.location.href=baseurl+'/artista_controller/';
				}else{
					alert('No se pudo ingresar el registro');
				}
			},

			error: function(e){
				alert('Algo fallo, consulte al admin');
				console.log(e);
			}

		});
});