<div class="col-lg-4 col-md-6">
	<div class="card" id="external-displays-count-widget">
		<div class="card-header" data-container="body">
			<i class="fa fa-expand"></i>
            <span data-i18n="displays_info.widget_title"></span>
			<a href="/show/listing/displays_info/displays" class="pull-right"><i class="fa fa-list"></i></a>
		</div>
		<div class="card-body text-center"></div>
	</div>
</div><!-- /col -->

<script>
$(document).on('appReady', function(e, lang) {
	$('#external-displays-count-widget div.card-header')
		.attr('title', i18n.t('displays_info.widget_info'))
		.tooltip();
});
$(document).on('appUpdate', function(e, lang) {
	var body = $('#external-displays-count-widget div.card-body');

	$.getJSON( appUrl + '/module/displays_info/get_count/1', function( data ) {

		body.empty();

		data.total = data.total || 0;
		body.append('<a href="'+appUrl+'/show/listing/displays_info/displays#external" class="btn btn-success"><span class="bigger-150">'+data.total+'</span><br>'+i18n.t('displays_info.displays')+'</a>');
	});

});
</script>
