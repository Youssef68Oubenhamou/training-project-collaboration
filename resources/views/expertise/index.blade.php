<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Expertise'>

    <div class="container">
        @foreach($expertises as $expertise)
            <div class="row mb-4">
                <div data-mdb-input-init class="form-outline mb-2 col">
                    {{ $expertise->creation_infos }}
                </div>
                <div data-mdb-input-init class="form-outline mb-2 col">
                    {{ $expertise->description_infos }}
                </div>
                <button data-mdb-ripple-init type="submit" class="btn add btn-block col">
                    <a href="{{route('expertises.edit' , $expertise->id)}}">Edit</a>
                </button>
            </div>
        @endforeach
    </div>

</x-admin-dashboard>