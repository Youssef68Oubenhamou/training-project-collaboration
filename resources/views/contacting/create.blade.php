<link rel="stylesheet" href="{{asset('css/pages/admin/add-new-work.css')}}">
<x-admin-dashboard dashTitle='Create Contact'>
    <form method="POST" action="{{route('contacts.store')}}" enctype="multipart/form-data">

        @csrf

        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="address" id="form1Example1" value="{{old('address')}}" class="form-control @error('address') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Address</label>
            </div>
            @error('address')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="email" name="email" id="form1Example1" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Email</label>
            </div>
            @error('email')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="mobile" id="form1Example1" value="{{old('mobile')}}" class="form-control @error('mobile') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Mobile</label>
            </div>
            @error('mobile')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="fix_1" id="form1Example1" value="{{old('fix_1')}}" class="form-control @error('fix_1') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Fix.1</label>
            </div>
            @error('fix_1')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="fix_2" id="form1Example1" value="{{old('fix_2')}}" class="form-control @error('fix_2') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Fix.2</label>
            </div>
            @error('fix_2')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="fix_3" id="form1Example1" value="{{old('fix_3')}}" class="form-control @error('fix_3') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Fix.3</label>
            </div>
            @error('fix_3')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-4">
            <div data-mdb-input-init class="form-outline">
                <input type="text" name="fax" id="form1Example1" value="{{old('fax')}}" class="form-control @error('fax') is-invalid @enderror" />
                <label class="form-label" for="form1Example1">Fax</label>
            </div>
            @error('fax')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <button data-mdb-ripple-init type="submit" class="btn add btn-block">Create</button>
    </form>
</x-admin-dashboard>