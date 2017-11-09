<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>添加商品分类</title>
    <script type="text/javascript" src="http://www.aslegou.com/Admin/js/jquery-3.2.1.js"></script>
    <script type="text/javascript">
    $(function(){
        $('.select').on('click','.option',function(){
            var level = $(this).val();
            if(level == 1){
                $('#select').html("<option value='0'>--请选择--</option>");
                $('#goods_style').show();
            }else {
                $('#goods_style').hide();
            }
            $.ajax({
                url:'cate_data/level/'+level,
                type:'get',
                dataType:'json',
                success:function(data){
                    var html = "<option value='0'>--请选择--</option>";
                    for(var a=0;a<data.length;a++){
                        html +="<option value="+data[a]['id']+">"+data[a]['cate_title']+"</option>";
                    }
                    $('#select').html(html);
                },
                error:function(){
                    alert('error');
                }
            })
        })
    })

</script>
<script>
    $(function(){
        //添加选项框
        $('#a').click(function(){
            $('#div').append('<span>风格选项/序号：<input type="text" placeholder="请输入选项" name="style[]"><input type="text" placeholder="请输入序号" name="sort[]"><span class="span">-</span><br/></span>');
            $('#bu').show().addClass('block');
        });
        //删除选项框
        $('#div').on('click','.span',function(){
            if($('#div').children('span').length == 1){
                alert('亲，请手下留情不能再删了！'); return false;
            }
            $(this).parent().remove();
        });
        //确定选框
        $('#bu').click(function(){
            $('.span').remove();
            $('#bu').hide();
            $('#bu2').show();
        });
    })
</script>
    <style>
        .block{
            display: block;
            border:1px;
        }
    </style>
</head>
<body>
<div>
    <div>
        <strong><span></span> 添加商品分类信息</strong>
        <a style="float: right;font-size: 14px;font-weight: bold;" href="/cate/show/0">返回分类列表</a></div><br/>
    <div style="margin-left: 400px;">
        <form method="post" action="add" >
            <div>
                <div>
                    <label>分类名：</label>
                </div>
                <div>
                    <input type="text" class="input w50" name="cate_name"
                           placeholder="请输入分类名字" required="required"/>
                    <div></div>
                </div>
            </div><br>
            <div>
                <div>
                    <label>分类标题：</label>
                </div>
                <div>
                    <input type="text" class="input w50" name="cate_title"
                           placeholder="请输入分类标题" required="required"/>
                    <div></div>
                </div>
            </div><br>
            <div>
                <div>
                    <label>分类等级：</label>
                </div>
                <div>
                    <select  name="cate_level" class="select" required="required">
                        <option value="0" class="option">请选择</option>
                        <option value="1" class="option">一级</option>
                        <option value="2" class="option">二级</option>
                        <option value="3" class="option">三级</option>
                    </select>
                    <div></div>
                </div>
            </div><br>
            <div id="id">
                <div>
                    <label>父级：</label>
                </div>
                <div>
                    <select  id="select"  name="cate_pid" required="required">
                        <option value="0">--请选择--</option>
                        <foreach name="data" item="v">
                            <option value="{$v.id}">{$v.title}</option>
                        </foreach>
                    </select>
                    <div ></div>
                </div>
            </div><br>
            <div >
                <div >
                    <label>分类状态：</label>
                </div>
                <div >
                    <select name="status"  required="required">
                        <option value="">请选择</option>
                        <option value="3">显示</option>
                        <option value="1">禁用</option>
                    </select>
                    <div ></div>
                </div>
            </div><br>
            <div >
                <div >
                    <label>分类排序：</label>
                </div>
                <div >
                    <input type="text" name="cate_sort">
                    <div ></div>
                </div>
            </div>
            <div ><br>
            <div style="display: none;" id="goods_style">
                <div>
                    <div>
                        <label>分类风格：</label><a id="a" href="#">添加商品style</a>
                    </div>
                </div><br>
                <div id="div">
                </div>
                    <a id="bu" style="display: none;" href="###">保存选框</a><br>
                <div>
            </div>

            </div>
            <div>
                <div>
                    <label>是否添加到推荐位：</label>
                </div>
                <div>
                    是：<input type="radio" name="radio" value="1">
                    否：<input type="radio" name="radio" value="0">
                    <div></div>
                </div><br>
                <div>
                    <label>设置为首页推荐：</label>
                </div>
                <div>
                    精品：<input type="checkbox" name="checkbox[]" value="1">
                    新品：<input type="checkbox" name="checkbox[]" value="2">
                    热销：<input type="checkbox" name="checkbox[]" value="3">
                    特价：<input type="checkbox" name="checkbox[]" value="4">
                    <div></div>
                </div>
            </div><br>
                <div >
                    <label></label>
                </div><br>
                <div >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" value="提交">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>