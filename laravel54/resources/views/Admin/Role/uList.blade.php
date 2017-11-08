<!DOCTYPE html>
<html lang="en">
<div class="title">组用户列表 [ <a href="/role/show">返 回</a> ]</div>
<head>
    <meta charset="UTF-8">
    <title>用户列表</title>
</head>
<style type="text/css">
    .div1{border:solid 1px red;width:250px;height:370px;}
    .div2{border:solid 1px green;width:248px;height:40px;}
    .div3{border:solid 1px blue;width:248px;height:280px;}
    .div4{border:solid 1px black;width:248px;height:45px;}
    .div5{margin:20px 50px 20px 50px ;font-size: 30px}
</style>
<script type="text/javascript">
    function group(id){
        location.href="/role/uList/groupId/"+id;
    }
</script>
<body>
<form method="post" action="/role/setUser">
    {{csrf_field()}}
    <div class="div1">
        <div class="div2">
            当前组：
            <select  id= "groupId" class="input" style="width: auto;" name="groupId" >
                @foreach($groupList  as  $key=>$val)
                    <option value="{{$key}}" onclick="group({{$key}})"
                         @if($selectGroupId == $key)
                             selected
                         @endif
                    >{{$val}}</option>
                @endforeach
            </select>
        </div>
        <div class="div3">
            <table>
                @foreach($userList as $key=>$val)
                    <tr>
                        <td>
                            <input class="input" id="groupUserId[]" name="groupUserId[]" value="{{$key}}"  type="checkbox"
                            @foreach($groupUserList as $k=>$v)
                                @if($key == $k)
                                    checked
                                @endif
                            @endforeach
                            > {{$val}}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="div4">
            <input type="button" class="qx" value="全选">
            <input type="button" class="fx" value="反选">
            <input type="button" class="xf" value="全否">
            <button type="submit" class="buttom border-main"><span class="icon-edit"></span>保存</button>
        </div>
    </div>
</form>
</body>
</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        //全选
        $(".qx").click(function(){
            $("input[name='groupUserId[]']").each(function(){
                if (this.checked) {
                    this.checked = true;
                }else{
                    this.checked = true;
                }
            });
        });

        //全否
        $(".xf").click(function(){
            $("input[name='groupUserId[]']").each(function(){
                if (this.checked) {
                    this.checked = false;
                }else{
                    this.checked = false;
                }
            });
        });

        //反选
        $(".fx").click(function(){
            $("input[name='groupUserId[]']").each(function(){
                if (this.checked) {
                    this.checked = false;
                }else{
                    this.checked = true;
                }
            });
        });

    });


</script>