<?php

namespace Martyb\Html;

use Illuminate\Http\Request;
use Mvdberg\Html\Elements\Link;
use Mvdberg\Html\Elements\Script;
use Mvdberg\Html\Elements\Style;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Spatie\Html\Html as BaseHtml;

class Html extends BaseHtml
{
    /**
     * @param string|null $href
     *
     * @return \Mvdberg\Html\Elements\Link
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
     * @return \Mvdberg\Html\Elements\Script
     */
    public function script($contents = null, $src = null)
    {
        return Script::create()
            ->attributeIf($src, 'src', $src)
            ->value($contents);
    }

    /**
     * @param string|null $contents
     * @param string|null $src
     *
     * @return \Mvdberg\Html\Elements\Style
     */
    public function style($contents = null)
    {
        return Style::create()
            ->value($contents);
    }
}
