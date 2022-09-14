<?php

namespace Oweb;

use Kirby\Cms\Template as BaseTemplate;
use Oweb\Plates\Engine;

class Template extends BaseTemplate
{
    /**
     * @param array $data
     * @return string
     */
    public function render(array $data = []): string
    {
        $templates = new Engine($this->root());

        // get relative path
        $name = ltrim(str_replace(realpath($this->root()), '', realpath($this->file())), '\\/');

        // remove extension
        $name = substr($name, 0, strrpos($name, "."));

        return $templates->render($name, $data);
    }
}
