<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Expertise'>

    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Creation infos</th>
                <th scope="col">Description infos</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach($expertises as $expertise)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$expertise->creation_infos}}</td>
                    <td>{{ $expertise->description_infos }}</td>
                    <td><a href="{{ route('expertises.edit' , $expertise->id) }}" data-mdb-ripple-init class="btn add" >Update</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin-dashboard>