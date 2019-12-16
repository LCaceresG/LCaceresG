$(document).ready(function(){
	$.ajax({
		type: 'POST',
		url: 'php/getEstado.php',
	})
	.done(function(estaddos){
		$('#v_estado').html(estaddos)
	})
	.fail(function(){
		alert('Hubo un error al cargar los estaddos')
	})

  	$('#v_estado').on('change', function(){
	    var id = $('#v_estado').val()
	    $.ajax({
	      type: 'POST',
	      url: 'php/getMunicipio.php',
	      data: {'id': id}
	    })
	    .done(function(municipios){
	      $('#v_municipio').html(municipios)
	    })
	    .fail(function(){
	      alert('Hubo un errror al cargar los municipios')
	    })
	  })

  	$('#v_municipio').on('change', function(){
	    var id = $('#v_municipio').val()
	    $.ajax({
	      type: 'POST',
	      url: 'php/getParroquia.php',
	      data: {'id': id}
	    })
	    .done(function(parroquia){
	      $('#v_parroquia').html(parroquia)
	    })
	    .fail(function(){
	      alert('Hubo un errror al cargar los parroquia')
	    })
	  })
})