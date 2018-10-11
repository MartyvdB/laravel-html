<?php

namespace Martyb\Html\Elements;

use Spatie\Html\BaseElement;

class Style extends BaseElement
{
    protected $tag = 'style';

    public function __construct()
    {
        parent::__construct();

        $this->attributes->setAttribute('type', 'text/css');
    }

    /**
     * @param string|null $css
     *
     * @return static
     */
    public function value($css)
    {
        return $this->html($css);
    }
}
