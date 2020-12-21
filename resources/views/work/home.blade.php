@extends('work.base')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                @foreach ($news as $n)
                <div class="card border-0 mb-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <img src="
                                @if(empty($n->cover))
                                {{ asset('no-photo.png') }}
                                @else
                                {{ asset('cover/'.$n->cover) }}
                                @endif
                                " alt="" class="img-fluid border h-100 w-100">
                            </div>
                            <div class="col-lg-8">
                                <h4 class="h5">{{ $n->title }}</h4>
                                <p class="small text-muted text-capitalize">{{ $n->users->name }} |
                                    @php
                                        $time = strtotime($n->created_at);
                                        $date = date('d-M-Y',$time);
                                        echo $date;
                                    @endphp
                                    </p>
                                <p class="lead">{{ $n->body }}</p>
                                <a href="{{ route('news.show',['news'=>$n->slug,'news_id'=>sha1($n->id)]) }}" class="btn btn-success float-end bg-gradient">Read more</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4">
                <div class="card border-light shadow">
                    <div class="card-header">
                        Advertisement
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


