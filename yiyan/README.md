#### 部署服务端：

下载代码上传至你的域名根目录，把解压出来的文件夹改名为 yiyan 。

然后访问 https://域名及文件路径/yiyan/ 即可看见效果。  
示例：https://imlzc.com/yiyan/


#### 调用服务端：

**PHP调用方法：**  
添加如下代码到页面头部：
```php
<?php $hitokoto = file_get_contents('https://域名及文件路径/yiyan/'); ?>
```

注意：  
需要把代码中的URL地址替换为你自己的URL。

然后在需要显示“一言”的标签，插入如下代码：
```php
<?php echo $hitokoto; ?>
```

JS调用方法
添加如下代码到页面底部；

$.post("https://sunpma.com/other/hitokoto/", function(hitokoto) {
    $(".content").html(hitokoto);
});

把代码第二行的 content 标签改为你页面需要输出“一言”文字的标签即可

注意：  
需要把代码中的URL地址替换为你自己的URL。
JS 调用需要 jquery.min.js ，一般主题都有，无需再引用。
一言输出内容修改yiyan.txt文件即可，一行一句
调用示例请看 demo.php 。

以下为专用修改 说明：
**WordPress主题H-Siren-ver4.38应用方法**
添加如下代码到主题js文件一言相应位置  /js/app.js
// 一言替换简介
if (Poi.hitokoto == 'open') {
    $(function () {
         $.post("https://imlzc.com/yiyan/", function(hitokoto) {
    $('.header-info p').html(hitokoto)
        });
    });



