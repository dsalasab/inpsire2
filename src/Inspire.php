<?php

namespace Ghusr\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://type.fit/api/quotes');
        return $response[0]['author']." said that ".$response[0]['text'];
    }
}
