<?php

/**
 * Инсталятор модуля
 */
class fi1a_bitrixd7moduleinstallerdemo extends CModule
{
    var $MODULE_ID = 'fi1a.bitrixd7moduleinstallerdemo';

    /**
     * Установка
     */
    public function DoInstall()
    {
        return true;
    }

    /**
     * Удаление модуля
     */
    public function DoUninstall()
    {
        return true;
    }
}