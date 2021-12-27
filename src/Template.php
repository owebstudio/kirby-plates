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
        return $templates->render($this->name(), $data);
    }
}
