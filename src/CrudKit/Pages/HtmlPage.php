<?php

namespace CrudKit\Pages;

use CrudKit\Util\TwigUtil;


class HtmlPage extends BasePage {

    protected $content = "";
    function render()
    {
        $twig = new TwigUtil();
        return $twig->renderTemplateToString("pages/html.twig", array(
            'page' => $this,
            'name' => $this->name,
            'content' => $this->content
        ));
    }


    /**
     * @param string $content
     */
    public function setInnerHtml($content)
    {
        $this->content = $content;
    }
}