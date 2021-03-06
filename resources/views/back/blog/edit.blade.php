@extends('back.layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(array('route' => 'blog.store','method'=>'POST','files' => true)) !!}
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="content">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#tab_detail" class="nav-link active" data-toggle="tab">
                                    Detail
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#tab_history" class="nav-link" data-toggle="tab">Seo</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="form-group">
                                    <label for="name" class="control-label
                                        required" aria-required="true">
                                        {{ __('messages.Title')}}

                                    </label>
                                    <input class="form-control" placeholder="Name" data-counter="120" name="title"
                                           type="text" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="control-label
                                        required" aria-required="true">
                                        {{__('messages.Image')}}
                                    </label>

                                    <div class="fallback">
                                        <input name="image_url[]" type="file" multiple>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="control-label
                                        required" aria-required="true">
                                        {{__('messages.Content')}}
                                    </label>
                                    <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab_history">
                                <div class="form-group">
                                    <label for="name" class="control-label
                                        required" aria-required="true">
                                        Meta
                                        Title
                                    </label>
                                    <input class="form-control" placeholder="Name" name="meta_title" type="text"
                                           id="meta_title">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="control-label
                                        required" aria-required="true">
                                        Meta
                                        Keyword
                                    </label>
                                    <input class="form-control" placeholder="Name" name="meta_keyword" type="text"
                                           id="meta_keyword">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="control-label
                                        required" aria-required="true">
                                        Meta
                                        Description
                                    </label>
                                    <input class="form-control" placeholder="Name" name="meta_description" type="text"
                                           id="meta_description">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget meta-boxes form-actions
                        form-actions-default action-horizontal">
                        <div class="widget-title">
                            <h4>
                            <span>
                                {{__('messages.Publish')}}
                            </span>
                            </h4>
                        </div>
                        <div class="widget-body">
                            <div class="btn-set">
                                <button type="submit" name="submit" value="save" class="btn btn-info">
                                    <i class="fa fa-save"></i>
                                    {{__('messages.Save')}}
                                </button> &nbsp;
                                <button type="submit" name="submit" value="apply" class="btn btn-success">
                                    <i class="fa fa-check-circle"></i>
                                    {{__('messages. Save &amp; Edit')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
