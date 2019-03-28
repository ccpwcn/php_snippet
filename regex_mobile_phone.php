<?php
/**
 * Created by PhpStorm.
 * User: lidawei
 * Date: 2019/3/28
 * Time: 14:03
 */

// 正则表达式 替换手机号中间四位为星号，使用了反向引用
$strs = [
    '13244556677',
    '45645645645',
    '编辑',
    '13211111234',
    '13211111324',
    'aa bbbb abcdefg ccccc111121111  999999999',
];

foreach ($strs as $str) {
    echo $str . ' --> ' . preg_replace('/^(1\d{2})(\d{4})(\d{4})$/m', '\1****\2', $str) . '<br>';
}