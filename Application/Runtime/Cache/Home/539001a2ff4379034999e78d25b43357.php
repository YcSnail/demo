<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/layer/layer.js"></script>

    <style>

        a:hover{
            text-decoration:none;
        }

        button a{
            color: #fff;
        }

        button a:hover{
            color: #fff;
        }
        .content{
            margin-top: 50px;
        }

    </style>
</head>
<body>

<div class="content">
    

    
</div>


</body>

</html>





<title>服务器配置文件下载</title>



    <div class="container-fluid">

        <div class="conent col-md-offset-3 col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>下载配置文件</h3></div>
                <div class="panel-body">
                    <h4>若没有自动下载请点击下载</h4>
                    <button type="button" class="btn btn-success">
                        <a href="<?php echo ($filePath); ?>">下载</a>
                    </button>

                    <button type="button" class="btn btn-primary">
                        <a href="<?php echo U('Index/index');?>">点击返回首页</a>
                    </button>

                </div>
            </div>
        </div>

    </div>

    <script>
        $(window).attr('location','<?php echo ($filePath); ?>');
    </script>