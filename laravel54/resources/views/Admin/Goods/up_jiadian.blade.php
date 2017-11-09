<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>添加商品属性</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <link rel="stylesheet" href="/Admin/js/umeditor/themes/default/css/umeditor.css">
    <link rel="stylesheet" href="/Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script type="text/javascript" src="/Admin/jeDate/jedate.js"></script>
    <script language="javascript" type="text/javascript" src="/time/WdatePicker.js"></script>
</head>
<style type="text/css">
    .div_li{border: grey solid 1px;width: 200px;height: 40px;float: left;text-align: center;line-height: 40px;}
    .ul{border: lightcyan solid 1px;width: 1120px;height: 40px;background-color: lightcyan;}
</style>
<body>
<div class="panel admin-panel">
    <ul class="ul">
        <li><div class="div_li"><a href="/goods/update/{{$goodsInfo->id}}" class="icon-reorder">修改商品通用信息</a></div></li>
        <li><div class="div_li"><a href="" class="icon-reorder">修改商品属性信息</a></div></li>
    </ul>
    <div class="tab-box">
        <div class="tab">
            <div class="tab-panel" id="tab-b">
                <div class="common-info">
                    <form class="form-x" action="update" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div id="bel">
                            <label style="margin-left: 70px;">电器尺寸：</label>
                            <input type="text"  name="size[]" />
                            <input type="button" value="+ 添加" id="btn2" size="sizeInfo"><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
                                <label>电器重量：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="weight" />
                            </div>
                        </div>
                        <div id="label">
                            <label style="margin-left: 70px;">商品颜色：</label>
                            <input type="text" name="color[]" />
                            <input type="button" value="+ 添加" id="yanse" ><br />
                        </div><br />
                        <div class="form-group">
                            <div class="label">
                                <label>容量：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="volume" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="10kg及以上">10kg及以上</option>
                                    <option value="9-9.9kg">9-9.9kg</option>
                                    <option value="8-8.9kg">8-8.9kg</option>
                                    <option value="7-7.9kg">7-7.9kg</option>
                                    <option value="6-6.9kg">6-6.9kg</option>
                                    <option value="4-5.9kg">4-5.9kg</option>
                                    <option value="4kg及以下">4kg及以下</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>电器风格：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="style" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>电器材质：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="material" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>电器型号：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="model" />
                            </div>
                        </div>

                        <div id="chi">
                            <label style="margin-left: 70px;">屏幕尺寸：</label>
                            <input type="text" name="screen_size[]" />
                            <input type="button" value="+ 添加" id="pingmu" ><br />
                        </div><br />

                        <div class="form-group">
                            <div class="label">
                                <label>系列：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="series" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>直径：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="diameter" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>显示屏：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="display" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>屏幕比例：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="screen_scale" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>电视类型：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="tv_type" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="曲面电视">曲面电视</option>
                                    <option value="平板电视">平板电视</option>
                                    <option value="超薄电视">超薄电视</option>
                                    <option value="OLED电视">OLED电视</option>
                                    <option value="4K超高清电视">4K超高清电视</option>
                                    <option value="智能电视">智能电视</option>
                                    <option value="普通电视">普通电视</option>
                                    <option value="量子点电视">量子点电视</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>分辨率：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="resolution" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="超高清">超高清</option>
                                    <option value="全高清">全高清</option>
                                    <option value="高清">高清</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>电压/频率：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="Voltage" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>国家能效等级：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="cpc" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="一级能效">一级能效</option>
                                    <option value="二级能效">二级能效</option>
                                    <option value="三级能效">三级能效</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>面板类型：</label>
                            </div>
                            <div class="field field-tsa">
                                <input type="text" class="input" name="panel_type" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>箱门结构：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="Bd_structure" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="多门">多门</option>
                                    <option value="对开门">对开门</option>
                                    <option value="三门">三门</option>
                                    <option value="双门">双门</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="label">
                                <label>制冷方式：</label>
                            </div>
                            <div class="field field-tsa">
                                <select name="refrigeration_mode" class="input" style="width:100px; line-height:17px;">
                                    <option value="">--请选择--</option>
                                    <option value="风冷（无霜）">风冷（无霜）</option>
                                    <option value="风直冷（混冷）">风直冷（混冷）</option>
                                    <option value="直冷">直冷</option>
                                </select>
                            </div>
                        </div>



                        <div class="text-center">
                            <div class="field">
                                <input class="button bg-green" type="submit" name="one" value="提交" >
                                <a class="button bg-red">重置</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("#btn2").click(function(){
//            var sizeInfo = $('#btn2').attr('sizeInfo');
            $("#bel").append(" <span><input type='text' name='size[]' style='margin-left:138px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("#yanse").click(function(){
            $("#label").append(" <span><input type='text' name='color[]' style='margin-left:138px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("#pingmu").click(function(){
            $("#chi").append(" <span><input type='text' name='screen_size[]' style='margin-left:138px;margin-top: 10px; '><input type='button' value='-' id='del'><br /></span>");
        });
        $("div").on("click","#del",function () {
            $(this).parent().remove();
        });
    });
</script>




