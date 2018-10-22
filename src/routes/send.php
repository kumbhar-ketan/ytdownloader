<?php
Route::get('/index','Ketanninja1993\YTdownloader\Handlers\ServiceHandler@index');
Route::post('/index','Ketanninja1993\YTdownloader\Handlers\ServiceHandler@getLinks')->name('get-links');