<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Contact'>
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
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Fix.1</th>
                <th>Fix.2</th>
                <th>Fix.3</th>
                <th>Fax</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @if(count($contacts) == 0 )
            <tr>
                <td colspan="9" class="text-center">
                    <h2>NULL</h2>
                </td>
            </tr>
            @else @foreach($contacts as $contact)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <div class="d-flex align-items-center">
                   
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->address, 25, '...') !!}
                            </p>
                       
                    
                </td>
                <td>
                    <div class="d-flex align-items-center">
                  
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->email, 25, '...') !!}
                            </p>
                       
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                      
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->mobile, 10, '...') !!}
                            </p>
                       
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                      
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->fix_1, 10, '...') !!}
                            </p>
                        
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                       
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->fix_2, 10, '...') !!}
                            </p>
                       
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                     
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->fix_3, 10, '...') !!}
                            </p>
                       
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                     
                            <p class="fw-bold mb-1">
                                {!! Str::limit($contact->fax, 10, '...') !!}
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
                                    href="{{ route('contacts.edit' , $contact) }}"
                                    >Edit</a
                                >
                            </li>
                            <li>
                                <form
                                    method="post"
                                    action="{{route('contacts.destroy',$contact)}}"
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