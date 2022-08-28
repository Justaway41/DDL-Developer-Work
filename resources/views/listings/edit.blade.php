<x-layout>
    <div class="w-50 bg-light p-4">
        <form method="POST" class="d-flex flex-column" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="Name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="John Snow" value="{{$listing->name}}">
              @error('name')
              <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="johnshow@example.com" value="{{$listing->email}}">
              @error('email')
              <p class="text-danger fs-1 mt-1"><small>{{$message}}</p></small></p>
              @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Example: Kathmandu,Chitwan,etc" value="{{$listing->address}}">
                @error('address')
              <p class="text-danger  mt-1"><small>{{$message}}</p></small>
              @enderror
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control h-auto" name="image" id="imageInput" >
                <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('/images/user.png')}}" alt="" height="auto" width="80px" class="mt-3">

                @error('image')
                <p class="text-danger  mt-1"><small>{{$message}}</p></small>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary align-self-end  w-20 ">Update User</button>
          </form>
    </div>
</x-layout>