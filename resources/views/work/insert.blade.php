@extends('work.base')
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="card boder-0 shadow">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control rounded-0 " value="{{ old('title') }}">
                            </div>
                            <div class="mb-3">
                                <label for="">author</label>
                                <input type="text" name="author" class="form-control rounded-0 " value="{{ old('author') }}">
                            </div>
                            <div class="mb-3">
                                <label for="">summary</label>
                                <textarea name="summary" id="" class="form-control rounded-0" cols="30" rows="4">{{ old('body') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="body" id="" class="form-control rounded-0" cols="30" rows="7">{{ old('body') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="">cover</label>
                                <input type="file" name="cover" id="" class="form-control rounded-0 btn btn-light">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="submit" class="btn btn-info float-end">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th colspan="2" class="text-center">Action</th>
                            </tr>
                            @foreach ($news as $n)
                                <tr>
                                    <td>{{ $n->id }}</td>
                                    <td>{{ $n->title }}</td>
                                    <td>{{ $n->author }}</td>
                                    <td>
                                        <form action="{{ route('news.destroy',['news'=>$n->slug]) }}" method="post">
                                            @csrf
                                            @method("delete")
                                            <input type="submit" value="del" class="btn rounded-0 btn-danger">
                                        </form>
                                    </td>
                                    <td><a href="{{ route('news.edit',['news'=>$n->slug]) }}" class="btn btn-info rounded-0 shadow-sm">Edit</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection