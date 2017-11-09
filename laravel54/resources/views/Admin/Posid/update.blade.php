<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="/css/pintuer.css">
    <link rel="stylesheet" href="/css/admin.css">
    <script src="/js/jquery.js"></script>
    <script src="/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head">
        <strong><span class="icon-key"></span> 修改推荐位</strong>
        <strong  style="float: right"><span class="icon-paper-plane-o"></span> <a href="/posid">【返回推荐位列表】</a></strong></strong>
    </div>
    <div class="body-content">
        <form method="post" class="form-x" action="/posid/update/{{$list->id}}">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="label">
                    <label>推荐位名字：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="type" value="{{$list->type}}"/>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>显示状态：</label>
                </div>
                <div class="field">
                    <select  type="text" class="input w50" name="status"  required="required">
                        <option value="0">--请选择--</option>
                        <option  @if($list->status == 1) selected  @endif value=1 >显示</option>
                        <option  @if($list->status == 0) selected  @endif  value=0>禁用</option>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(function(){
        $(".aa").click(function(){
            level = $(this).val();
            if(level ==1){
                document.getElementById("pid").innerHTML = "<option value='0'>--请选择--</option>";
            }else{
                $.ajax({
                    url: "/node/getList/"+level,
                    type: "get",
                    dataType:"json",
                    success: function (data) {
                        var aa = eval(data);
                        var options_html="";
                        for(var i=0;i<aa.length;i++){
                            options_html+="<option value='"+aa[i].id+"'>"+aa[i].title+"</option>";
                        }
                        document.getElementById("pid").innerHTML = options_html;
                    },
                    error: function () {
                        alert('error');
                    }
                });
            }
        });

    });

</script>
</html>