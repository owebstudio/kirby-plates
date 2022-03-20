<?php

namespace ClickToNext;

use ClickToNext\Plates\Engine;

class Template extends \Kirby\Cms\Template
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
