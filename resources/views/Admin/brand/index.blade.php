@extends('layouts.common')
@section('content')
        <!-- content start -->
<div class="admin-content">
    <div class="am-cf am-padding">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">商品品牌</strong> /
            <small>Good Brands</small>
        </div>
    </div>


    <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
            <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                    <a class="am-btn am-btn-default" href="{{route('admin.Shop.brand.create')}}">
                        <span class="am-icon-plus"></span> 新增
                    </a>

                </div>
            </div>
        </div>

        <div class="am-u-sm-12 am-u-md-3">
            <form method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" class="am-form-field" name="keyword" value="">
                        <span class="am-input-group-btn">
                            <button class="am-btn am-btn-default" type="submit">搜索</button>
                        </span>
                </div>
            </form>
        </div>
    </div>

    <div class="am-g">
        <div class="am-u-sm-12">
            <form class="am-form">
                <table class="am-table am-table-striped am-table-hover table-main">
                    <thead>
                    <tr>
                        <th class="table-id">id</th>
                        <th class="table-thumb">缩略图</th>
                        <th class="table-name">品牌名称</th>
                        <th>品牌商品</th>
                        <th class="table-desc">品牌描述</th>
                        <th class="table-is-show am-hide-sm-only">是否显示</th>
                        <th class="table-sort-order am-hide-sm-only" style="width:10%">排序</th>
                        <th class="table-set">操作</th>
                    </tr>
                    </thead>
                    <tbody>

                  @foreach($brands as $brand)
                    <tr data-id="{{$brand->id}}">
                        <td>{{$brand->id}}</td>
                        <td>
                            <img src="{{$brand->thumb}}" alt="" class="thumb">
                        </td>
                        <td><a href="{{$brand->url}}" target="_blank">{{$brand->name}}</a></td>

                        <td>
                            <a class="am-badge am-badge-secondary" href="#">查看商品</a>
                        </td>
                        <td>{{$brand->describe}}</td>

                        <td class="am-hide-sm-only">
                            <span name="is_show" value="2" data-attr="is_show">{{$brand->is_show}}</span>
                        </td>

                        <td class="am-hide-sm-only">
                            <input type="text" name="sort_order" class="am-input-sm"
                                   value="{{$brand->sort_order}}">
                        </td>

                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a class="am-btn am-btn-default am-btn-xs am-text-secondary"
                                       href="{{route('admin.Shop.brand.edit',$brand->id)}}">
                                        <span class="am-icon-pencil-square-o"></span> 编辑
                                    </a>

                                    <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"
                                       href="{{route('admin.Shop.brand.destroy',$brand->id)}}" data-method="delete"
                                       data-token="{{csrf_token()}}" data-confirm="确认删除吗?">
                                        <span class="am-icon-trash-o"></span> 删除
                                    </a>

                                </div>
                            </div>
                        </td>
                    </tr>
                  @endforeach
                    </tbody>
                </table>
                共 21 条记录
                <div class="am-cf">
                    <div class="am-fr">
                        <ul class="pagination"><li class="disabled"><span>&laquo;</span></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="http://xsystem.phpwh.com/xShop/product?page=2">2</a></li>
                            <li><a href="http://xsystem.phpwh.com/xShop/product?page=2" rel="next">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
                <hr/>

            </form>
        </div>
    </div>

</div>
<!-- content end -->

@endsection