// JavaScript Document
$(document).ready(function(){
	$(".noti").mouseenter(function () {
	$(this).css("background-image","url(images/noticias2.png)")
	});
	$(".noti").mouseleave(function () {
	$(this).css("background-image","url(images/noticias.png)")
	});
	$(".biog").mouseenter(function () {
	$(this).css("background-image","url(images/biografia2.png)")
	});
	$(".biog").mouseleave(function () {
	$(this).css("background-image","url(images/biografia.png)")
	});
	$(".diaspo").mouseenter(function () {
	$(this).css("background-image","url(images/diasporas2.png)")
	});
	$(".diaspo").mouseleave(function () {
	$(this).css("background-image","url(images/diasporas.png)")
	});
	$(".dsolista").mouseenter(function () {
	$(this).css("background-image","url(images/discografia2.png)")
	});
	$(".dsolista").mouseleave(function () {
	$(this).css("background-image","url(images/discografia.png)")
	});
	$(".contac").mouseenter(function () {
	$(this).css("background-image","url(images/contacto2.png)")
	});
	$(".contac").mouseleave(function () {
	$(this).css("background-image","url(images/contacto.png)")
	});
});