# 运行流程
1. git clone https://github.com/916954029/yii2-backend-tpl.git
2. cd yii2-backend-tpl
3. composer install
4. php init
5. 配置 common/config/main-local.php 文件中的 db 部分
6. 执行命令 ```yii migrate```
7. 开始访问!（后台登录用户名为 admin，密码为 12345）

# 附：

* nginx 虚拟机配置
```
server {
	charset utf-8;
	client_max_body_size 128M;

	listen 80; ## listen for ipv4
	#listen [::]:80 default_server ipv6only=on; ## listen for ipv6

	server_name local.backend.do-you-know.com;
	root        D:\Projects\do-you-know-backend\backend\web;
	index       index.php;

	access_log logs/local.backend.do-you-know.com.access.log;
	error_log logs/local.backend.do-you-know.com.error.log;

	location / {
		# Redirect everything that isn't a real file to index.php
		try_files $uri $uri/ /index.php$is_args$args;
	}

	# uncomment to avoid processing of calls to non-existing static files by Yii
	#location ~ \.(js|css|png|jpg|gif|swf|ico|pdf|mov|fla|zip|rar)$ {
	#    try_files $uri =404;
	#}
	#error_page 404 /404.html;

	# deny accessing php files for the /assets directory
	location ~ ^/assets/.*\.php$ {
		deny all;
	}

	location ~ \.php$ {
		include fastcgi_params;
		fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
		fastcgi_pass 127.0.0.1:9000;
		#fastcgi_pass unix:/var/run/php5-fpm.sock;
		try_files $uri =404;
	}

	location ~* /\. {
		deny all;
	}
}
```

* 更多详细信息请阅读
    - https://github.com/dmstr/yii2-adminlte-asset
    - https://github.com/mdmsoft/yii2-admin
