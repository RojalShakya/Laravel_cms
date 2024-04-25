<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{$errors}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{route('backend.aboutupdate')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name"  placeholder="Enter Name" value="{{old('email')??$about->name}}">
                          @error('name')

                          <small  class="form-text text-danger">{{$message}} </small>

                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="logo">Logo</label>
                          <input type="file" class="form-control" name="logo_file">

                        </div>
                        <div class="form-group">
                          <label for="image">Profile Image</label>
                          <input type="file" class="form-control" name="image" >
                          <small  class="form-text text-danger">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="short_description">Short Description</label>
                          <input type="text" class="form-control" name="short_description" value="{{old('short_description')??$about->short_description}}">
                          <small  class="form-text text-danger">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="long_description">Detail Description</label>
                          <textarea  class="form-control" name="long_description" value="{{old('long_description')??$about->long_description}}">
                          </textarea>

                        </div>
                        <div class="form-group">
                          <label for="phone_number">Phone Number</label>
                          <input type="string" class="form-control" name="phone_number" value="{{old('phone_number')??$about->phone_number}}">
                          @error('phone_number')
                          <span  class="form-text text-danger">{{$message}}</span>

                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" class="form-control" name="address" value="{{old('address')??$about->address}}">

                          {{-- <small  class="form-text text-danger">{{$message}}</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="fb_link">Links : Facebook</label>
                          <input type="url" class="form-control" name="fb_link" value="{{old('fb_link')??$about->fb_link}}">
                          {{-- <small  class="form-text text-danger">{{$message}}</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="ig_link">Link : Instagram</label>
                          <input type="url" class="form-control" name="ig_link" value="{{old('ig_link')??$about->ig_link}}">
                          {{-- <small  class="form-text text-danger">{{$message}}</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="x_link">Link : Twiter</label>
                          <input type="url" class="form-control" name="x_link" value="{{old('x_link')??$about->x_link}}">
                          {{-- <small  class="form-text text-danger">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="linkedin_link">Link : LinkedIN</label>
                          <input type="url" class="form-control" name="linkedin_link" value="{{old('linkedin_link')??$about->linkedin_link}}">

                        </div>
                        <div class="form-group">
                          <label for="git_link">Link : Git</label>
                          <input type="url" class="form-control" name="git_link" value="{{old('git_link')??$about->git_link}}">

                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{old('email')??$about->email}}">
                        @error('email')

                        <small  class="form-text text-danger">{{$message}}</small>
                        @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
