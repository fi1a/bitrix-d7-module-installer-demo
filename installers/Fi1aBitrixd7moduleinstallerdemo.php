<?php

declare(strict_types=1);

namespace Fi1a\Installers;

/**
 * Библиотека
 */
class Fi1aBitrixd7moduleinstallerdemo extends AbstractLibrary
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
        return true;
    }

    /**
     * @inheritDoc
     */
    public function uninstall(): bool
    {
        return true;
    }
}
