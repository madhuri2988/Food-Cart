$(document).ready(function() {
	// change the color of background color
	var headArr = ["index", "menu", "reserve_table", "about_us", "FAQ"];
	var curHead = window.location.href;
	var patt;
	var index;
	for (var i = 0; i < headArr.length; i++) {
		patt = new RegExp(headArr[i]);
		if (patt.test(curHead)) {
			index = i;
			break;
		}
	}
	
	var menuLi = $("#menu").find("> li");
	$("#menu > li > a").removeClass("current");
	$("#menu > li").eq(index).find("a").addClass("current");

	// the rotating banner
	var cur = 0;

	// show the first picture
	$(".banner-pic").eq(cur).fadeIn("slow");

	function rotate() {
		$(".banner-pic").eq(cur).fadeOut(1000);
		if (cur === $(".banner-pic").length - 1) {
			cur = 0;
		} else {
			cur++;
		}
		$(".banner-pic").eq(cur).fadeIn(500);
	}
	var rotate_int = setInterval(rotate, 3000);

	// control of next and previous button
	$(".prev").click(function() {
		clearInterval(rotate_int);
		$(".banner-pic").eq(cur).fadeOut(1000);
		if (cur === 0) {
			cur = $(".banner-pic").length - 1;
		} else {
			cur--;
		}
		$(".banner-pic").eq(cur).fadeIn(500);
		rotate_int = setInterval(rotate, 3000);
	});

	$(".next").click(function() {
		clearInterval(rotate_int);
		$(".banner-pic").eq(cur).fadeOut(1000);
		if (cur === $(".banner-pic").length - 1) {
			cur = 0;
		} else {
			cur++;
		}
		$(".banner-pic").eq(cur).fadeIn(500);
		rotate_int = setInterval(rotate, 3000);
	});

	// control of the banner button
	$(".banner-btn-control").click(function() {
		clearInterval(rotate_int);
		$(".banner-pic").eq(cur).fadeOut(1000);
		cur = $(".banner-btn-control").index(this);
		$(".banner-pic").eq(cur).fadeIn(500);
		rotate_int = setInterval(rotate, 3000);
	});
	

	// nav bar: drop down list
	$("#with-dropdown, #dropdown").hover(function() {
		$("#dropdown").css("display", "block");
		$("#with-dropdown").css({"color": "#fff", "background-color": "#e2827e"});
	}, function() {
		$("#dropdown").css("display", "none");
		if (index !== 1) {
			$("#with-dropdown").css({"color":  "#85423f", "background-color": "transparent"});
		}
	})
});