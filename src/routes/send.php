<?php
Route::get('/index','KeTanKuMbhar\YTdownloader\Handlers\ServiceHandler@index');
Route::post('/index','KeTanKuMbhar\YTdownloader\Handlers\ServiceHandler@getLinks')->name('get-links');