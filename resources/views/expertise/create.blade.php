<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Create expertise'>
    <form method="POST" action="{{route('expertises.store')}}" enctype="multipart/form-data">

        @csrf

        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="creation_infos" 
                {{count($expertises) >= 1 ? 'disabled' : ''}}
                id="form1Example1" value="{{old('creation_infos')}}" class="form-control  @error('creation_infos') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Creation infos</label>
            </div>
            @error('creation_infos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="description_infos" 
                 {{count($expertises) >= 1 ? 'disabled' : ''}}
                id="form1Example1" value="{{old('description_infos')}}" class="form-control @error('description_infos') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Description infos</label>
            </div>
            @error('description_infos')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Create</button>

    </form>
</x-admin-dashboard>