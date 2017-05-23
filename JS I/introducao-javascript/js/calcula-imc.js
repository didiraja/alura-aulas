var titulo = document.querySelector("h1");
titulo.textContent = "Aparecida Nutricionista";

var pacientes = document.querySelectorAll(".paciente");

for(var i = 0; i < pacientes.length; i++) {
	
	var paciente = pacientes[i]; // array que indica cada instância do auto-increment
	
	var tdPeso = paciente.querySelector(".info-peso");
	var peso = tdPeso.textContent;

	var tdAltura = paciente.querySelector(".info-altura");
	var altura = tdAltura.textContent;

	var tdImc = paciente.querySelector(".info-imc");


	var validaPeso = true;
	if (peso <= 0 || peso >= 300) {

		console.log("Peso inválido");
		validaPeso = false;
		tdImc.textContent = "Peso inválido!";
		paciente.classList.add("paciente-invalido");
	}

	var validaAltura = true;
	if (altura <= 1 || altura >= 3) {

		console.log("Altura inválida");
		validaAltura = false;
		tdImc.textContent = "Altura inválida!";
		paciente.classList.add("paciente-invalido");
	}

	if (validaPeso && validaAltura) {

		var imc = calculaImc(peso,altura);
		tdImc.textContent = imc;
	}
	
}


function calculaImc(peso,altura) {
	var imc = 0;
	
	imc = peso / (altura * altura);
	
	return imc.toFixed(2);
}