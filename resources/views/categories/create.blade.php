<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Create categorie'>
    <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="categorie_name" id="form1Example1" value="{{old('categorie_name')}}" class="form-control @error('categorie_name') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Categorie name</label>
            </div>
            @error('categorie_name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Create</button>

    </form>
</x-admin-dashboard>