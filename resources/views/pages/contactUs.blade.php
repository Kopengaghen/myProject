@extends('layout')


@section('pageTitle')
    Contact Us
@endsection


@section('content')

    <main>
        <div id="setupamiting">
            <p>Set Up A Meeting</p>
        </div>

        <div class="contactus_img">
            <img src="/images/contactus_img.jpg" id="contactus_img" alt="contactus_img">
        </div>

        <div id="test"></div>

        <div id="contactus_text_address"> <br>
            <p id="emma_paragraph"> <strong> EMMA EVENT MANAGEMENT </strong> <br>
                OFFICE: 17,Ion Nistor str, Chisinau, MD-2009 <br>
                GSM: +373 78032889
            </p> <br>
        </div>


        {{-- Google MAP --}}
        <div id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1360.3120548488566!2d28.832861058161587!3d47.008353194787375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c27599076d5%3A0xd05e9e1003ec974a!2sDevelopmentAid%20Head%20Office!5e0!3m2!1sfr!2s!4v1628859132791!5m2!1sfr!2s"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
        {{-- Google MAP --}}



            <div class="container">
                <div class="row">
                    {{-- <div class="col-md-4"> </div> --}}
                    <div class="col-md-4">
                        <h4>Set Up a Meeting</h4>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        <form action="{{route('contactUs.store')}}" method="post" name="contact-form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" value="{{ old('name') }}" required="required" name="name" class="form-control" id="name" placeholder="Name"> <br>
                                
                                @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" value="{{ old('email') }}" required="required" name="email" class="form-control" id="email1" placeholder="Email"> <br>
                            </div>
                            <div class="form-group">
                                <label for="inputState">Department</label>
                                <select id="department" class="form-control" name="department">
                                    <option value="">Select a department</option>
                                    <option @if (old('department') === 'administration') selected @endif value="administration">Administration</option>
                                    <option @if (old('department') === 'accounting') selected @endif value="accounting">Accounting</option>
                                    <option @if (old('department') === 'technicalDepartment') selected @endif value="technicalDepartment">Tehnical Department</option>
                                    <option @if (old('department') === 'logistic') selected @endif value="logistic">Logistic</option>
                                </select> <br>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" required="required" name="message" rows="3" placeholder="Enter min 20 characters">{{ old('message') }}</textarea> <br>
                            </div>
                            <p id="fields_required">* All fields are required</p>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" @if (old ('readTerms')) checked @endif type="checkbox" required="required" name="readTerms" id="gridCheck" value="1">
                                    <label for="gridCheck" class="form-check-label">I Agree</label>
                                </div>
                            </div>
                            @csrf
                            <button type="submit" class="btn btn-info">Say Hi!</button>
                        </form>
                    </div>
                    <div class="col-md-4"> </div>
                </div>
            </div>
    </main>

@endsection













{{-- <form action="/contact-us" method="POST" name="contact-form">
    <div class="row">
      <div class="col">
        <label>Name *</label>
        <input type="text" class="form-control" placeholder="First name">
      </div>
      <div class="col"><br>
        <input type="text" class="form-control" placeholder="Last name">
      </div>
    </div>
    <div class="row">
        <div class="col">
          <label>Email Address *</label>
          <input type="email" class="form-control" placeholder="First name">
        </div>    
        <div class="row">
            <div class="col">
              <label>Subject</label>
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="row">
                <div class="col">
                  <label>Message *</label><br>
                  <textarea name="message" id="" cols="30" rows="10"></textarea>                <br>
                </div>
                @csrf
                <input type="submit">
</form> --}}
