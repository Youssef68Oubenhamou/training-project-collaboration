<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Our assets'>
<div class="container contact-page">
    <table class="table align-middle mb-0 bg-white">
        <div>
            @if (session()->has('success'))
            <div class="alert alert-success text-center">
                {{session()->get('success')}}
            </div>
            @endif
        </div>
        <thead class="bg-light">
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(count($assets) == 0 )
            <tr>
                <td colspan="3" class="text-center">
                    <h2>NULL</h2>
                </td>
            </tr>
            @else
            @foreach($assets as $asset)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="d-flex align-items-center">
                            <p class="fw-bold mb-1">
                                {!! Str::limit($asset->desc, 25, '...') !!}
                            </p>
                    </div>
                </td>
                <td>
                    <div class="dropdown">
                        <div class="nav-link collapsed" data-mdb-dropdown-init>
                            <i
                                class="fa-solid fa-caret-down"
                                style="cursor: pointer !important"
                            ></i>
                        </div>
                        <ul
                            class="dropdown-menu"
                            aria-labelledby="dropdownMenuButton"
                        >
                            <li>
                                <a
                                    class="dropdown-item"
                                    href="{{ route('our-assets.edit' , $asset) }}"
                                    >Edit</a
                                >
                            </li>
                            <li>
                                <form
                                    method="post"
                                    action="{{route('our-assets.destroy',$asset)}}"
                                >
                                    @csrf @method('delete')
                                    <button class="dropdown-item delete-btn">
                                        Delete
                                    </button>
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