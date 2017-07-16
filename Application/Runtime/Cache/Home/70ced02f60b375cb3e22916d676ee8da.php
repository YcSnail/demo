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




<title>创建mysql配置文件</title>



    <div class="container-fluid">

        <div class="conent col-md-offset-3 col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>创建mysql配置文件</h3></div>
                <div class="panel-body">
                    <form action="<?php echo U('Index/createMysql');?>" method="post" role="form" id="form1">
                        <div class="form-group">
                            <input name="host" type="text" class="form-control" placeholder="请host地址">
                        </div>
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="请输入用户名">
                        </div>
                        <div class="form-group">
                            <input name="pwd" type="text" class="form-control" placeholder="请输入密码">
                        </div>

                        <div class="form-group">
                            <input name="base" type="text" class="form-control" placeholder="请输入数据库名">
                        </div>

                        <button type="submit" id="submit" class="btn btn-primary">提交</button>
                        <a href="<?php echo U('Index/index');?>">
                            <button type="button" class="btn btn-primary">
                                点击返回首页
                            </button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <script>


        $('#submit').click(function () {
            var bool = true;
            $("input:text").each(function() {
                if($.trim($(this).val()) == "") {
                    layer.msg('填写完整的参数,你是不是傻');
                    bool =  false;
                    return bool;
                }
            });

            return bool;
        })
    </script>