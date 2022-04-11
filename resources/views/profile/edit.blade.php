@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 style="text-align: center; padding: 15px">{{ __('Update Profile') }}</h5>
                <div class="card-body row row-cols-10">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div>
                        <form method="POST" action="{{ route('profile.update')}}" class="offset-md-1 col" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-text row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                            <input type="hidden" name="id" class="form-control" value="{{$user->id}}">
                                    </div>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                        <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" autocomplete="name" placeholder="Nama Lengkap">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone}}" autocomplete="phone" autofocus placeholder="Nomor HP">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                        <input id="birth" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ $user->tgl_lahir}}" autocomplete="date" autofocus placeholder="Tanggal Lahir">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password" value="{{$user->password}}">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Konfirmasi Password">
                                    </div>
                                </div> -->

                                <div class="form-text row">
                                    <div class="col-md-10" style="padding-left: 25px">
                                        <input id="Perempuan" type="radio" class="" name="jenis_kelamin" value="Perempuan"> Perempuan
                                        <input id="Laki-Laki" type="radio" class="" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki
                                    </div>
                                </div>

                                <div class="form-text row" style="padding-bottom: 10px">
                                    <div class="col-md-10">
                                    <input type="file" name="photo" class="form-control" placeholder="photo" value="{{ $user->photo}}">
                                        @error('phoyo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row col-md-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- <div class="col" style="border-left: 1px solid black">
                        <p style="text-align: center">Masuk dengan :</p>
                        <div style="border: 1px solid" class="card">
                            <ul class="justify-content-center list-unstyled d-flex bg-white">
                                <li><a class="btn btn-danger" href="#" style="font-size: 10px"><img src="/images/google.svg" alt="Google" width="20">Masuk dengan Google</a></li>
                                <li><a class="btn btn-primary" href="#" style="font-size: 10px"><img src="/images/fb.png" alt="Facebook" width="20">Masuk dengan Facebook</a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
                <div class="container-sm border-top">
                    <p style="text-align: center;">Sudah punya akun? Login <a style="color: blue" href="{{ route('login') }}"><u>{{ __('disini') }}</u></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection