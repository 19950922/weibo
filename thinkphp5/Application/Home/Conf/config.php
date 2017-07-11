<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'weibo', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集


	// 配置邮件发送服务器
	'MAIL_SMTP'       =>TRUE,
	'MAIL_HOST'       =>'smtp.qq.com',    //邮件发送SMTP服务器
	'MAIL_SMTPAUTH'   =>TRUE,
	'MAIL_USERNAME'   =>'593291641@qq.com', //SMTP服务器登陆用户名
	'MAIL_PASSWORD'   =>'rtzocizshsdxbbje',       //SMTP服务器登陆密码
	'MAIL_SECURE'     =>'tls',
	'MAIL_CHARSET'    =>'utf-8',
	'MAIL_ISHTML'     =>TRUE,
	'MAIL_FROMNAME'   =>'zhangsan',

/*	'SMTP_HOST'   => 'smtp.qq.com', //SMTP服务器
	'SMTP_PORT'   => '25', //SMTP服务器端口
	'SMTP_USER'   => '593191641@qq.com', //SMTP服务器用户名
	'SMTP_PASS'   => 'rtzocizshsdxbbje', //SMTP服务器密码
	'FROM_EMAIL'  => '593291641@qq.com', //发件人EMAIL
	'FROM_NAME'   => 'zhangsan', //发件人名称
	'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
	'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）*/

);