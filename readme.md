# Laravel Blog

Laravel5.2搭建的博客，参照学院[博客教程](http://laravelacademy.org/tutorials/blog)

## 主要功能

- 博客首页

- 博文管理
- 标签管理
- 文件上传管理

## 安装方法

- 复制 __.env.example__ 重命名为 __.env__ 并修改一下配置
```
APP_ENV=remote
APP_DEBUG=false
APP_URL=http://[Host URL]

DB_CONNECTION=mysql
DB_HOST=[MySQL URL]
DB_PORT=3306
DB_DATABASE=blog
DB_USERNAME=[Username]
DB_PASSWORD=[Password]
```

- 新建blog数据库
```
mysql -uroot -p[password]
mysql>create database blog;
mysql>grant all privileges on blog.* to root;
mysql>flush privileges;
```

- 修改文件读写权限
```
chmod 777 .env
```
```
chmod -R 777 storage
```

- 更新依赖包
```
composer update --no-scripts
```
```
npm update
```
```
bower update
  或
bower update --allow-root
```

- 重新生成key
```
php artisan key:generate
```

- 执行数据库迁移
```
php artisan migrate
```

- 生成随机数据
```
php artisan db:seed
```

- 添加用户信息
```
php artisan tinker
>>>$user->name = 'admin'
>>>$user->email = '[Your Email]'
>>>$user->password = bcrypt('[Your Password]')
>>>$user->save()
>>>exit
```

## 示例地址

[Demo](http://120.27.126.8/)

## 参考环境

Nginx 1.6.3

Mysql 5.7.14

PHP 7.0.10

Node.js 5.12.0

Laravel 5.2.45