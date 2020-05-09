var nb_citation = 6
var tab_citation=["J'ai vu tant de choses, que vous, humains, ne pourriez pas croire... De grands navires en feu surgissant de l'épaule d'Orion, j'ai vu des rayons fabuleux, des rayons C, briller dans l'ombre de la Porte de Tannhaüser. Tous ces moments se perdront dans l'oubli, comme les larmes dans la pluie. Il est temps de mourir."]

citation = tab_citation[getRandomInt(nb_citation)]




// RETOURNE CITATION ALEATOIRE
function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
$(document).ready(function () {
	prc=$("#progressbar").text()
	document.getElementById("contenu2").style.display = "none";
	document.getElementById("contenu3").style.display = "none";

	$("body").on("click", "#reboot", function () {
					
		while($("#citation").text() == citation)
		{
			citation = tab_citation[getRandomInt(nb_citation)]
		}			
		$("#citation").text("")
		$("#citation").text(citation)					
	});
	$("body").on("click", "#1", function () {

		document.getElementById("contenu2").style.display = "none";
		document.getElementById("contenu3").style.display = "none";
		document.getElementById("contenu1").style.display = "inherit";
	});
	$("body").on("click", "#2", function () {

		document.getElementById("contenu1").style.display = "none";
		document.getElementById("contenu3").style.display = "none";
		document.getElementById("contenu2").style.display = "inherit";
	});
	$("body").on("click", "#3", function () {

		document.getElementById("contenu1").style.display = "none";
		document.getElementById("contenu2").style.display = "none";
		document.getElementById("contenu3").style.display = "inherit";
	});

	$("body").on("click", "li", function () {


		var elt = this;
		var idElt = this.getAttribute('id');
		var classElt = this.getAttribute('class');

		$("."+classElt).removeClass('active');
		$("#"+idElt).addClass('active');
	});

	$("body").on("click", "#left", function () {

		prc = parseInt(prc) - parseInt(1)
		console.log(prc)
		$("#progressbar").css({"width": +prc+"%"})
		$("#progressbar").text(prc)

			
	});

	$("body").on("click", "#right", function () {

		prc = parseInt(prc) + parseInt(1)
		console.log(prc)
		$("#progressbar").css({"width": +prc+"%"})
		$("#progressbar").text(prc)
	});
});
