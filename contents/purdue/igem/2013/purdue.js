$(function () {
	$('.purdue-hidden').hide();
	$('.purdue-collapsable').each(function () {
		var $this = $(this)
		,	$toCollapse = $this.next('.purdue-container')
		, 	isVisible = $toCollapse.is(':visible')
		,	$toggleLink = $('<small class="purdue-toggle"> [<a href="javascript:;"></a>]</small>');

		$toggleLink.find('a').text(isVisible ? 'Hide' : 'Show');
		$toggleLink.on('click', function () {
			$toCollapse.toggle();
			$(this).find('a').text($(this).find('a').text() == 'Show' ? 'Hide' : 'Show');
		});

		$this.append($toggleLink);
	})
});