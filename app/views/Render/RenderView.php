<?php


class RenderView implements RenderInterface
{
    private $layout;
    private $template;
    public function __construct($template, $layout = null)
    {
        $this->layout = $layout ?? 'app/views/layout.html';
        $this->template = $template;
    }

    public function render($vars): string
    {
        $vars['content'] = $this->getTemplateContent($vars);
        return $this->getLayoutContent($vars);
    }

    public function getTemplateContent($vars)
    {
        $content = file_get_contents($this->template);
        foreach ($vars as $key => $value) {
            $content = str_replace('{'.$key.'}', $value, $content);
        }
        return $content;
    }
    public function getLayoutContent($vars)
    {
        $content = file_get_contents($this->layout);
        foreach ($vars as $key => $value) {
            $content = str_replace('{'.$key.'}', $value, $content);
        }
        return $content;
    }
}
