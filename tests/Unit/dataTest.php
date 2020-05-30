<?php

it('メールアドレスを持っている', function ($email) {
    assertNotEmpty($email);
})->with([
    'hogetarou@gmail.com',
    'fugajirou@example.com'
]);

it('datasetsからデータを取得してテストする', function ($email) {
    assertNotEmpty($email);
})->with('emails');