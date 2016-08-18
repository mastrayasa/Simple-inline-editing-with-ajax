
$(document).ready(function() {
	
	
	$( "body" ).on('click','[data-toggle_edit]',function(e){
		
		e.preventDefault();
		
		$('#' + $(this).data('toggle_edit')).toggleClass('edited');
		
	});
	
	
	
	
	/* handle submit form  */ 
	$("body").on('submit','.media-form',function(e){
		e.preventDefault();
		
		var tombol		= $(this).find('.btn-change');
		var Form 		= $(this);
		var dataSent 	= Form.find(':input[name]').serialize();
		var box = $(this).parents('.toggle-edit'); 
		
		$.ajax({
			type: 'POST', 
			url: 'save.php',
			data: dataSent,
			dataType: 'json',
			beforeSend: function() {
				Form.find(':input[name]').prop( "disabled", true );
				tombol.button('loading'); 
			},
			success: function(response) {
				console.log(response); 
				if(response.status == '1'){
					
					box.find('.edit-display').html(response.des);
					box.toggleClass('edited'); 
				}
				 
				
				Form.find(':input[name]').prop( "disabled", false );
				tombol.button('reset');
			}
		}); 
	});
	
	
	
});