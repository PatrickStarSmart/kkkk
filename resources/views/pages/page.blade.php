<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div style="display: flex; width: 100%;">
        @foreach ($posts as $post)
            <a href="{{ route('posts.index') }}" style="">
                <div class="container mt-2 mb-2">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card border-0 shadow-sm rounded">
                                <div class="card-body">
                                    <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                                    <hr>
                                    <h4>{{ $post->title }}</h4>
                                    <p class="tmt-3">
                                        {!! $post->content !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
