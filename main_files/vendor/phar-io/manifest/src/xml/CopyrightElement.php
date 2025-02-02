<<<<<<< HEAD
<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Manifest;

class CopyrightElement extends ManifestElement {
    public function getAuthorElements(): AuthorElementCollection {
        return new AuthorElementCollection(
            $this->getChildrenByName('author')
        );
    }

    public function getLicenseElement(): LicenseElement {
        return new LicenseElement(
            $this->getChildByName('license')
        );
    }
}
=======
<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Manifest;

class CopyrightElement extends ManifestElement {
    public function getAuthorElements(): AuthorElementCollection {
        return new AuthorElementCollection(
            $this->getChildrenByName('author')
        );
    }

    public function getLicenseElement(): LicenseElement {
        return new LicenseElement(
            $this->getChildByName('license')
        );
    }
}
>>>>>>> 0aeda949 (Updating backend files in main_files)
