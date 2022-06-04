@extends('front.app')

@section('content')

<!-- Masthead-->
<header class="masthead" style="margin-top: 65px;">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <!-- <h1 class="mb-5">Generate more leads with a professional landing page!</h1> -->
                    <form class="form-subscribe" method="GET" action="{{route('cariNik')}}">
                        <!-- Email address input-->
                        <div class="row">
                            <div class="col">
                                <input class="form-control form-control-lg" value="{{old('nik')}}" id="emailAddress" name="nik" type="text" placeholder="Search NIK" />
                                <div id="nik" class="form-text" style="color: red; font-weight:bold;">{{ $errors->first('nik') }}</div>
                            </div>
                            <div class="col-auto"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Search</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>

@endsection