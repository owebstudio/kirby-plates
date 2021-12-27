<?php

namespace ClickToNext\Plates;

class Template extends \League\Plates\Template\Template
{
    /**
     * Set the template's layout.
     * @param string $name
     * @param array $data
     * @return null
     */
    public function layout($name, array $data = array())
    {
        $this->layoutName = $name;
        $this->layoutData = array_merge($this->data(), $data);
    }
}
