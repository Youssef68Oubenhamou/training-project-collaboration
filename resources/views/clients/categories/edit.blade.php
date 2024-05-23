<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Create categorie'>
    <form method="POST" action="{{route('categories.update' , $categorie->id)}}" enctype="multipart/form-data">

        @csrf
        <input type="hidden" name="_method" value="PATCH" />
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="categorie_name" value="{{ $categorie->categorie_name }}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Categorie name</label>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Update</button>

    </form>
</x-admin-dashboard>