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

    public function showRoot()
    {
        return redirect(route('docparser.show.topic', [
            'category' => 'introduction',
            'topic' => 'overview',
        ]));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($category, $topic)
    {
        return view('docparser::doc', [
            'index' => $this->docs->getIndex(),
            'content' => $this->docs->get($topic),
        ]);
    }

}