@include('header')
<div class="container mt-4">
  

@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
 @endif

 @if ($errors->any())
 <div class="alert alert-danger">
     <ul>
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>
 </div>
@endif 
              <form action="{{route('contactcon')}}" method="post" class="signin-form">
                @csrf 
               
                <div class="form-input">
                  <input type="text" name="name" id="w3lName" class="form-control" placeholder="Name" /> <br>
                </div>
                <div class="form-input">
                  <input type="text" name="subject" id="w3lName" class="form-control" placeholder="Subject" /> <br>
                </div> 

                <div class="row con-two">
                <div class="col-lg-6 form-input">
                  <input type="email" name="email" id="w3lSender"class="form-control" placeholder="Email"> <br>
                </div>
                <div class="col-lg-6 form-input">
                    <input type="text" name="mobile" placeholder="Mobile Number" class="form-control" class="contact-input" /> <br>
                </div>
                </div>
                <div class="form-input">
                  <textarea placeholder="Message" name="message" class="form-control" id="w3lMessage" ></textarea> <br>
                </div>
                <div class="submit-button text-lg-right">
                   <button type="submit" class="btn btn-style">Submit</button>
                </div>
              </form>
            </div>
      
    
@include('footer')