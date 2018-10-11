<?php

namespace Martyb\Html\Elements;

use Spatie\Html\BaseElement;

class Script extends BaseElement
{
    protected $tag = 'script';

    /**
     * @param string|null $src
     *
     * @return static
     */
    public function src($src)
    {
        return $this->attribute('src', $src);
    }

    /**
     * @param string|null $js
     *
     * @return static
     */
    public function value($js)
    {
        return $this->html($js);
    }
}
