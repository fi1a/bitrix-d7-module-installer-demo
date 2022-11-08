<?php

declare(strict_types=1);

namespace Fi1a\Installers\Fi1aBitrixd7moduleinstallerdemo\Versions\Version1_0_3;

use Fi1a\Installers\AbstractUpdateVersion;

/**
 * Обновление версии 1.0.3
 */
class UpdateVersion extends AbstractUpdateVersion
{
    /**
     * @inheritDoc
     */
    public function update(): bool
    {
        require __DIR__ . '/updater.php';
        $this->output->writeln('UpdateVersion->update 1.0.3');

        return true;
    }
}
