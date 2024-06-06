<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Create asset'>
    <form method="POST" action="{{route('our-assets.store')}}">

        @csrf

        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="desc" 
                {{count($assets) >= 1 ? 'disabled' : ''}}
                id="form1Example1" value="{{old('desc')}}" class="form-control @error('desc') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Description</label>
            </div>
            @error('desc')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Create</button>
    </form>
</x-admin-dashboard>