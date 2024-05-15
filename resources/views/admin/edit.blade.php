<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Edit Design'>
    <form method="POST" action="{{ route('works.update' , $work) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div data-mdb-input-init class="form-outline mt-4">
            <input type="text" name="brand_name" value="{{ $work->brand_name }}" id="form1Example1" class="form-control @error('brand_name') is-invalid @enderror" />
            <label class="form-label" for="form1Example1">Brand name</label>
            @error('brand_name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div data-mdb-input-init class="form-outline mt-4">
            <input type="text" name="brand_description" value="{{ $work->brand_description }}" id="form1Example1" class="form-control @error('brand_description') is-invalid @enderror" />
            <label class="form-label" for="form1Example1">Brand description</label>
            @error('brand_description')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mt-4">
            <label for="formFileMultiple" class="form-label">Work image</label>
            <input class="form-control @error('img') is-invalid @enderror" name="img" type="file" id="formFileMultiple" multiple />
            @error('img')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mt-4">
            <select class="form-select @error('categorie_id') is-invalid @enderror"  name="categorie_id" aria-label="Default select example" >
            <option disabled>Select the category</option> 
                @if(count($categories) == 0 )
                        <option disabled>Null</option>
                @else
                @foreach($categories as $categorie)
                    {{-- class="{{$categorie->id == $work->categorie_id? 'selected':''}}" --}}
                    <option value="{{$categorie->id}}">{{$categorie->categorie_name}}</option>
                @endforeach
                @endif
            </select>
        </div>
        @error('categorie_id')
            <small class="text-danger">{{$message}}</small>
        @enderror
        <button data-mdb-ripple-init type="submit" class="btn add btn-block mt-4">Update</button>
    </form>
</x-admin-dashboard>