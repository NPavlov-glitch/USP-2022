$(document).ready(function() {
	$('.dropdown').on('change', function() {

		let selectedBrand;
		let selectedModel ;
		let selectedScreen;
		let selectedCamera;
		let selectedMemory;
		let selectedPrice ;

		if ( $("#brand").val() != "all" ) {
			selectedBrand  = $("#brand").val();
		}

		if ( $("#model").val() != "all" ) {
			selectedModel  = $("#model").val();
		}

		if ( $("#screen").val() != "all" ) {
			selectedScreen  = $("#screen").val();
		}

		if ( $("#camera").val() != "all" ) {
			selectedCamera  = $("#camera").val();
		}

		if ( $("#memory").val() != "all" ) {
			selectedMemory  = $("#memory").val();
		}

		if ( $("#price").val() != "all" ) {
			selectedPrice  = $("#price").val();
		}

		let url = $(location).attr('href');

		$.ajax({
			url: url,
			type: 'POST',
			data: {
				brand  : selectedBrand,
				model  : selectedModel,
				screen : selectedScreen,
				camera : selectedCamera,
				memory : selectedMemory,
				price  : selectedPrice,
			},
			beforeSend: function() {
				$('.items').hide();
				$('.spinner').show();
			},
			success: function(response) {
				$('.items').replaceWith($(response).find('.items'));
			},
			complete: function() {
				$('.items').show();
				$('.spinner').hide();
			},
			error: function(error) {
				console.log(error);
			}
		});
	});
});
