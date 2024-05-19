<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Update expertise'>
    <form method="POST" action="{{route('expertises.update' , $expertise->id)}}" enctype="multipart/form-data">

        @csrf

        <input type="hidden" name="_method" value="PATCH" />
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="creation_infos" value="{{ $expertise->creation_infos }}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Creation infos</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="description_infos" value="{{ $expertise->description_infos }}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Description infos</label>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Update</button>

    </form>
</x-admin-dashboard>