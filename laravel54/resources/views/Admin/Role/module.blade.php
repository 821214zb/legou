<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>模块授权</title>
</head>
<script type="text/javascript">
    <!--
    //指定当前组模块URL地址
    var URL     =   '__URL__';
    var APP     =   '__APP__';
    var PUBLIC  =   '__PUBLIC__';
    //-->
</script>
<script type="text/javascript">
    function group(id){
        location.href="/role/module/"+id;
    }
    function app(id){
        var option = document.getElementsByName("option[]");
        for(var i=0;i<option.length;i++){
            if(option[i].selected == true){
                var groupId = option[i].value;
            }
        }
        location.href =  "/role/modules/"+id+"/"+groupId;
    }
</script>
<style type="text/css">
    .top{
        border:1px solid black;
        width:400px;
        height:50px;
    }

    .header{
        border:1px solid black;
        width:400px;
        height:50px;
    }

    .center{
        border:1px solid black;
        width:400px;
        height:400px;
    }

    .footer{
        border:1px solid black;
        width:400px;
        height:60px;
    }

    .top_top{
        border:1px solid black;
        height:50px;
        padding-left:150px;
    }

    .top_1,.footer_1{
        margin-top:10px;
    }

    .center_1,.footer_1{
        padding-left:100px;
    }

    .header_1{
        padding-left:80px;
        margin-top:10px;
    }

    a:link{
        color:blue;
        text-decoration:dotted;
    }

    a:hover{
        color:orangered;
        text-decoration:underline;
    }
</style>
<body>
<form method="post" action="/role/setModule">
    {{csrf_field()}}
    <div class="title">应用授权 [ <a href="/role/show">返 回</a> ]</div>
    <div class="header">
        <div class="header_1">
            <a href="/role/app/{{$id}}">应用授权</a>|
            <a href="">模块授权</a>|
            <a href="/role/action/{{$id}}">操作授权</a>
        </div>
    </div>
    <div class="user">
        <div class="top">
            <div class="top_top">
                当前组：
                <select  id= "groupId" class="input" style="width: auto;" name="groupId" >
                    @foreach($groupList  as  $key=>$val)
                        <option name="option[]" value="{{$key}}" onclick="group({{$key}})"
                            @if($selectGroupId == $key)
                                selected
                            @endif
                        >{{$val}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="center">
            <div class="center_1">
                当前应用：
                <select class="input" id= "appId" style="width: auto;" name="appId">
                    <option value="0">选择应用</option>
                    @foreach($appList as $key=>$val)
                        <option value="{{$key}}" onclick="app({{$key}})"
                            @if($selectAppId == $key)
                                selected
                            @endif
                                onclick ="app({{$key}})"
                        >{{$val}}</option>
                    @endforeach
                </select>
                <table>
                   @foreach($moduleList as $key=>$val)
                       <tr>
                           <td>
                               <input type="checkbox" name="groupModuleId[]" value="{{$key}}"
                                    @foreach($groupModuleList as $k=>$v)
                                        @if($key==$k)
                                            checked
                                        @endif
                                    @endforeach
                               > {{$val}}
                           </td>
                       </tr>
                   @endforeach
                </table>
            </div>
        </div>
        <div class="footer">
            <div class="footer_1">
                <input type="button" class="qx" value="全选">
                <input type="button" class="fx" value="反选">
                <input type="button" class="xf" value="全否">
                <button type="submit" class="buttom border-main"><span class="icon-edit"></span>保存</button>
            </div>
        </div>
    </div>
</form>
<div class="success"></div>
</body>
</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        //全选
        $(".qx").click(function(){
            $("input[name='groupModuleId[]']").each(function(){
                if(this.checked){
                    this.checked=true;
                }else{
                    this.checked=true;
                }
            })
        });

        //全否
        $(".xf").click(function(){
            $("input[name='groupModuleId[]']").each(function(){
                if(this.checked){
                    this.checked=false;
                }else{
                    this.checked=false;
                }
            })
        });

        //反选
        $(".fx").click(function(){
            $("input[name='groupModuleId[]']").each(function(){
                if(this.checked){
                    this.checked=false;
                }else{
                    this.checked=true;
                }
            })
        });
    });
</script>