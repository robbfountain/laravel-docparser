<?php

namespace onethirtyone\docparser;

use Illuminate\Filesystem\Filesystem;

/**
 * Class Documentation
 * @package onethirtyone\docparser
 */
class Documentation
{
    /**
     * @var Filesystem
     */
    public $files;

    /**
     * Documentation constructor.
     *
     * @param Filesystem $files
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * @return string|null
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getIndex()
    {
        $path = resource_path('docs/documentation.md');

        if ($this->files->exists($path)) {
            return (new \Parsedown())->text($this->files->get($path));
        }

        return null;
    }

    /**
     * @param $topic
     *
     * @return string|null
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function get($topic)
    {
        $path = resource_path('docs/' . $topic . '.md');

        if ($this->files->exists($path)) {
            return (new \Parsedown())->text($this->files->get($path));
        }

        return null;
    }
}