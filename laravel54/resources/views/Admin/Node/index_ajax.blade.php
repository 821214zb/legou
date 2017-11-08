<table class="table table-hover text-center" id="k">
    <tr>
        <th width="100" style="text-align:left; padding-left:20px;">编号</th>
        <th width="10%">组名</th>
        <th width="10%">显示名</th>
        <th width="10%">序号</th>
        <th width="10%">状态</th>
        <th width="310">操作</th>
    </tr>
    @foreach ($data as $v)
        <tr>
            <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="sel"  id="sel{$v.id}" value="{$v.id}"/>{{$v->id}}</td>
            <td><a href="index.php?s=Home/Node/index/id/{$v.id}">{{ $v->name }}</a></td>
            <td>{{ $v->title }}</td>
            <td>{{$v->sort}}</td>
            <td>
                @if ($v->status=1)
                    <image src="/images/ok.gif"/>
                @elseif($v->status=2)
                    <image src="/images/del.gif"/>
                @else
                    <image src="/images/locked.gif"/>
                @endif
            </td>
            <td>
                @if ($v->status=1)
                    <label class="a"><a class="button border-red" id="{{$v->id}}" status="{{$v->status}}"><span class="icon-trash-o"></span>禁用</a></label>
                @elseif($v->status=2)
                    <label class="a"><a class="button border-gray" id="{{$v->id}}" status="{{$v->status}}"><span class="icon-mail-forward"></span>还原</a></label>
                @else
                    <label class="a"><a class="button border-green" id="{{$v->id}}" status="{{$v->status}}"><span class="icon-check"></span> 恢复</a></label>
                @endif
            </td>
        </tr>
    @endforeach
    <tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
            全选 </td>
        <td colspan="8" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="delall()"> 批量删除</a> <a href="javascript:void(0)" class="button border-green icon-check" style="padding:5px 15px;" onclick="huifu()"> 批量恢复</a>  <if condition="$asc eq '' ">
                <a href="index.php?s=/Home/Node/index/asc/asc" style="padding:5px 15px; margin:0 10px;" class="button border-blue icon-edit" name="asc">降序</a>
                <else/>
                <a href="index.php?s=/Home/Node/index/" style="padding:5px 15px; margin:0 10px;" class="button border-blue icon-edit" name="asc">升序</a>
            </if></td>
    </tr>
    <tr>
        <td colspan="8"><div class="pagelist">{!! $data->appends(['keywords'=>$keywords])->render() !!}</div></td>
    </tr>
</table>