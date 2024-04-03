<?php 

	class Pessoa extends
	{
		var $codigo;
		var $nome;
		var $altura;
		var $idade;
		var $nascimento;
		var $escolaridade;
		var $salario;

		//aumenta a altura em centimetros
		function crescer($centimetros)
		{
			if ($centimetros > 0) {
				$this->altura += $centimetros;
			}
		}

		//altera a escolaridade para titulacao
		function formar($titulacao)
		{
			$this->escolaridade = $titulacao;
		}

		function envelhecer($anos)
		{
			if ($anos >0 ) {
				$this->idade += $anos;
			}
		}
	}
 ?>