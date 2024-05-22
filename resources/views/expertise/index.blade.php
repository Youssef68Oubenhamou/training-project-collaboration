<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Expertise'>

    <div class="container expertise-page">
        <table class="table align-middle mb-0 bg-white">
            <div>
              @if (session()->has('success'))
                <div class="alert alert-success text-center">{{session()->get('success')}}</div>
              @endif
            </div>
              <thead class="bg-light">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Creation infos</th>
                  <th scope="col">Description infos</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @if(count($expertises) == 0 )
                      <tr scope="row">
                          <td colspan="4" class="text-center">
                              <h2>NULL</h2>
                          </td>
                      </tr>
                  @else
                      @foreach ( $expertises as $expertise )
                      <tr scope="row">
                          <td>{{ $loop->iteration }}</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="ms-3">
                                <p class="fw-bold mb-1">
                                    {!! Str::limit($expertise->creation_infos, 10, '...') !!}
                                  </p>
                              </div>
                            </div>
                          </td>
                          <td scope="row">
                            <div class="d-flex align-items-center">
                              <div class="ms-3">
                                <p class="fw-bold mb-1">
                                    {!! Str::limit($expertise->description_infos, 20, '...') !!}
                                </p>
                              </div>
                            </div>
                          </td>
                          <td scope="row">
                              <div class="dropdown">
                                  <div class="nav-link collapsed"
                                    data-mdb-dropdown-init
                                  >
                                  <i class="fa-solid fa-caret-down" style="cursor:pointer !important;"></i>
                                  </div>
                                  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="{{route('expertises.edit',$expertise)}}">Edit</a></li>
                                    <li>
                                      <form method="post" action="{{route('expertises.destroy',$expertise)}}">
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
    </div>

</x-admin-dashboard>

<script src="{{asset('js/delete-confirmation.js')}}"></script>