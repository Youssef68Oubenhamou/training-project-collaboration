<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='All categories'>

    <div class="container">
        {{-- @foreach($categories as $categorie)
            <div class="row mb-4">
                <div data-mdb-input-init class="form-outline mb-2 col">
                    {{ $categorie->categorie_name }}
                </div>
                <button data-mdb-ripple-init type="submit" class="btn add btn-block col">
                    <a href="{{route('categories.edit' , $categorie->id)}}">Edit</a>
                </button>
            </div>
        @endforeach --}}
    </div>

    <table class="table align-middle mb-0 bg-white">
        <div>
          @if (session()->has('success'))
            <div class="alert alert-success text-center">{{session()->get('success')}}</div>
          @endif
        </div>
          <thead class="bg-light">
            <tr>
              <th>ID</th>
              <th>Category name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
              @if(count($categories) == 0 )
                  <tr>
                      <td colspan="3" class="text-center">
                          <h2>NULL</h2>
                      </td>
                  </tr>
              @else
                  @foreach ( $categories as $categorie )
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="ms-3">
                            <p class="fw-bold mb-1">{{ $categorie->categorie_name }}}</p>
                          </div>
                        </div>
                      </td>
                      <td>
                          <div class="dropdown">
                              <div class="nav-link collapsed"
                                data-mdb-dropdown-init
                              >
                              <i class="fa-solid fa-caret-down" style="cursor:pointer !important;"></i>
                              </div>
                              <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="{{route('categories.edit',$categorie)}}">Edit</a></li>
                                <li>
                                  <form method="post" action="{{route('categories.destroy',$categorie)}}">
                                    @csrf
                                    @method('delete')
                                    <button class="dropdown-item delete-btn">Delete</button>
                                  </form>
                                </li>
                              </ul>
                            </div>
                      </td>
                    </tr>
                  @endforeach
                  @endif
          </tbody>
        </table>
</x-admin-dashboard>

<script src="{{asset('js/delete-confirmation.js')}}"></script>