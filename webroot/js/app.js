$('document').ready(function(){
	//$('.list-group-item').css('width',$('.list-group-item').outerWidth());
	//$('.list-group-item').css('height',$('.list-group-item').outerHeight());
	$('.list-group').addClass('list-view');
	$('.list-group-item').addClass('col-md-3 col-sm-4 col-xs-6');
	$('.toggle-view').click(function(){
		$('.list-group').toggleClass('list-view');
		$('.list-group').toggleClass('grid-view');
		$('.toggle-view i').toggleClass('glyphicon-th-large').toggleClass('glyphicon-list');
	});
	$('.list-group-item').click(function(){
		$(this).toggleClass('active');
	});
});