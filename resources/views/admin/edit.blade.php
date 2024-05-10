<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Edit Design'>
    <form method="POST" action="{{ route('works.update' , $work) }}" enctype="multipart/form-data">

        @method('POST')

        @csrf

        <input type="hidden" name="_method" value="PATCH" />
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="brand_name" value="{{ $work->brand_name }}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Brand name</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="brand_description" value="{{ $work->brand_description }}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Brand description</label>
        </div>
        <div class="mb-4">
            <label for="formFileMultiple" class="form-label">Work image</label>
            <input class="form-control" name="img" type="file" id="formFileMultiple" multiple />
        </div>
        <div class="mb-4">
            <select class="form-select" name="categorie_id" aria-label="Default select example" >
            <!-- <option disabled>Select the category</option> -->
            @foreach($categories as $categorie)

                <option value="{{$categorie->id}}">{{$categorie->categorie_name}}</option>
            
            @endforeach
            </select>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Update</button>
    </form>
</x-admin-dashboard>