// JS functions
jQuery(($) => {
	$(() => {
		$("header").css(
			"height",
			$("#header-img").height() + $("header p").height()
		);
		$(".header-placeholder").css("height", $("header").height());
	});
});
