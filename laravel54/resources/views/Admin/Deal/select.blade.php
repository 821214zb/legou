<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="/Admin/css/pintuer.css">
    <link rel="stylesheet" href="/Admin/css/admin.css">
    <script src="/Admin/js/jquery.js"></script>
    <script src="/Admin/js/pintuer.js"></script>
    <script type="text/javascript" src="/Admin/jeDate/jedate.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span> 订单查询</strong></div>
    <div class="body-content">
        <form class="form-x">
            <div class="form-group">
                <div class="label">
                    <label>店铺名称：</label>
                </div>
                <div class="field">
                    <select class="input float-left margin-right" style="width: auto;">
                        <option>按店铺名称</option>
                    </select>
                    <select class="input float-left" style="width: auto;">
                        <option>旗舰店</option>
                    </select>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>订单号：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>电子邮件：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>购货人：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>收货人：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>地址：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>邮编：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>电话：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>手机：</label>
                </div>
                <div class="field">
                    <input type="text" class="input" />
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>所在地区：</label>
                </div>
                <div class="field">
                    <select class="input float-left margin-right" style="width: auto;">
                        <option>请选择</option>
                    </select>
                    <select class="input float-left margin-right" style="width: auto;">
                        <option>请选择</option>
                    </select>
                    <select class="input float-left" style="width: auto;">
                        <option>请选择</option>
                    </select>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>配送方式：</label>
                </div>
                <div class="field">
                    <select class="input float-left" style="width: auto;">
                        <option>请选择</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>支付方式：</label>
                </div>
                <div class="field">
                    <select class="input float-left" style="width: auto;">
                        <option>请选择</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>下单时间：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50 float-left margin-right" id="dateinfo" />
                    <input class="input w50 float-left" id="dateinfoa" type="text">
                    <div class="clear"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>订单状态：</label>
                </div>
                <div class="field">
                    <select class="input" style="width: auto;">
                        <option>请选择...</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="field margin-large-top text-center">
                    <a class="button bg-green" href="ddgl-list-33.html">搜索</a>
                    <a class="button bg-red">重置</a>
                </div>
            </div>

        </form>
    </div>
</div>
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
</script>
</body></html>