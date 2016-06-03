@extends('layouts.common')
@section('content')
        <!-- content start -->
<div class="admin-content">

    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">新增品牌</strong> /
            <small>Create A New Brand</small>
        </div>
    </div>


    <form class="am-form" action="{{route('admin.Shop.brand.update',$brand->id)}}" method="post">

        {!! csrf_field() !!}
        {!! method_field('put') !!}

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                商品品牌
            </div>
            <div class="am-u-sm-8 am-u-md-4">
                <input type="text" class="am-input-sm" name="name" value="{{$brand->name}}">
            </div>
            <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                品牌网址
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" class="am-input-sm" name="url" value="{{$brand->url}}">
            </div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                品牌描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <textarea rows="4" name="describe">{{$brand->describe}}</textarea>
            </div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                是否显示
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <label class="am-radio-inline">
                    <input type="radio" value="1" name="is_show" checked> 是
                </label>
                <label class="am-radio-inline">
                    <input type="radio" value="0" name="is_show"> 否
                </label>
            </div>
        </div>

        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                排序
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                <input type="text" name="sort_order" class="am-input-sm" value="{{$brand->sort_order}}">
            </div>
        </div>
        <div class="am-margin">
            <button type="submit" class="am-btn am-btn-primary am-radius">提交保存</button>
        </div>
    </form>


</div>
<!-- content end -->
@endsection