<?php

namespace Martyb\Html;

use Illuminate\Http\Request;
use Martyb\Html\Elements\Link;
use Martyb\Html\Elements\Script;
use Martyb\Html\Elements\Style;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Spatie\Html\Html as BaseHtml;

class Html extends BaseHtml
{
    /**
     * @param string|null $href
     *
     * @return \Martyb\Html\Elements\Link
     */
    public function link($href = null)
    {
        return Link::create()
            ->attributeIf($href, 'src', $href);
    }

    /**
     * @param string|null $contents
     * @param string|null $src
     *
     * @return \Martyb\Html\Elements\Script
     */
    public function script($contents = null, $src = null)
    {
        return Script::create()
            ->attributeIf($src, 'src', $src)
            ->value($contents);
    }

    /**
     * @param string|null $contents
     *
     * @return \Martyb\Html\Elements\Style
     */
    public function style($contents = null)
    {
        return Style::create()
            ->value($contents);
    }
}
