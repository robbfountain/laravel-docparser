<?php

Route::namespace('onethirtyone\docparser\Controllers')->group(function () {
    Route::get('docs', 'DocParserController@showRoot')
        ->name('docparser.show');

    Route::get('docs/{section}/{topic?}', 'DocParserController@show')
        ->name('docparser.show.topic');
});
