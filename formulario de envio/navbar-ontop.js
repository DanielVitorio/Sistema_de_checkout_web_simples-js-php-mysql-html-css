/**
 * navbar-ontop.js 1.0.0
 * Add .navbar-ontop class to navbar when the page is scrolled to top
 * Make sure to add this script to the <head> of page to avoid flickering on load
 */



  function mascara(telefone){ 
	  if(telefone.value.length == 0){
		  telefone.value = '(' + telefone.value;
		  }//quando começamos a digitar, o script irá inserir um parênteses no começo do campo.
	  if(telefone.value.length == 3){
		  telefone.value = telefone.value + ') '; //quando o campo já tiver 3 caracteres (um parênteses e 2 números) o script irá inserir mais um parênteses, fechando assim o código de área.
	  }
	  if(telefone.value.length == 10){
		  telefone.value = telefone.value + '-'; //quando o campo já tiver 8 caracteres, o script irá inserir um tracinho, para melhor visualização do telefone.
  }}

  
	   function Numcpf(input) {
	  // Verifica se o CPF possui 11 dígitos
	   if (input.value.length === 10) {
	   // Adiciona pontuação ao CPF
		input.value = input.value.slice(0, 3) + "." + input.value.slice(3, 6) + "." + input.value.slice(6, 9) + "-" + input.value.slice(9);
}
}
	  //preenchimento cep

	  function buscacep() {
		  let cep = document.getElementById('CEP').value;
		  if (cep !== "") {
			  let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
			  let req = new XMLHttpRequest();
			  req.open("GET", url);
			  req.send();

			  //tratar a resposta da requisição
			  req.onload = function(){
				  if (req.status === 200) {
					  let endereco = JSON.parse(req.response);
					  
					  
					  document.getElementById("cidade").value = endereco.city
					  document.getElementById("estado").value = endereco.state

					  document.getElementById('CEP').style = "border-color:white !important;"
					  document.getElementById('cepspan').style = "display: none;"

					  var rua = document.getElementById("logadouro").value
				  
				  if (typeof endereco.street == "undefined"){
					  document.getElementById("logadouro").value = ""
					  }else{
						  document.getElementById("logadouro").value = endereco.street
					  }


				  if (typeof endereco.neighborhood == "undefined"){
					  document.getElementById("bairro").value = ""
					  }else{
						  document.getElementById("bairro").value = endereco.neighborhood
					  }


				  }else{
					  document.getElementById('CEP').style = "border-color:red !important;"
					  document.getElementById('cepspan').style = "display: block;"
				  }   

			  }
		  }
	  }
	  window.onload = function() {
		  let txtcep = document.getElementById('CEP');
		  txtcep.addEventListener("blur", buscacep)
	  }






      



(function() {

	var className = "navbar-ontop"
	
	// we start hidden, to avoid flickering
	document.write("<style id='temp-navbar-ontop'>.navbar {opacity:0; transition: none !important}</style>")

	function update() {
		// toggle className based on the scrollTop property of document
		var nav = document.querySelector(".navbar")

		if (window.scrollY > 15)
			nav.classList.remove(className)
		else
			nav.classList.add(className) 
	}

	document.addEventListener("DOMContentLoaded", function(event) {
		$(window).on('show.bs.collapse', function (e) {
			$(e.target).closest("." + className).removeClass(className);
		})

		$(window).on('hidden.bs.collapse', function (e) {
			update()
		})
		update()
		// still hacking to avoid flickering
		setTimeout(function() {
			document.querySelector("#temp-navbar-ontop").remove()
		})
  	});

	window.addEventListener("scroll", function() {
		update()			
	})

})();