@extends('admin.main')

@section('head')
<link rel="stylesheet" href="/summernote/summernote.min.css">
@endsection
@section('content')
<form action="" method="post">
    <div class="card-body">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên danh mục">
        </div>

        <div class="form-group">
            <label>Danh mục</label>
            <select name="parent_id" class="form-control">
                <option value="0">Danh Mục Cha</option>
                @foreach($menus as $menu)
                <option value="{{$menu->id}}">{{$menu->name}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Mô tả chi tiết</label>
            <textarea id="editor" name="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Kích hoạt</label>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" value="1" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" value="0" class="custom-control-input" id="no_active" name="active">
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh mục</button>
    </div>
    @csrf 
</form>
@endsection

@section('footer')
<script src="/summernote/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#editor').summernote();
    });
</script>
@endsection