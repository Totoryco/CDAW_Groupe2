
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

$response = Http::get('https://api.jikan.moe/v3/anime/1');

echo $response;