Yii 2 项目基础模板
============================
这是一份官方提供的Yii2.0.6项目基础模板，在上面添加了一些有用的注释。

目录结构
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



依赖
------------

Yii2使用php5.4+版本，但是由于不是测试环境，因此我使用了php5.6。因此如果您在运行项目的时候也使用php5.6，那是极好的。

配置
-------------

### 数据库

把config/db.php中数据库的设置成自己机器的数据库

### nginx
可以直接使用的配置


    server {
        listen       80;
        server_name  yii;

        #charset koi8-r;

        #access_log  logs/host.access.log  main;
        #据机器而定
        root   /your/project/location;

        
        location / {
            index  index.html index.htm index.php;
            try_files $uri?$args $uri/?$args $uri $uri/ /index.php?$args;

        }

        #error_page  404              /404.html;

        # redirect server error pages to the static page /50x.html
        #
        error_page   500 502 503 504  /50x.html;
        location = /50x.html {
            root   html;
        }

        # proxy the PHP scripts to Apache listening on 127.0.0.1:80
        #
        #location ~ \.php$ {
        #    proxy_pass   http://127.0.0.1;
        #}

        # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
        #php配置也据机器而定
        location ~ \.php$ {
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            include        fastcgi.conf;
        }

        # deny access to .htaccess files, if Apache's document root
        # concurs with nginx's one
        #
        #location ~ /\.ht {
        #    deny  all;
        #}
    }
    
### hosts文件
* Mac OSX 添加这一行  127.0.0.1 yii

注意：可能需要注销或者重启才能使得hosts文件生效

    


