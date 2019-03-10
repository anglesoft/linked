<?php

use PHPUnit\Framework\TestCase;

use Angle\Linked\Linked;
use Angle\Linked\Node;

class LinkedTest extends TestCase
{
    /** @var Linked */
    public $list;

    public function setUp() : void
    {
        $this->list = new Linked;
        $this->list->append('PHP');
        $this->list->append('Ruby');
        $this->list->append('Javascript');
    }

    /** @test */
    public function canCreateSingleNode()
    {
        $item = new Node('I <3 programming.');

        $this->assertTrue($item->data === 'I <3 programming.');
    }

    /** @test */
    public function nodesWereAppended()
    {
        $this->assertTrue($this->list->head->next->next->data == 'Javascript');
    }

    /** @test */
    public function nodesCanBePrepended()
    {
        $this->list->prepend('Golang');

        $this->assertTrue($this->list->head->data == 'Golang');
    }

    /** @test */
    public function listCanBeConvertedToString()
    {
        $expected = 'Golang, PHP, Ruby, Javascript';

        $this->list->prepend('Golang');

        print $this->list;

        $this->expectOutputString($expected);

        $this->assertTrue($expected == (string) $this->list);
    }

    /** @test */
    public function listCanBeCreatedWithNodes()
    {
        $list = new Linked('Laravel', 'Symfony', 'Rails');

        $this->assertTrue($list->head->next->next->data == 'Rails');
    }

    /** @test */
    public function aListCanContainAnything()
    {
        $list = new Linked(['some' => 'array'], 42, new stdClass);

        $this->assertTrue($list->head->next->data == 42);
    }
}
