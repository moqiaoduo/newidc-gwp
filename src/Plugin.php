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
            ''
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