<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Client'>

    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Client Name</th>
                <th scope="col">Client Logo</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$client->client_name}}</td>
                    <td><img src="{{ $client->client_logo }}" height="70" width="150" alt="Not Found" /></td>
                    <td><a href="{{ route('clients.edit' , $client->id) }}" data-mdb-ripple-init class="btn add" >Update</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin-dashboard>