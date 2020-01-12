// JS functions
jQuery(($) => {
	$("header").css("height", $("#header-img").height() + $("header p").height());
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
		paddingTop: $(".kfg-nav").height() * 0.13,
		paddingBottom: $(".kfg-nav").height() * 0.13,
		left: -menuWidth - 5
	});
	$(".kfg-nav").hide();

	$(".sidebar").css("height", $("html").height() - $("header").height());

	let openLevel = 0;
	$(".nav-opener").click(() => {
		if (openLevel === 0) {
			$(".kfg-nav").show();
			$(".kfg-nav").css({
				left: 0
			});
		}
	});

	$(document).click((e) => {
		$target = $(e.target);
		if ($target.closest("nav")[0] !== $("nav")[0]) {
			$(".kfg-nav").css("left", -menuWidth - 5);
			setTimeout(() => {
				$(".kfg-nav").hide();
			}, 200);
		}
	});

	$("body").css({
		height: $("html").height(),
		"margin-bottom": $("footer").height()
	});
	$(".menu-item-object-category > a").attr("href", null);
	$(".manu-item-object-category").click(() => {});

	window.onload = () => {
		$("#preloader")
			.css("opacity", 0)
			.delay(300)
			.hide();
	};

	$(".totop p").click(() => {
		$(window).scrollTop(0);
	});

	$(".footer-copyright span").html(new Date().getFullYear());
});
