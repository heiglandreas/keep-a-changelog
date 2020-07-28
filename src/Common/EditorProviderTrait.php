<?php

/**
 * @see       https://github.com/phly/keep-a-changelog for the canonical source repository
 * @copyright Copyright (c) 2019 Matthew Weier O'Phinney
 * @license   https://github.com/phly/keep-a-changelog/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Phly\KeepAChangelog\Common;

/**
 * Provides an implementation of EditorAwareEventInterface.
 */
trait EditorProviderTrait
{
    /** @var null|string */
    private $editor;

    public function editor(): ?string
    {
        return $this->editor;
    }

    public function discoverEditor(string $editor): void
    {
        $this->editor = $editor;
    }
}
