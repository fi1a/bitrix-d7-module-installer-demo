<?php

declare(strict_types=1);

namespace Fi1a\Installers;

/**
 * Библиотека
 */
class Fi1aBitrixD7ModuleInstallerDemo extends AbstractLibrary
{
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
        $this->output->writeln('<success>Install fi1a/bitrix-d7-module-installer-demo success</success>');

        return true;
    }

    /**
     * @inheritDoc
     */
    public function uninstall(): bool
    {
        $this->output->writeln('<success>Uninstall fi1a/bitrix-d7-module-installer-demo success</success>');

        return true;
    }
}
