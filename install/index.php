<?php

use Bitrix\Main\Config\Option;
use Bitrix\Main\ModuleManager;

/**
 * Инсталятор модуля
 */
class fi1a_bitrixd7moduleinstallerdemo extends CModule
{
    var $MODULE_ID = 'fi1a.bitrixd7moduleinstallerdemo';
    var $MODULE_NAME = 'Bitrix d7 module installer demo';
    var $MODULE_DESCRIPTION = 'Демо модуль установки через fi1a/installers';
    var $MODULE_VERSION = '1.1.0';

    /**
     * Установка
     */
    public function DoInstall()
    {
        Option::set($this->MODULE_ID, 'version', $this->MODULE_VERSION);
        ModuleManager::registerModule($this->MODULE_ID);
        echo 'Module->DoInstall' . PHP_EOL;

        return true;
    }

    /**
     * Удаление модуля
     */
    public function DoUninstall()
    {
        Option::delete($this->MODULE_ID, ['name' => 'version']);
        ModuleManager::unRegisterModule($this->MODULE_ID);
        echo 'Module->DoUninstall' . PHP_EOL;

        return true;
    }
}