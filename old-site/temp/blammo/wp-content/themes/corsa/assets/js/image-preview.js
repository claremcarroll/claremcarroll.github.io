/**
 * @version    1.5
 * @package    Corsa
 * @author     WooRockets Team <support@woorockets.com>
 * @copyright  Copyright (C) 2014 WooRockets.com. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.woorockets.com
 */

jQuery(document).ready(function (s) {
	var sync1 = s("#pro-preview");
	var sync2 = s("#pro-thumb");

	sync1.owlCarousel({
		singleItem: true,
		slideSpeed: 1000,
		autoHeight: true,
		navigation: false,
		pagination: false,
		afterAction: syncPosition,
		responsiveRefreshRate: 200,
	});

	sync2.owlCarousel({
		items: 4,
		itemsDesktop: [1199, 4],
		itemsDesktopSmall: [979, 4],
		itemsTablet: [768, 4],
		itemsMobile: [479, 3],
		pagination: false,
		responsiveRefreshRate: 100,
		afterInit: function (el) {
			el.find(".owl-item").eq(0).addClass("synced");
		}
	});

	function syncPosition(el) {
		var current = this.currentItem;
		s("#pro-thumb")
			.find(".owl-item")
			.removeClass("synced")
			.eq(current)
			.addClass("synced")
		if (s("#pro-thumb").data("owlCarousel") !== undefined) {
			center(current)
		}
	}

	s("#pro-thumb").on("click", ".owl-item", function (e) {
		e.preventDefault();
		var number = s(this).data("owlItem");
		sync1.trigger("owl.goTo", number);
	});

	s(".variations_form").on("change", ".variations select", function (e) {
		e.preventDefault();
		var number = s(this).data("owlItem");
		sync1.trigger("owl.goTo", 0);
	});

	function center(number) {
		var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
		var num = number;
		var found = false;
		for (var i in sync2visible) {
			if (num === sync2visible[i]) {
				var found = true;
			}
		}

		if (found === false) {
			if (num > sync2visible[sync2visible.length - 1]) {
				sync2.trigger("owl.goTo", num - sync2visible.length + 2)
			} else {
				if (num - 1 === -1) {
					num = 0;
				}
				sync2.trigger("owl.goTo", num);
			}
		} else if (num === sync2visible[sync2visible.length - 1]) {
			sync2.trigger("owl.goTo", sync2visible[1])
		} else if (num === sync2visible[0]) {
			sync2.trigger("owl.goTo", num - 1)
		}
	}
});
