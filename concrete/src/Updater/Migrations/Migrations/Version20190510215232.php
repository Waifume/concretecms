<?php

namespace Concrete\Core\Updater\Migrations\Migrations;

use Concrete\Core\Entity\Attribute\Key\Settings\Settings;
use Concrete\Core\Entity\Attribute\Key\Settings\UserGroupSettings;
use Concrete\Core\Updater\Migrations\AbstractMigration;

class Version20190510215232 extends AbstractMigration
{

    public function upgradeDatabase()
    {
        $this->refreshEntities([
            UserGroupSettings::class,
            Settings::class,
        ]);
    }
}
