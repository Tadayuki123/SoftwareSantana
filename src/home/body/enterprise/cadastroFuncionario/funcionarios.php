<?php

declare (strict_types=1);
namespace enterprise\cadastroProdutos;

use enterprise\model;

class Funcionario extends model
{
    protected $nome;
    protected $cpf;
    private $salario;
    private $comissao;
    protected $nVendas;
    protected $fone;
    protected $tempotrabalho;

    public function __construct(string $nome, string $cpf) {
        $this->nome=$nome;
        $this->cpf=$cpf;
    }

    public function getCpf ( ):string {
        return $this->cpf;
    }

    public function getNome ( ):string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome=$nome;
    }

    public function setSalario(float $salario)
    {
        $this->salario = $salario;
    }
    public function getSalario():float
    {
        return $this->salario;
    }
    public function get13():float
    {
        return $this->salario;
    }
    public function getFerias():float
    {
        return $this->salario/3;
    }
    public function getComissao():float
    {
        return $this->comissao;
    }
    public function setComissao(float $comissao)
    {
        $this->comissao = $comissao;
    }
    public function calcularSalario ()
    {
        $this->setSalario($this->getSalario() + $this->nVendas * $this->getComissao());
    }

    public function setTempotrabalho(int $tempotrabalho)
    {
        $this->tempotrabalho = $tempotrabalho;
    }
    public function setVendas(int $vendas)
    {
        $this->vendas = $vendas;
    }
    public function resetVendas ()
    {
        $this->vendas = 0;
    }
    public function setFone(string $fone)
    {
        $this->fone = $fone;
    }
    public function getFone():string
    {
        return $this->fone;
    }

    public static function getIdAttribute()
    {
        return 'cpf';
    }

    public static function  getClassName()
    {
        return '\funcionarios';
    }
}