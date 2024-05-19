<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Update Client'>
    <form method="POST" action="{{route('clients.update' , $client->id)}}" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="client_name" value="{{$client->client_name}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Client Name</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="file" name="client_logo" id="form1Example1" class="form-control" />
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Update</button>

    </form>
</x-admin-dashboard>