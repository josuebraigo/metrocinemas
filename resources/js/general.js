$(document).ready(function() {
	$('.peliculas').slick({
      	infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
	    {
	      	breakpoint: 1024,
	      	settings: {
	        	slidesToShow: 3,
	        	slidesToScroll: 3,
	        	infinite: true,
	        	dots: true
	      	}
	    },
	    {
	      	breakpoint: 600,
	      	settings: {
	        	slidesToShow: 2,
	        	slidesToScroll: 2
	      	}
	    },
	    {
	      	breakpoint: 480,
	      	settings: {
	        	slidesToShow: 1,
	        	slidesToScroll: 1
	      	}
	    }],
    });

    $('.container .submenu h4').click(function() {
    	$(this).siblings('ul').slideToggle();
    	if($(this).hasClass('active')) {
    		$(this).removeClass('active');
    	}
    	else {
    		$(this).addClass('active');
    	}
    });

    var index;
		// var seats = {!! json_decode($seats->seats) !!};
		// var funcion = {{ App\Models\Funcion::find($seats->function_id) }};
		// console.log(seats);
		// console.log(funcion);

	var asientos = JSON.parse($('.arreglo').text());
	var funcion = $('.funcion').text();
	var cantidad = 0;
	var total = 0;
	var seleccionados = new Array();
	$('.detalles span').text(cantidad + " x $50");
	$('.detalles p').text("$" + total);


	//Funcionalidad de asientos
	$('.asientos .seat').click(function () {
		if(!$(this).hasClass('ocupado')) {
			if (!$(this).hasClass('active')) {
				$(this).addClass('active');
				index = $('span').index(this);
				asientos[index] = true;
				seleccionados.push(index);
				cantidad++;
				$('.detalles span').text(cantidad + " x $50");
			} else {
				$(this).removeClass('active');
				index = $('span').index(this);
				asientos[index] = false;
				seleccionados.splice(seleccionados.indexOf(index),1);
				cantidad--;
				$('.detalles span').text(cantidad + " x $50");

			}
			total = cantidad * 50;
			$('.detalles p').text("$" + total);
		}
		else {
			alert('No puedes seleccionar este aciento, ya está ocupado')
		}
	});

	$('#btnContinuar').click(function(){
		$.ajaxSetup({
		  headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
		$.ajax({
				url:'/ticket',
				type: 'POST',
				data: {seats: asientos, function: funcion, selected: seleccionados},
				success: function(result){
					windows.location.replace = "/ticket"
				},
				error: function(result){
					console.log('error: ' + result);
				}
			});
	});

});
