<?php

namespace DElfimov\Supernano;

class Core
{
    public $request = [];
    public $get = [];
    public $tplPath;
    public $template;
    public $templateFile;

    const LAYOUT   = 'super/layout.php';
    const ERROR404 = 'super/error404';
    const INDEX    = 'index';

    public function __construct($requestURI, $path)
    {
        $this->tplPath = realpath($path . '/tpl');
        $this->request($requestURI);
        $this->templateFile = $this->tplPath . '/' . $this->template . '.php';
        if (!file_exists($this->templateFile)) { // error 404
            $this->template = self::ERROR404;
            $this->templateFile = $this->tplPath . '/' . $this->template . '.php';
        }
    }

    public function render()
    {
        ob_start();
        include $this->tplPath . '/' . self::LAYOUT;
        $out = ob_get_clean();
        return $out;
    }

    protected function request($requestURI)
    {
        $qPos = strpos($requestURI, '?');
        if ($qPos !== false) {
            parse_str(substr($requestURI, $qPos+1), $this->get);
            $requestURI = substr($requestURI, 0, $qPos);
        }
        $requestURI = trim($requestURI, "/\/\\ \t\n\r\0\x0B");
        $request = explode('/', $requestURI);
        if (empty($request) || empty($request[0])) {
            $this->template = self::INDEX;
        } else {
            $r = array_shift($request);
            $rClean = preg_replace('/[^a-z0-9_-]/', '_', strtolower($r));
            if ($r == $rClean) {
                $this->template = $rClean;
                $this->request = $request;
            } else {
                $this->template = self::ERROR404;
            }
        }
    }
}
