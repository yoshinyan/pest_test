<?php
test('足し算のテスト', function () {
    $sum = 1 + 1;
    assertEquals(2, $sum);
});

// or
it('引き算のテスト', function () {
    $sum = 2 - 1;
    assertEquals(1, $sum);
});