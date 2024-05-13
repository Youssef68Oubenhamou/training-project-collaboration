<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Contact'>

    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Fix.1</th>
                <th scope="col">Fix.2</th>
                <th scope="col">Fix.3</th>
                <th scope="col">Fax</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$contact->address}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->mobile}}</td>
                    <td>{{$contact->fix_1}}</td>
                    <td>{{$contact->fix_2}}</td>
                    <td>{{$contact->fix_3}}</td>
                    <td>{{$contact->fax}}</td>
                    <td><button data-mdb-ripple-init type="submit" class="btn add btn-block"><a href="{{ route('contacts.edit' , $contact->id) }}" >Update</a></button></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin-dashboard>