<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Add Client'>
    <form method="POST" action="{{route('clients.store')}}" enctype="multipart/form-data">

        @csrf

        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="client_name" id="form1Example1" value="{{old('client_name')}}" class="form-control  @error('client_name') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Client Name</label>
            </div>
            @error('client_name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="file" name="client_logo" id="form1Example1" value="{{old('client_logo')}}" class="form-control @error('client_logo') is-invalid @enderror" />
            </div>
            @error('client_name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Create</button>

    </form>
</x-admin-dashboard>