<?php

class Index {
    const Text = "下面是我的一些链接";

    const HelloTexts = [
        "你好", "Hello", "Hola",
        "Olá", "안녕하세요" // 我就只搞这些语言
    ];
}

$random_name = Index::HelloTexts[strtolower(array_rand(Index::HelloTexts))];