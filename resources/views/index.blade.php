@extends('layouts.app')

@section('content')
{{-- <link href="{{ asset('css/main.css') }}" rel="stylesheet"> --}}
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<div class="container">
      
  <div class="row">
    <h2 class="text-center" style="color: black">Post</h2>
  </div>
    <div class="row">
        <!-- Main content -->
        <div class="col-lg-9 mb-3">
         
          <div class="row text-left mb-5">
            <div class="col-lg-6 mb-3 mb-sm-0">
              
              {{-- <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" style="width: 100%;">
              <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50" data-toggle="select" tabindex="-98">
                <option> Categories </option>
                <option> Learn </option>
                <option> Share </option>
                <option> Build </option>
              </select>
              </div> --}}
            </div>
            <div class="col-lg-6 text-lg-right">
              {{-- <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" style="width: 100%;">
                  <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50" data-toggle="select" tabindex="-98">
                    @foreach ($post as $post)
                    <option>{{ $post->category-> }} </option>
                   @endforeach
                  </select>
              </div> --}}
            </div>
          </div>
         
          <!-- End of post 1 -->
          @foreach ($post as $post)
          
              <div class="card row-hover pos-relative py-3 px-3 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0">
            <div class="row align-items-center">
              <div class="col-md-8 mb-3 mb-sm-0">
                <h5>
                  <a href="#" class="text-primary">{{ $post->title}}</a>
                </h5>
                <p class="text-sm"><span class="op-6">{{ $post->content}}</span> <a class="text-black" href="#">20 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">KenyeW</a></p>
                <div class="text-sm op-5">  <a class="text-black mr-2" href="#"><button type="button" class="btn btn-dark">{{ $post->category->name }}</button></a> <a class="text-black mr-2" href="{{ route('posts.show',$post->id) }}"><button type="button" class="btn btn-danger">voir plus</button></a></div>
                
              </div>
              <div class="col-md-4 op-7">
                <div class="row text-center op-7">
                  <div class="col px-1"> <i class="ion-connection-bars icon-1x"></i> <span class="d-block text-sm">{{ $post->created_at->format(' d M Y ')}}</span> </div>
                  <div class="col px-1"> <i class="ion-ios-chatboxes-outline icon-1x"></i> <span class="d-block text-sm">{{ $post->id}}</span> </div>
                  <div class="col px-1"> <i class="bi bi-app"></i> <span class="d-block text-sm"> {{ $post->user->name }}</span> </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          

         
        </div>
        <!-- Sidebar content -->
        <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
          <div style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div><div data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}" data-toggle="sticky" class="sticky" style="top: 85px;"><div class="sticky-inner">
            <a class="col-12 btn btn-dark py-4 mt-5  " href="#">Ask Question</a>
            <div class="bg-white mb-3">
              <h4 class="px-3 py-4 op-5 m-0">
                Active Topics
              </h4>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">Why Bootstrap 4 is so awesome? </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">39 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">AppStrapMaster</a></p>
              </div>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">Custom shortcut or command to launch command in terminal? </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">58 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
              </div>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">48 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
              </div>
              <hr class="m-0">
              <div class="pos-relative px-3 py-3">
                <h6 class="text-primary text-sm">
                  <a href="#" class="text-primary">HELP! My Windows XP machine is down </a>
                </h6>
                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black" href="#">38 minutes</a> <span class="op-6">ago by</span> <a class="text-black" href="#">DanielD</a></p>
              </div>
              <hr class="m-0">
            </div>
            <div class="bg-white text-sm">
              <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                Stats
              </h4>
              <hr class="my-0">
              <div class="row text-center d-flex flex-row op-7 mx-0">
                <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"> <a class="d-block lead font-weight-bold" href="#">58</a> Topics </div>
                <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"> <a class="d-block lead font-weight-bold" href="#">1.856</a> Posts </div>
              </div>
              <div class="row d-flex flex-row op-7">
                <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"> <a class="d-block lead font-weight-bold" href="#">300</a> Members </div>
                <div class="col-sm-6 flex-ew text-center py-3 mx-0"> <a class="d-block lead font-weight-bold" href="#">DanielD</a> Newest Member </div>
              </div>
            </div>
          </div></div>
        </div>
      </div>
    </div>

@endsection


