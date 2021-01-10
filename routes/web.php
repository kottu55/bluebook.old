<?php

use Illuminate\Support\Facades\Route;

$html = <<<EOF
<html>
    <body>
        <h1>EOFを利用したhtml</h1>
        <p>サンプルで作ったページです。</p>
    </body>
</html>
EOF;



Route::get('/', function () {
    return view('index');
});

Route::get('hello', function (){
    return '<html><body><h1>hello</h1></body></html>';
});

Route::get('eof', function() use($html){
    return $html;
});
