// JS functions
jQuery(($) => {
	$(() => {
		$("header").css(
			"height",
			$("#header-img").height() + $("header p").height()
		);
		$(".header-placeholder").css("height", $("header").height());
		const menuWidth =
			$(".kfg-nav").width() +
			+$(".kfg-nav")
				.css("padding-left")
				.slice(0, -2) +
			+$(".kfg-nav")
				.css("padding-right")
				.slice(0, -2);

		$(".kfg-nav").css({
			left: -menuWidth,
			paddingTop: $(".kfg-nav").height() * 0.13,
			paddingBottom: $(".kfg-nav").height() * 0.13
		});

		$("nav").hover(
			() => {
				$(".kfg-nav").css(
					"left",
					//-$(".nav-opener").width()
					0
				);
			},
			() => {
				$(".kfg-nav").css("left", -menuWidth);
			}
		);

		$(".sidebar").css("height", $("html").height() - $("header").height());
		$("body").css({
			height: $("html").height(),
			"margin-bottom": $("footer").height()
		});
		$(".menu-item-object-category > a").attr("href", null);
	});
});
