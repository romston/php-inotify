<?php
declare(strict_types=1);

namespace Inotify;

class WatchedDir
{
    private $pathname;
    private $watchOnChangeFlags;
    private $customName;

    public function __construct(
        string $pathname,
        int $watchOnChangeFlags,
        string $customName
    ) {
        $this->pathname = $pathname;
        $this->watchOnChangeFlags = $watchOnChangeFlags;
        $this->customName = $customName;
    }

    public function getWatchOnChangeFlags(): int
    {
        return $this->watchOnChangeFlags;
    }

    public function getCustomName(): string
    {
        return $this->customName;
    }

    public function getPathname(): string
    {
        return $this->pathname;
    }
}