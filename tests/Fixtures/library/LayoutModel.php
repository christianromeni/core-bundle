<?php

namespace Contao\Fixtures;

class LayoutModel
{
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function row()
    {
        return $this->data;
    }

    public function setRow(array $data)
    {
        $this->data = $data;
    }
}
