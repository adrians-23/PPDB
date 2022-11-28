@extends('template.layoutAuth')

@section('content')
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('authPageTemplate/images/bg_1.jpg') }}');"></div>
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>Masuk ke <strong>PPDB</strong></h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                    <form action="{{ route('login.postlogin') }}" method="post">
                    @csrf
                        <div class="form-group first">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="email">
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                        </div>

                        <button type="submit" name="submit" class="btn btn-block btn-primary">Log In</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection