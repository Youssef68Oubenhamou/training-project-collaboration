<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Update Contact'>
    <form method="POST" action="{{route('contacts.update' , $contact->id)}}" enctype="multipart/form-data">

        @csrf

        <input type="hidden" name="_method" value="PATCH" />
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="address" value="{{$contact->address}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Address</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" name="email" value="{{$contact->email}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Email</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="mobile" value="{{$contact->mobile}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Mobile</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="fix_1" value="{{$contact->fix_1}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Fix.1</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="fix_2" value="{{$contact->fix_2}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Fix.2</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="fix_3" value="{{$contact->fix_3}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Fix.3</label>
        </div>
        <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" name="fax" value="{{$contact->fax}}" id="form1Example1" class="form-control" />
            <label class="form-label" for="form1Example1">Fax</label>
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Update</button>
    </form>
</x-admin-dashboard>