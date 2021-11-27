@extends('layout.admin')
@section('title', 'Bài Viết')
@section('main')

<div class="search mb-2">
    <form action="" class="form-inline">
        <div class="form-group">
            <input type="text" name="keyword" id="" class="form-control" placeholder="Search Category...">
        </div>
        <button type="submit" class="btn btn-primary mr-2">
            <i class="fas fa-search"></i>
        </button>
        <a href="{{route('post.create')}}" class="btn btn-success">Add New</a>
    </form>
</div>
<div class="card">
    <div class="card-title">TỔNG HỢP CÁC BÀI VIẾT</div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Hình Ảnh</th>
                <th>Tiêu Đề</th>
                <th>Thể loại</th>
                <th>Views</th>
                <th>Ngày Đăng</th>
                <th>Trạng Thái</th>
                <th class="text-center">Tác vụ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center"></td>
            </tr>
        </tbody>
    </table>
    <div class="paginition">
        <!-- SỬ DỤNG HÀM APPENDS(REQUEST()->ALL) : ĐỂ LƯU TÊN CỦA KEYWORD TRÊN ĐƯỜNG LINKS  -->
    </div>
</div>

@stop()