@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">creer un Post</h2>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach

        <div class="container">
            <div class="row justify-content-center">
                
                    <div class="card">

                        <form class="form-horizontal" action="{{ route('posts.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-sm-2 py-2" for="Title">Title:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Enter le title"
                                        name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2 py-2" for="content">content:</label>
                                <div class="col-sm-10">
                                    <textarea type="text" cols="20" rows="10" class="form-control" id="content"
                                        placeholder="Enter le contenu" name="content"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2 py-2" for="content">image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" id="content" name="image">
                                </div>
                            </div>


                            <div class="col-lg-6 text-lg-right">
                                <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50"
                                    style="width: 100%;">
                                    <select name="category"
                                        class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50"
                                        data-toggle="select" tabindex="-98">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10 py-3 ">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            
        </div>
    </div>

    </div>
@endsection
