<?php
	class Produto {
		public $id;
		public $nome;
		private $preco;
		public $descricao;
		public $categoria;
		public $usado;

		public function valorComDesconto($valor = 0.1) {
			if($valor <= 0.5 && $valor > 0) {
				$this->setPreco($this->preco -= $this->preco * $valor);
			}
			return $this->preco;
		}

		public function setPreco($preco) {
			if($preco > 0) {
				$this->preco = $preco;
			}
		}

		public function getPreco() {
			return $this->preco;
		}
	}

?>