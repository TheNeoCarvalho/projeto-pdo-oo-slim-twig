<?php
//Representação da tabela produto no BD.

class Produto {
	
	private $nome;
	private $preco;
	private $fabricante;
	private $dataCompra;
	private $quantidade;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }
    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    public function getDataCompra()
    {
        return $this->dataCompra;
    }

    public function setDataCompra($dataCompra)
    {
        $this->dataCompra = $dataCompra;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }
}