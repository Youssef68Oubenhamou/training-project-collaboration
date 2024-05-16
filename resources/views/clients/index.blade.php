<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Contact'>

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
                    <td>{{$client->client_logo}}</td>
                    <td><button data-mdb-ripple-init type="submit" class="btn add btn-block"><a href="{{ route('clients.edit' , $client->id) }}" >Update</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin-dashboard>