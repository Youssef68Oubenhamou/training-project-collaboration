<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Add Client'>
    <form method="POST" action="{{route('clients.store')}}" enctype="multipart/form-data">

        @csrf

        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="client_name" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Client Name</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="file" name="client_logo" id="form1Example1" class="form-control" />
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Create</button>

    </form>
</x-admin-dashboard>