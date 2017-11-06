<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>修改轮播图</title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <link rel="stylesheet" href="/Admin/css/style.css">
    <!--<link rel="stylesheet" href="css/ace.min.css">-->
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 修改轮播图</strong></div>
    <div class="tab-box">
        <div class="tab">
            <div class="tab-body">
                <div class="tab-panel active" id="tab-b">
                    <div class="common-info">
                        <form class="form-x" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="label">
                                    <label>轮播图名称：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" name="img_name" value="{{$row->img_name}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>轮播图排序：</label>
                                </div>
                                <div class="field field-tsa">
                                    <input type="text" class="input" name="img_sort" value="{{$row->img_sort}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>轮播图状态：</label>
                                </div>
                                <div class="field">
                                    <select name="img_status">
                                        <option value="-1">请选择</option>
                                        <option value="0">删除</option>
                                        <option value="1">禁用</option>
                                        <option value="2">恢复</option>
                                        <option value="3">正常</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>轮播图URL：</label>
                                </div>
                                <div class="field">
                                    <input type="text" class="input" name="img_url" value="{{$row->img_url}}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>轮播图描述：</label>
                                </div>
                                <div class="field">
                                    <div class="field">
                                        <textarea  class="input" name="img_text" rows="4" cols="20">{{$row->img_text}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="label">
                                    <label>轮播图：</label>
                                </div>
                                <div class="field">
                                    <div class="field">
                                        <img src="{{'/'.$row->img}}" width="100">
                                        <input type="file" name="img" id="img_g" onchange="up_img()">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field margin-large-top text-center">
                                    <input type="hidden" name="yuan_img" value="{{$row->img}}}">
                                    <input type="submit" value="修改" />
                                    <input type="reset" value="重置" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



