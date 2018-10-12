<?php

namespace Martyb\Html\Elements;

use Spatie\Html\BaseElement;

class Link extends BaseElement
{
    protected $tag = 'link';

    /**
     * @param string|null $href
     *
     * @return static
     */
    public function href($href)
    {
        return $this->attribute('href', $href);
    }

    /**
     * @param string|null $rel
     *
     * @return static
     */
    public function rel($rel)
    {
        return $this->attribute('rel', $rel);
    }

    /**
     * @param string|null $type
     *
     * @return static
     */
    public function type($type)
    {
        return $this->attribute('type', $type);
    }
}
