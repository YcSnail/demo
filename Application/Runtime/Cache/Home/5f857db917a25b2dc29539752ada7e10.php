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




<title>创建配置文件</title>


    <div class="container-fluid">


        <div class="conent col-md-offset-3 col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>输入要创建文件的名字</h3></div>
                <div class="panel-body">
                    <form action="<?php echo U('Index/createConf');?>" method="post">

                        <div class="form-group">
                            <label for="exampleInputName">文件名称</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="请输入配置文件名称">
                            <button style="margin-top: 5px" type="submit" id="submit" class="btn btn-success">走你</button>
                        </div>
                    </form>


                    <button type="button" class="btn btn-primary">
                        <a href="<?php echo U('Index/index');?>">点击返回首页</a>
                    </button>

                </div>
            </div>
        </div>



    </div>


    <script>

        $('#submit').click(function () {
            var bool = true;

                if( $('#exampleInputName').val() == "") {
                    layer.msg('写个名字呀,你是不是傻');
                    return false;
                }
            return bool;
        })
    </script>