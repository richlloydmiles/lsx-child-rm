$(document).ready(function(){var a=skrollr,b=!1;$(window).width()>977&&(a.init(),b=!0),$(window).on("resize",function(){$(window).width()<977&&b?(a.init().destroy(),b=!1):$(window).width()>977&&(a.init(),b=!0)})}),$(document).ready(function(){$(".navbar .navbar-collapse").waypoint("sticky")}),$(document).ready(function(){$(".js-activated").dropdownHover({instantlyCloseOthers:!1,delay:0}).dropdown()});