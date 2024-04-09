<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  @yield('title')
  <!-- Bootstrap css 4 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/css/admin.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="" style="background-image: url('{{ asset('admin/img/bg.png') }}'); background-size: 38cm 16.18cm;">
    <div class="d-flex justify-content-center text-info" style="padding-top:8rem">
        <div class="card bg-light mb-3" style="width: 40%;">
            <div class="card-header">NHÀ THUỐC PARACLITO</div>
            <div class="card-body">
                <h5 class="text-center"><b class="card-title">ĐĂNG KÝ</b></h5>
                <form method="POST" action="{{ route('/register') }}">
                    @csrf
                    <div class="">
                        <div class="input-group d-flex pb-2">
                            <label for="exampleInput2" class="pr-2">NAME</label>
                            <input type="text" class="input-form pl-2" name="name" id="exampleInput2"
                                value="{{ $user->name }}" placeholder="tên của bạn">
                        </div>
                        <div class="input-group d-flex pb-2">
                            <label for="exampleInput2" class="pr-2">Email Address</label>
                            <input type="text" class="input-form pl-2" name="name" id="exampleInput2"
                                value="{{ $user->email }}" placeholder="địa chỉ gmail">
                        </div>
                        <div class="input-group d-flex pb-2">
                            <label for="exampleInput2" class="pr-2">password</label>
                            <input type="text" class="input-form pl-2" name="name" id="exampleInput2"
                                value="{{ $user->password }}" placeholder="mật khẩu">
                        </div>
                    </div>
                    <div class="float-right pr-1 pt-2">

                        <button type="submit" class="btn btn-primary">sign up</button>
                    </div>
                  </form>
            </div>
          </div>
    </div>

<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
