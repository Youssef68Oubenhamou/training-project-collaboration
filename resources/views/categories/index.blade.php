<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='All categories'>

    <div class="container">
        @foreach($categories as $categorie)
            <div class="row mb-4">
                <div data-mdb-input-init class="form-outline mb-2 col">
                    {{ $categorie->categorie_name }}
                </div>
                <button data-mdb-ripple-init type="submit" class="btn add btn-block col">
                    <a href="{{route('categories.edit' , $categorie->id)}}">Edit</a>
                </button>
            </div>
        @endforeach
    </div>

</x-admin-dashboard>