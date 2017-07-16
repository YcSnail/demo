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





<title>功能小站</title>


    <div class="container-fluid">


        <div class="conent col-md-offset-3 col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>请开始你的表演</h3></div>
                <div class="panel-body">

                    <a href="<?php echo U('Index/createConf');?>">
                        <button type="button" class="btn btn-primary">
                            创建conf文件
                        </button>
                    </a>

                    <a href="<?php echo U('Index/createMysql');?>">
                        <button type="button" class="btn btn-primary">
                            创建Mysql文件
                        </button>
                    </a>

                    <a href="<?php echo U('Index/changePass');?>">
                        <button type="button" class="btn btn-primary">
                            修改微擎密码
                        </button>
                    </a>

                    <a href="<?php echo U('Index/begin');?>">
                        <button type="button" class="btn btn-primary">
                            开始微擎
                        </button>
                    </a>

                </div>
            </div>
        </div>

    </div>