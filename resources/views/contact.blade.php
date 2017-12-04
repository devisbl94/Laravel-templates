@extends('layout')
@section('content')

   <section class="probootstrap-section probootstrap-section-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h1 class="mb0">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row probootstrap-gutter0">
              <div class="col-md-4" id="probootstrap-sidebar">
                <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                  <h3>Pages</h3>
                  <ul class="probootstrap-side-menu">

                    <li>
                      <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                      <a href="{{ route('courses') }}">Courses</a>
                    </li>
                    <li>
                      <a href="{{ route('teachers') }}">Teachers</a>
                    </li>
                    <li>
                      <a href="{{ route('events') }}">Events</a>
                    </li>
                    <li>
                      <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="active">
                      <a>Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                <h2>Get In Touch</h2>

                @if(session('info'))
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <strong>{{ session('info')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif

                <p>Contact us using the form below.</p>
                {!! Form::open(['url' => route('message.store'), 'method' => 'POST', 'class' => 'probootstrap-form']) !!}
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}">
                    {!! $errors->first('name', 
                      '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                        :message
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>'
                    ) !!}
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}">
                    {!! $errors->first('email', 
                      '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                        :message
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>'
                    ) !!}
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject')}}">
                    {!! $errors->first('subject', 
                      '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                        :message
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>'
                    ) !!}
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea cols="30" rows="10" class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                    {!! $errors->first('message', 
                      '<div class="alert alert-warning alert-dismissible fade in" role="alert">
                        :message
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>'
                    ) !!}
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                  </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection