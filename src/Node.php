<?php

namespace Angle\Linked;

class Node
{
    /** @var Node */
    public $next;

    /** @var mixed */
    public $data;

    /** @param mixed $data */
    public function __construct($data)
    {
        $this->data = $data;
    }
}
