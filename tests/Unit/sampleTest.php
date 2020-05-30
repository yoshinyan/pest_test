<?php

test('足し算のテスト', function () {
    $sum = 1 + 1;
    assertEquals(2, $sum);
})->group('calc')->skip();

test('引き算のテスト', function () {
    $sum = 2 - 1;
    assertEquals(1, $sum);
})->group('calc')->skip('testでskip');

test('かけ算のテスト', function () {
    $num = 10;

    $result = 2 * 2;
    assertEquals(4, $result);
})->group('calc')->skip($num < 100, 'numが100より小さければskip');

// test('わり算のテスト', function () {
//     $result = 2 / 1;
//     assertEquals(2, $result);
// })->group('calc')->only();

// test('あとで複雑な計算のテストを書く');
// it('あとでなんかのテストを書く');

test('上($this)と下は同じ', function () {
    $this->assertTrue(true);

    // 上と下は同じ
    assertTrue(true);
});

test('真テスト', function () {
    assertTrue(true);
});

test('偽テスト', function () {
    assertFalse(false);
});

test('同じ数か?', function () {
    $array = [1, 2, 3, 4, 5];

    assertCount(5, $array);
});

test('同じものかどうか', function () {
    $var = 'hoge';

    $this->assertEquals('hoge', $var);
});

test('空かかどうか', function () {
    $empty_array = [];

    $this->assertEmpty($empty_array);
});

test('特定の文字列を含むか', function () {
    $hoge = 'hogetarou';

    assertStringContainsString('hoge', $hoge);
});

test('throws exception', function () {
    throw new Exception('Something happened.');
})->throws(Exception::class);

test('throws exception with message', function () {
    throw new Exception('Something happened.');
})->throws(Exception::class, 'Something happened.');