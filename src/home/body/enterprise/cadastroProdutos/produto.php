<?php

declare (strict_types=1);
namespace enterprise\cadastroProdutos;

use enterprise\model;

class produto extends model
{
    protected $id;
    protected $descricao;
    protected $valor;
    protected $quantidade;

    function __construct(string $descricao,float $valor)
    {
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->quantidade = 0;
        $this->id = ("Adicionar um contatos de id");
    }

    /**
     * @return int
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param mixed $quantidade
     */
    public function addQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade + $this->quantidade;
    }

    public function subQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade - $this->quantidade;
    }

    public static function getIdAttribute()
    {
        return 'id';
    }

    public static function  getClassName()
    {
        return 'produto';
    }
}