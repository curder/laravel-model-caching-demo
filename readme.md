## 介绍

Laravel Model Caching 顾名思义，Laravel框架的模型缓存。

本项目是来自文章 [Laravel Model Caching](https://laravel-news.com/laravel-model-caching) 的练习，感谢开源。

## 安装

```
git clone https://github.com/curder/laravel-model-caching && cd laravel-model-caching

cp .env.example .env

composer install
php artisan key:generate
```

## 配置

1. 打开 `.env` 文件，修改里面的数据库配置信息。

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

2. 运行数据库迁移文件和假数据

```
php artisan migrate:refresh --seed
```