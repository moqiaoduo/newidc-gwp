<?php

namespace NewIDC\Plugin\Server\GWP;

use NewIDC\Plugin\Server;

class Plugin extends Server
{
    protected $name='GoWebPanel 对接插件';
    protected $version='1.0.0';

    public static function productConfig()
    {
        return [
            'storage'=>['type'=>'number','label'=>'储存容量','help'=>'单位MB','min'=>0],
            'domain'=>['type'=>'number','label'=>'可绑定域名数','min'=>0,'help'=>'0为不限'],
            'sub_domain'=>['type'=>'number','label'=>'可绑定子域名数','min'=>-1,'help'=>'-1为不限'],
            'alias_domain'=>['type'=>'number','label'=>'可绑定别名数','min'=>-1,'help'=>'-1为不限'],
            'traffic'=>['type'=>'number','限制流量','help'=>'单位MB','min'=>0]
        ];
    }

    /**
     * @inheritDoc
     */
    public function activate()
    {
        // TODO: Implement activate() method.
    }

    /**
     * @inheritDoc
     */
    public function suspend()
    {
        // TODO: Implement suspend() method.
    }

    /**
     * @inheritDoc
     */
    public function recover()
    {
        // TODO: Implement recover() method.
    }

    /**
     * @inheritDoc
     */
    public function terminate()
    {
        // TODO: Implement terminate() method.
    }

    /**
     * @inheritDoc
     */
    public function changePassword()
    {
        // TODO: Implement changePassword() method.
    }

    /**
     * @inheritDoc
     */
    public function serviceInfo($ajax = false)
    {
        // TODO: Implement serviceInfo() method.
    }

    /**
     * @inheritDoc
     */
    public function usage()
    {
        // TODO: Implement usage() method.
    }

    /**
     * @inheritDoc
     */
    public function upgradeDowngrade()
    {
        // TODO: Implement upgradeDowngrade() method.
    }
}