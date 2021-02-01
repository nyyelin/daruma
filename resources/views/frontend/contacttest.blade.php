    @extends('frontend_template')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card">
        <div class="card-header">Contact Us</div>
        <div class="card-body">
          @if(Session::has('message_sent'))
            <div class="alert alert-success" role="alert">
              {{Session::get('message_sent')}}
            </div>
            @endif
            <form action="{{route('contact.send')}}" method="POST"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="from-control" />
              </div>
               <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="from-control" />
              </div>
               <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="from-control" />
              </div>
               <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" class="from-control"></textarea>
              </div>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection