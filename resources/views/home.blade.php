@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('өөрийнхөө талбарт морилна уу') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('амжилттай нэвтэрлээ!') }} --}}
                    {{ Auth::user()->name.' танд энэ өдрйинм мэнд хүргэе!!' }}
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    </head>
                    <title>Document</title>
                    <body>
                        <form>
                            Ханз хайх: <input type="text"> 
                            <input type="submit" value="хайх"></form>
                    </body>
                    </html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
