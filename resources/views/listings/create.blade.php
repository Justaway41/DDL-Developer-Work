<x-layout>
    <div class="w-50 bg-light p-4">
        <form method="POST" class="d-flex flex-column" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="John Snow" value="{{old('name')}}">
              @error('name')
              <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="johnshow@example.com" value="{{old('email')}}">
              @error('email')
              <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
              @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Example: Kathmandu,Chitwan,etc" value="{{old('address')}}">
                @error('address')
              <p class="text-danger  mt-1"><small>{{$message}}</p></small>
              @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control h-auto" name="image" id="imageInput" >
                @error('image')
                <p class="text-danger  mt-1"><small>{{$message}}</p></small>
                @enderror
              </div>
            <button type="submit" class="btn  btn-primary align-self-end  w-20 ">Create User</button>
          </form>
    </div>
</x-layout>