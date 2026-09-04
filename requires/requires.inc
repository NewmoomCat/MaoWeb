<?php

class Index {
    const Text = "博客内容在下面";

    const HelloTexts = [
        "你好", "Hello", "Hola",
        "Olá", "안녕하세요" // 我就只搞这些语言
    ];
}

(array) $random_name = Index::HelloTexts[strtolower(array_rand(Index::HelloTexts))];

(string) $b1_name = '关于猫猫服';
(string) $b2_name = 'Minecraft:PE 正式版 0.9 ~ 1.1协议内容';
(string) $about_me = "关于我";