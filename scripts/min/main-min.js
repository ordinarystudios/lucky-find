$(function($){var e,o=$(window),i=$(window).innerHeight();o.scroll(function(){e=o.scrollTop(),e>=i-64?$(".header.home").addClass("sticky"):$(".header.home").removeClass("sticky")})});