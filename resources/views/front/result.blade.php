<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Neumorphism Profile Card | CodingNepal</title>
    <link rel="stylesheet" href="{{url('front/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="img-area">
            <div class="inner-area">
                <img src="https://thesis.fikom.app/public/master/assets/img/avatar/avatar-1.jpg" alt="">
            </div>
        </div>

        @forelse($result as $data)
        <div class="icon arrow"><i class="fas fa-arrow-left"></i></div>
        <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>
        <div class="name">{{$data->nama}}</div>
        <div class="about">{{$data->tlg_lahir}}</div>
        <div class="about">{{$data->nik}}</div>

        <div class="buttons" style="margin-top: 20px;">
            <button>Message</button>
        </div>
        @empty
        <h5 class="text-center">Data pendaftar tidak ada/tidak di temukan.</h5>
        @endforelse

    </div>

</body>

</html>