<?php


namespace MyApp;


use Lipid\BasePDO;
use Lipid\Config;
use Lipid\Config\Cfg;

class MyPDO extends BasePDO
{
    public function __construct(Config $config = null)
    {
        parent::__construct(
            $config ?? new Cfg()
        );
//        $this->query("SET NAMES utf-8");
    }
}
