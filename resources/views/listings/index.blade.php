<x-layout>

<table class="table table-striped w-50 ">
  <thead>
    <tr>

      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Image</th>
      <th scope="col"></th>
      <th scope="col"></th>


    </tr>
  </thead>
@foreach($listings as $listing)

  <tbody>
    <tr class="text-center">
      <td>{{$listing->name}}</td>
      <td>{{$listing->email}}</td>
      <td>
          <img src="{{$listing->image ? asset('storage/'. $listing->image) : asset('/images/user.png')}}" alt="" height="auto" width="80px">
      </td>
    
      <td>
        <a href="/listings/{{$listing->id}}/edit">
          <img src="{{ asset('images/edit-icon.png') }}" alt="" height="25px" width="25px"/>
        </a>
        </td>
        <form method="POST"action="listings/{{$listing->id}}">
          @csrf
          @method('DELETE')

            <td>
              <button class="border-0">
                <img  src="{{ asset('images/delete-icon.png') }}" alt="" height="25px" width="25px">
              </button>
            </td>
        </form>
    </tr>
  </tbody>

@endforeach
</table>
    <div class=" w-50 d-flex flex-row-reverse ">

    <a class="btn btn-primary w-20" href="/listings/create" role="button">Create User</a>
  </div>

</x-layout>