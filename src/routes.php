<?php

Route::namespace('onethirtyone\docparser\Controllers')->group(function () {
    Route::get('docs', 'DocParserController@show')
        ->name('docparser.show');

    Route::get('docs/{category}/{topic?}', 'DocParserController@showTopic')
        ->name('docparser.show.topic');
});
