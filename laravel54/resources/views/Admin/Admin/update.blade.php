<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>修改用户</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <link rel="stylesheet" href="/Admin/js/umeditor/themes/default/css/umeditor.css">
    <link rel="stylesheet" href="/Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script type="text/javascript" src="/Admin/jeDate/jedate.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span> 修改用户</strong></div>
    <div class="body-content">
        <form method="post" class="form-x"  >
            {{csrf_field()}}
            <div class="form-group">
                <div class="label">
                    <label>用户名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="account" value="{{$row->account}}" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>昵称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="nickname" value="{{$row->nickname}}" />
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>密码：</label>
                </div>
                <div class="field">
                    <input type="password" class="input" name="password" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>邮箱：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" name="email" value="{{$row->email}}" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>备注：</label>
                </div>
                <div class="field">
                    <textarea  class="input" name="remark" rows="4" cols="20">{{$row->remark}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>状态：</label>
                </div>
                <div class="field">
                    <select  type="text" class="input w50" name="status"  required="required">
                        <option value="0">--请选择--</option>
                        <option value=3
                                @if($row->status == 3)
                                selected
                                @endif
                        >显示</option>
                        <option value=2
                                @if($row->status == 2)
                                selected
                                @endif
                        >锁定</option>
                        <option value=0
                                @if($row->status == 0)
                                selected
                                @endif
                        >禁用</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="text-center">
                    <div class="field">
                        <input type="submit" value="修改" />
                        <input type="reset" value="重置" />
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(function(){
        $(":radio").click(function(){
            if($(this).val()=="默认"){
                $(this).parent().children("p").text("使用系统默认的价格模式,统一使用一样的价格");
            }else if($(this).val()=="仓库"){
                $(this).parent().children("p").text("使用仓库的价格模式,根据不同仓库调取不同价格");
            }else{
                $(this).parent().children("p").text("使用地区的价格模式,根据不同地区调取不同价格");
            }
        });
    });
</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" charset="utf-8" src="js/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="js/umeditor/umeditor.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/umeditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
    var umMonth = UM.getEditor('editor-year');
    $('select').select();
</script>
<script type="text/javascript">
    //jeDate.skin('gray');
    jeDate({
        dateCell:"#dateinfo",
        format:"YYYY-MM-DD hh:mm:ss",
        isinitVal:true,
        isTime:true, //isClear:false,
        minDate:"2017-01-08 00:00:00",
    })
    jeDate({
        dateCell:"#dateinfoa",
        format:"YYYY-MM-DD hh:mm:ss",
        isinitVal:true,
        isTime:true, //isClear:false,
        minDate:"2017-01-08 00:00:00",
    })
    jeDate({
        dateCell:"#dateinfob",
        format:"YYYY-MM-DD hh:mm:ss",
        isinitVal:true,
        isTime:true, //isClear:false,
        minDate:"2017-01-08 00:00:00",
    })
    jeDate({
        dateCell:"#dateinfoc",
        format:"YYYY-MM-DD hh:mm:ss",
        isinitVal:true,
        isTime:true, //isClear:false,
        minDate:"2017-01-08 00:00:00",
    })
</script>
</body>
</html>


