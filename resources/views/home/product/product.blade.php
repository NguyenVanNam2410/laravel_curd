
@extends('../admin')
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="{{asset('javascript/sweetalert2/sweetalert2@11.js')}}" ></script>
    <script src="{{asset('javascript/sweetalert2/deleteAlert.js')}}" ></script>
    {{--  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>  --}}
    {{--  <script type= "text/javascript">
        
        $('#product_list').sortable({
            update: function(enent,ui){
                $(this).children().each(function(id){
                    if($(this).attr('data-order') != (id+1)){
                        $(this).attr('data-order', (id+1)).addClass('updated');
                    }
                });
                saveNewUpdate();
            }
        });
        function saveNewUpdate(){
            var orders = [];
            $('.updated').each(function(){
                orders.push([$(this).attr('data-id'),$(this).attr('data-order')]);
                $(this).removeClass('updated');
            });
            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
            $.ajax({
            
                type: 'POST',
                url: "{{route('order.product')}}",
                data: {
                    id: 1,
                    orders : orders,
                }, 
                dataType: 'text',
                success: function(res){
                    console.log(res);
                }
            })
        }
    </script>  --}}
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
                <li class="breadcrumb-item active">Starter Page</li>
                </ol>
            </div>
            </div>
        </div>
        </div>
        <div class="content">
            <div class="container mt-2">
                @if(session()->exists('message'))
                
                  <div class="alert alert-success" role= "alert">
                    {{session('message')}}
                  </div>
          
                @endif
              </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-12 form-margin" >
                    <form class="form-inline" action="">
                        <div class="form-group btn-margin" style="margin-right: 10px">
                            <input class="form-control" name="key" type="text" placeholder="Search name" value="{{request()->input('key')}}" />
                        </div>
                        <div class="form-group btn-margin" style="margin-right: 10px">
                            <select name="category_id" id="" class="form-control">
                            <option value="">chọn danh mục</option>
                                @foreach ($categoryProducts as $menu)
                                    <option {{request()->input('category_id') == $menu['id'] ? 'selected' : ''}} value="{{$menu['id']}}">{{$menu['name_category']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary "><i class="fas fa-search"></i></button>
                    </form>  
                </div>
                <div class="col-12" style="margin-top:20px">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">image</th>
                            <th scope="col">giá /sale</th>
                            <th scope="col">Danh mục</th>
                            <th scope="col">Trang thái</th>
                            <th scope="col">updated date</th>
                            <th scope="col">action</th>
                        </tr>
                        </thead>
                        <tbody id="product_list">
                        @foreach ($posts as $post)
                            <tr data-id= "{{$post->id}}"  data-order ="{{$post->order}}" >
                            <th scope="row">{{$post->id}}</th>
                            <td class="name">{{$post->name_product}}</td>
                            <td>
                                {{--  <img class="image__path" src="{{asset('/storage/images/product/'.$post->image)}}" alt="" srcset="">  --}}
                            </td>
                            <td>
                                {{$post->price}}/{{$post->sale}}
                            </td>
                            <td>
                                @if ($post->category_id)
                                {{$post->Menu->name_category}}
                                @endif
                            </td>

                            <td class="product_active{{$post->id}}">
                                @if ($post->status == 0)
                                    <a href="" class="btn btn-primary active" data-active={{route('api.active',['id' => $post->id])}}>còn hàng</a>
                                @else
                                    <a href="" class="btn btn-danger active" data-active={{route('api.active',['id' => $post->id])}}>hết hàng</a>
                                @endif
                            </td>
                            <td>
                                @if ($post->updated_at)
                                    {{$post->updated_at->format('m-d-Y')}}
                                @endif
                                </td>
                            <td>
                                <a href="{{route('product.edit',['id' => $post->id])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>
                                <a href="" data-url="{{route('product.delete',['id' => $post->id])}}" class="btn btn-danger action_delete"><i class="far fa-trash-alt"></i></a>
                            </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                {{$posts->appends(request()->all())->links()}}
                </div>
            </div>
            </div>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection