# Yii2.0 学习笔记

## 第二章 基础配置

### 框架安装

> composer create-project yiisoft/yii2-app-advanced yiiblog

1. 前台 yiiblog/frontend/web/index.php
2. 后台 yiiblog/backend/web/index.php

### 数据库配置

> yiiblog/common/config/main-local.php

```php
[
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii_imooc_blog',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
    ]
]
```

### 隐藏入口,美化url

> yiiblog/frontend/config/main.php

```php
[
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'suffix' => '.html',
        ]
    ]
]
```

### 中文配置

> yiiblog/frontend/config/main.php

```php
[
    'language' => 'zh-CN',   // 中文支持
]
```