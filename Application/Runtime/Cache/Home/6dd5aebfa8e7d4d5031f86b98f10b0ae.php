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




<title>修改微擎密码</title>



    <div class="container-fluid">

        <div class="conent col-md-offset-3 col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>修改微擎密码</h3></div>
                <div class="panel-body">
                    <h3><?php echo ($pssworld); ?></h3>
                    <form action="<?php echo U('Index/changePass');?>" method="post" role="form" id="form1">
                        <div class="form-group">
                            <input name="pass" type="text" class="form-control" placeholder="请输入密码">
                        </div>
                        <div class="form-group">
                            <input name="salt" type="text" class="form-control" placeholder="请输入salt  (从数据库ims_users获得的)">
                        </div>

                        <div class="form-group">
                            <input name="authkey" type="text" class="form-control" placeholder="请输入authkey  (从data/config文件获得的)">
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