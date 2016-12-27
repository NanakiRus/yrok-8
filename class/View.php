<?php

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        var_dump($value);
        $this->data[$name] = $value;
        var_dump($this->data);
    }

    public function display($template)
    {
        include $template;
    }

    public function render($template)
    {
        ob_start();
        include $template;
        $res = ob_get_contents();
        ob_end_clean();
        return $res;
    }
}