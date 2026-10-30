<?php

namespace Oweb\Plates;

class Engine extends \League\Plates\Engine
{
    public function make($name, array $data = array())
    {
        $template = new Template($this, $name);
        $template->data($data);

        return $template;
    }
}
