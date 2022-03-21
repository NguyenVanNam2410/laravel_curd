
@extends('../admin')
@section('js')
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Starter Page</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">edit product</li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <form action="{{route('product.update')}}" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        @csrf
                     
                        <div class="col-md-12 col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$product->name_product}}" name="name" placeholder="Nhập tên sản phẩm....">
                                 @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}"  name="price" placeholder="Nhập giá sản phẩm....">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sale</label>
                                <input type="number" class="form-control @error('sale') is-invalid @enderror" value="{{$product->sale}}" name="sale" placeholder="nhập mức sale...">
                                 @error('sale')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                            </div>
                            <div class="mb-3">
                                <select name="category_id" class="form-control form-control @error('category_id') is-invalid @enderror" id="">
                                    <option value="">--chọn danh mục sản phẩm--</option>
                                    @foreach ($category as $item )
                                        <option value="{{$item['id']}}" {{($product->category_id == $item['id'] ? 'selected' : '' )}}> {{$item['name_category']}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">active</label>
                                <div class="radio">
                                    @if($product->status == 0)
                                        <label>
                                            <input type="radio" name="status" value="0" checked>
                                            còn hàng
                                        </label>
                                        <label>
                                            <input type="radio" name="status" value="1">
                                            hết hàng
                                        </label>
                                    @else
                                        <label>
                                            <input type="radio" name="status" value="1" checked>
                                            hết hàng
                                        </label>
                                        <label>
                                            <input type="radio" name="status" value="0" >
                                            còn hàng
                                        </label>
                                    @endif
                                </div>
                            </div>
                         
                            
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 15px; margin-bottom:10px ">Submit</button>
                    </div>
                </form>
        
            </div>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection