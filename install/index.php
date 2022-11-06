<?php

use Bitrix\Main\ModuleManager;

/**
 * Инсталятор модуля
 */
class fi1a_bitrixd7moduleinstallerdemo extends CModule
{
    var $MODULE_ID = 'fi1a.bitrixd7moduleinstallerdemo';
    var $MODULE_NAME = 'Bitrix d7 module installer demo';
    var $MODULE_DESCRIPTION = 'Демо модуль установки через fi1a/installers';
    var $MODULE_VERSION = '1.0.0';

    /**
     * Установка
     */
    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
        echo 'Module->DoInstall';

        return true;
    }

    /**
     * Удаление модуля
     */
    public function DoUninstall()
    {
        ModuleManager::unRegisterModule($this->MODULE_ID);
        echo 'Module->DoUninstall';

        return true;
    }
}