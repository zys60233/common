# nginx 安装

1. 下载nginx安装包

2. 解压

3. 配置

   ./configure --prefix= /usr/local/nginx \		//nginx安装位置

   --sbin-path=/usr/bin					//nginx可执行文件安装位置

   --conf-path=/usr/local/nginx/nginx.conf \		//nginx配置文件地址

   --pid-path=/usr/local/nginx/nginx.pid \		//nginx主进程号存放地址

   --with-http_ssl_module					//使用openssl模块

   --with-pcre							//使用pcre库

4. 编译安装

   make & make install