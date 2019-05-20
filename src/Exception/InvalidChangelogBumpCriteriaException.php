<?php
/**
 * @see       https://github.com/phly/keep-a-changelog for the canonical source repository
 * @copyright Copyright (c) 2019 Matthew Weier O'Phinney
 * @license   https://github.com/phly/keep-a-changelog/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Phly\KeepAChangelog\Exception;

use InvalidArgumentException;

use function sprintf;

class InvalidChangelogBumpCriteriaException extends InvalidArgumentException implements ExceptionInterface
{
    public function forCriteria(?string $bumpMethod, ?string $version) : self
    {
        return new self(sprintf(
            'Cannot bump version. Either a bump type OR an explicit version to'
            . ' bump to should be provided; received %s',
            $bumpMethod && $version ? 'both' : 'neither'
        ));
    }
}