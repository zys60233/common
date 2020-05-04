# mysql安装

1. 新建文件夹bld

2. 进入bld，执行cmake命令

   cmake .. -DCMAKE_INSTALL_PREFIX=/usr/local/mysql -DMYSQL_DATADIR=/usr/local/mysql/data -DSYSCONFDIR=/usr/local/mysql/conf -DDEFAULT_CHARSET=utf8 -DDEFAULT_COLLATION=utf8_general_ci -DWITH_INNOBASE_STORAGE_ENGINE=1 -DWITH_MYISAM_STORAGE_ENGINE=1 -DENABLED_LOCAL_INFILE=1 -DWITH_EXTRA_CHARSETS=all -DDOWNLOAD_BOOST=1 -DWITH_BOOST=/usr/local/mysql/boost

3. 添加用户

   groupadd mysql

   useradd -r -g mysql -s /bin/false mysql

4. 新建文件夹

   mkdir mysql-files

   chown mysql:mysql mysql-files/

   chmod 750 mysql-files/

5. 创建data文件夹并修改权限为mysql

  mkdir data

  chown mysql:mysql data

6. 数据库初始化

   bin/mysqld --initialize --user=mysql

7. 生成公钥和私钥

   bin/mysql_ssl_rsa_setup

8. 修改配置文件/etc/my.cnf

   mysqld中增加

   user=mysql

   datadir=/user/local/mysql/data

   socket=/tmp/mysql.sock

   mysql_safe中增加

   log=/usr/local/mysql/log/mysql.log

9. 新建文件夹/usr/local/mysql/log

   mkdir log

   chown -R mysql:mysql log

10. 复制support-files/mysql.server到/usr/bin目录

   cp support-files/mysql.server /usr/bin/mysqld

11. 创建连接

   ln bin/mysql /usr/bin/mysql

   ln bin/mysqldump /usr/bin/mysqldump

​
