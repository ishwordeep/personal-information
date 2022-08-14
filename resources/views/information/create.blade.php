@extends('layout.layout')

@section('title', 'PersonalInfo')
<style>
    .custom-label {
        display: flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
    }

</style>

@section('content')
<div class="card main-container mt-3 mb-2">
    <form action="{{route('store.information')}}" method="post">
        @csrf
        <div class="row m-3">
            {{-- Name --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="" style="min-width: 100px;">Name</label>
                    <input type="text" id="name" name="name" value="" class="form-control" style="min-width: 100px;">
                </div>
                @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Gender --}}
            <div class="col-sm-6">
                <div class="input-group mb-3">
                    <label class="custom-label" for="" style="min-width: 100px;">Gender</label>
                    <div class="custom-control custom-radio custom-control-inline mt-2 mx-2">
                        <input type="radio" id="gender1" name="gender" class="custom-control-input gender" value="Male">
                        <label class="custom-control-label" for="gender1">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2 mx-2">
                        <input type="radio" id="gender2" name="gender" class="custom-control-input gender" value="Female">
                        <label class="custom-control-label" for="gender2">Female</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2 mx-2">
                        <input type="radio" id="gender3" name="gender" class="custom-control-input gender" value="Other">
                        <label class="custom-control-label" for="gender3">Other</label>
                    </div>
                </div>
                @error('gender')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>
            {{-- Phone --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="" style="min-width: 100px;">Phone</label>
                    <input type="text" id="phone" name="phone"  class="form-control" style="min-width: 100px;">
                </div>
                @error('phone')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Email --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="" style="min-width: 100px;">Email</label>
                    <input type="email" id="email" name="email" class="form-control" style="min-width: 100px;">
                </div>
                @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Address --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="" style="min-width: 100px;">Address</label>
                    <input type="text" id="address" name="address" class="form-control" style="min-width: 100px;">
                </div>
                @error('address')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Address --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="" style="min-width: 100px;">Nationality</label>
                    <input type="text" id="nationality" name="nationality" class="form-control" style="min-width: 100px;">
                </div>
                @error('nationality')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            {{-- Date of Birth --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="input-group-text" for="" style="min-width: 100px;">Date Of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control" style="min-width: 100px;">
                </div>
                @error('dob')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
                
            </div>
              {{-- Mode of contact --}}
            <div class="col-sm-6 ">
                <div class="input-group mb-3">
                    <label class="custom-label" for="" style="min-width: 100px;">Preferred Mode of contact</label>
                    <div class="custom-control custom-radio custom-control-inline mt-2 mx-2">
                        <input type="radio" id="mode-of-contact-1" name="modeofcontact" class="custom-control-input" value="Mail">
                        <label class="custom-control-label" for="mode-of-contact-1">Mail</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2 mx-2">
                        <input type="radio" id="mode-of-contact-2" name="modeofcontact" class="custom-control-input" value="Phone">
                        <label class="custom-control-label" for="mode-of-contact-2">Phone</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline mt-2 mx-2">
                        <input type="radio" id="mode-of-contact-3" name="modeofcontact" class="custom-control-input" value="None">
                        <label class="custom-control-label" for="mode-of-contact-3">None</label>
                    </div>
                    @error('modeofcontact')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            {{-- Education Background --}}
            <div class="col-sm-12 ">
                <div class=" mb-3">
                    <p class="" for="" style="min-width: 100px;">Education Background</p>
                    <textarea rows="6" cols="100" id="education" name="education" class="p-2"></textarea>
                </div>
                @error('education')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

          


            <div class="col-sm-6 ">
                <button type="submit" class="btn btn-primary btn-sm px-5">Submit</button>
            </div>

        </div>



    </form>
</div>
@endsection