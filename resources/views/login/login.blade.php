<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
    <div class="container">
        <h2 style="text-align: center">Laravel web curd</h2>
        <div class="row">
            <div class="form">
                <form class="form-control" action="{{route('api.login')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <input type="email"     name="email"    style="margin-top: 10px" class="form-control" placeholder="vui lòng nhập email....." >
                    <input type="password" name="password" style="margin-top: 10px" class="form-control" placeholder="vui lòng nhập password....." >
                    <input type="submit" value="đăng nhập" style="margin-top: 10px" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</body>
</html>