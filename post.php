<?php
// 引入 Parsedown 类
require_once('requires/mdload.inc');

// 文章存储目录（注意末尾斜杠）
$baseDir = __DIR__ . '/requires/post/';

// 文章 ID → 文件名 映射
$articleMap = [
    1 => 'maomao_server_about.md',
    2 => 'minecraft_pe_release_protocols.md',
    3 => 'about_me.md',
    // 继续添加...
];

// 获取并校验 page 参数
$id = isset($_GET['page']) ? (int)$_GET['page'] : 0;
if (!isset($articleMap[$id])) {
    die('文章不存在');
}

$file = $articleMap[$id];

// 安全校验：只允许 字母/数字/下划线/横线/点，且以 .md 结尾
if (!preg_match('/^[a-zA-Z0-9_\-\.]+\.md$/', $file)) {
    die('非法文件名');
}

$filePath = $baseDir . $file;

if (!file_exists($filePath) || !is_readable($filePath)) {
    die('文件不存在或不可读');
}

// 读取并渲染 Markdown
$markdown = file_get_contents($filePath);
$parsedown = new Parsedown();
$htmlContent = $parsedown->text($markdown);

// 输出完整的 HTML 页面
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文章: <?php echo($id) ?></title>
    <!-- 可选：加载一个简单的 Markdown 样式（GitHub 风格） -->
    <style>
        body {
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif;
            line-height: 1.6;
            color: #24292e;
        }
        pre {
            background: #f6f8fa;
            padding: 16px;
            border-radius: 6px;
            overflow: auto;
        }
        code {
            background: #f6f8fa;
            padding: 0.2em 0.4em;
            border-radius: 3px;
        }
        blockquote {
            border-left: 4px solid #dfe2e5;
            padding-left: 16px;
            margin-left: 0;
            color: #6a737d;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dfe2e5;
            padding: 6px 13px;
        }
        th {
            background: #f6f8fa;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <?php echo $htmlContent; ?><br>
    <a href="index.php">Back to Index</a>
</body>
</html>