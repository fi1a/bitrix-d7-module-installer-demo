<?php

declare(strict_types=1);

namespace Fi1a\Installers;

use Bitrix\Main\Config\Option;
use CModule;

/**
 * Библиотека
 */
class Fi1aBitrixd7moduleinstallerdemo extends AbstractLibrary
{
    public const MODULE_ID = 'fi1a.bitrixd7moduleinstallerdemo';

    /**
     * @inheritDoc
     */
    public function canInstall(): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function canUninstall(): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function install(): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function uninstall(): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function getCurrentVersion(): VersionInterface
    {
        $this->includeBitrix();
        [$major, $minor, $build] = explode(
            '.',
            (string) Option::get(static::MODULE_ID, 'version', '1.0.0')
        );

        return new Version((int) $major, (int) $minor, (int) $build);
    }

    /**
     * @inheritDoc
     */
    public function getUpdateVersion(): VersionInterface
    {
        $this->includeBitrix();
        /**
         * @var \fi1a_bitrixd7moduleinstallerdemo $module
         */
        $module = CModule::CreateModuleObject(static::MODULE_ID);
        // @codingStandardsIgnoreStart
        [$major, $minor, $build] = explode(
            '.',
            (string) $module->MODULE_VERSION
        );
        // @codingStandardsIgnoreEnd

        return new Version((int) $major, (int) $minor, (int) $build);
    }

    /**
     * Подключить битрикс
     */
    private function includeBitrix(): void
    {
        $_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/../../../..');

        defined('NO_KEEP_STATISTIC') || define('NO_KEEP_STATISTIC', true);
        defined('NOT_CHECK_PERMISSIONS') || define('NOT_CHECK_PERMISSIONS', true);
        defined('BX_WITH_ON_AFTER_EPILOG') || define('BX_WITH_ON_AFTER_EPILOG', true);
        defined('BX_NO_ACCELERATOR_RESET') || define('BX_NO_ACCELERATOR_RESET', true);

        /**
         * @psalm-suppress UnresolvableInclude
         */
        require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
    }
}
