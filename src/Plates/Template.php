<?php

namespace Oweb\Plates;

use League\Plates\Template\Template as PlatesTemplate;

class Template extends PlatesTemplate
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
