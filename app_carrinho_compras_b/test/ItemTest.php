<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{

    public function testEstadoInicialItem()
    {
        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

     /**
     * @dataProvider dataDescricao
     */
    public function testGetSetDescricao($descricao)
    {
        $item = new Item();
        $item->setDescricao($descricao);

        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGetSetValor($valor)
    {
        $item = new Item();
        $item->setValor($valor);

        $this->assertEquals($valor, $item->getValor());
    }

    /**
     * @dataProvider dataValorDescricao
     */
    public function testItemValido($valor,$descricao)
    {
        $item = new Item();
        //submeter um item valido para o teste e retornar ok
        $item->setDescricao($descricao);
        $item->setValor($valor);
        $this->assertEquals(true, $item->itemValido());

        //submeter um item invalido para o teste e retornar false(descricao)
        $item->setDescricao('');
        $item->setValor($valor);
        $this->assertEquals(false, $item->itemValido());

        //submeter um item invalido para o teste e retornar false(valor)
        $item->setDescricao($descricao);
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());


        //submeter um item invalido para o teste e retornar false(descricao e valor)
        $item->setDescricao('');
        $item->setValor(0);
        $this->assertEquals(false, $item->itemValido());
    }

    public function dataValores()
    {
        return [
            [100],
            [-2],
            [0],
        ];
    }
    public function dataDescricao()
    {
        return [
            ['Cadeira de Fio'],
            ['Geladeira'],
            ['TV'],
        ];
    }
    public function dataValorDescricao()
    {
        return [
            [35.20,'Cadeira de Fio'],
            [2596.52,'Geladeira'],
            [1237.70,'TV'],
        ];
    }
}
