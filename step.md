# centos7最小化安装xfce桌面

## 1. centos7 最小化安装
       安装时添加新用户

## 2. 安装额外的yum源
       yum install epel-release
## 3. 安装桌面协议
       yum groupinstall "X Window system"
## 4. 安装xfce
       yum groupinstall xfce
## 5. 安装好后进入桌面
       systemctl isolate graphical.target
## 6. 设置默认启动为图形化界面
       systemctl set-default graphical.target
## 7. 安装字体
       yum install cjkuni-ukai-fonts
## 8. 安装chrome
       yum install chromium
## 9. 安装ibus
       yum install ibus
       yum install ibus-libpinyin
       yum install gtk3-immodule-xim
## 10.安装输入法选择器
       yum install im-chooser
## 11.安装fcitx
       yum install fcitx*
