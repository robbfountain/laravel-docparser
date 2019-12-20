<?php


namespace onethirtyone\docparser\Controllers;

use App\Http\Controllers\Controller;
use onethirtyone\docparser\Documentation;

/**
 * Class DocParserController
 * @package onethirtyone\docparser\Controllers
 */
class DocParserController extends Controller
{
    /**
     * @var Documentation
     */
    public $docs;

    /**
     * DocParserController constructor.
     *
     * @param Documentation $docs
     */
    public function __construct(Documentation $docs)
    {
        $this->docs = $docs;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function showRoot()
    {
        return redirect(route('docparser.show.topic', [
            'section' => 'general',
            'topic' => 'overview',
        ]));
    }

    /**
     * @param $section
     * @param $topic
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function show($section, $topic = null)
    {
        if (!$this->isSection($section)) {
            $section = Documentation::DEFAULT_SECTION;
        }

        $content = $this->docs->get($topic);

        if (is_null($content)) {
            return view('docparser::doc', [
                'index' => $this->docs->getIndex(),
                'content' => 'Not Found',
            ]);
        }

        return view('docparser::doc', [
            'index' => $this->docs->getIndex(),
            'content' => $content,
        ]);
    }

    /**
     * @param $section
     *
     * @return bool
     */
    public function isSection($section)
    {
        return array_key_exists($section, Documentation::getDocSections());
    }

}