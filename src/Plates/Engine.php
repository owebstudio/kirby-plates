<?php

namespace ClickToNext\Plates;


class Engine extends \League\Plates\Engine
{
    public function make($name)
    {
        return new Template($this, $name);
    }
}
