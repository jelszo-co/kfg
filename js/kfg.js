// JS functions
jQuery(($) => {
	$(() => {
		$("header").css(
			"height",
			$("#header-img").height() + $("header p").height()
		);
		console.log("asd");
	});
});
