@extends('back.layouts.master')
@section('content')
   <div class="container">
    <div class="row">
        <form class="form-horizontal" method="POST" action="{{ route(blog.store) }}">
            <div class="col-md-7">a</div>
            <div class="col-md-5">b</div>
        </form>
    </div>
   </div>
@endsection
