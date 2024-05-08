<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Add new work'>
    <form method="POST" action="{{route('works.store')}}" enctype="multipart/form-data">

        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="brand_name" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Brand name</label>
        </div>
        <div class="mb-4">
            <label for="formFileMultiple" class="form-label">Work image</label>
            <input class="form-control" name="path" type="file" id="formFileMultiple" multiple />
        </div>
        <div class="mb-4">
            <select class="form-select" name="categorie_id" aria-label="Default select example" >
            <option disabled>Select the category</option>
            @foreach($categories as $categorie)

                <option value="{{$categorie->id}}">{{$categorie->categorie_name}}</option>
            
            @endforeach
            </select>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Add</button>
    </form>
</x-admin-dashboard>