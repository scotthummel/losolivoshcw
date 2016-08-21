@extends('templates.master')

@section('title', 'Los Olivos Hand Car Wash :: Contact Us :: Phoenix, AZ')

@section('description', 'Contact Los Olivos Hand Car Wash with your questions and comments.')

@section('content')
<div class="row body">
    <div class="col xs-6 hidden-xs col-sm-3 col-md-3">
        <img src="/images/coletta.jpg" class="img-responsive" alt="Coletta" />
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                   Contact Us
                </h1>
            </div>
            <div class="panel-body">
                <div class="row">
                    <form action="/contact" method="POST">

                        {!! csrf_token() !!}

                        <div class="col-md-6 text">
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}" />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Message:</label>
                                <textarea class="form-control" id="comments" rows="7" name="comments">{{ old('comments') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Send Email</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop