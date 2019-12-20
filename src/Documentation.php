<?php

namespace onethirtyone\docparser;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;

/**
 * Class Documentation
 * @package onethirtyone\docparser
 */
class Documentation
{
    /**
     * Default document section
     */
    const DEFAULT_SECTION = 'general';

    /**
     * @var Filesystem
     */
    public $files;

    /**
     * @var Cache
     */
    public $cache;

    /**
     * Documentation constructor.
     *
     * @param Filesystem $files
     * @param Cache      $cache
     */
    public function __construct(Filesystem $files, Cache $cache)
    {
        $this->files = $files;
        $this->cache = $cache;
    }

    /**
     * @param $section
     *
     * @return array
     */
    public static function getDocSections()
    {
        return [
            'general' => 'General',
        ];
    }

    /**
     * @return string|null
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getIndex()
    {
        $path = base_path('resources/docs/documentation.md');

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
        $path = base_path('resources/docs/' . $topic . '.md');

        if ($this->files->exists($path)) {
            return (new \Parsedown())->text($this->files->get($path));
        }

        return null;
    }

    /**
     * @param $topic
     *
     * @return bool
     */
    public function topicExists($topic)
    {
        return $this->files->exists(
            base_path('resources/docs/' . $topic . '.md')
        );
    }


}