@extends('HomePage.layout')
@section('content')

<div class="content-header">
    <div class="container rounded bg-white mt-3 mb-3">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Inputan Kamu Ada Yang Salah<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if (session()->has('success'))
        <div class="alert alert-success">
            @if(is_array(session('success')))
            <ul>
                @foreach (session('success') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @else
            {{ session('success') }}
            @endif
        </div>
        @endif
        <div class="row">
            <div class="col-md-5 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px" src="{{ asset('storage/'.auth()->user()->foto) }}"
                        alt="">
                    <span class="font-weight-bold">{{ auth()->user()->name }}</span><span
                        class="text-black-50">{{ auth()->user()->email }}</span>
                </div>
            </div>

            <div class="col-md-7 border-right" style="text-transform: capitalize">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">username</label><input type="text"
                                class="form-control" placeholder=" username" value="{{ auth()->user()->name }}"
                                disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">nomor telepon</label><input type="text"
                                class="form-control" placeholder="enter nomor telepon"
                                value="{{ auth()->user()->notelp }}" disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                class="form-control" placeholder="enter email id" value="{{ auth()->user()->email }}"
                                disabled></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">alamat</label><input type="text"
                                class="form-control" placeholder="enter alamat" value="{{ auth()->user()->alamat }}"
                                disabled></div>
                    </div>
                    <br>

                    <!-- Large modal -->
                    <button type="button" class="btn btn-warning" data-toggle="modal"
                        data-target=".bd-example-modal-lg">Edit Data</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target=".bd-changepassword-modal-lg">Change Password</button>

                    {{-- Modal Change Password --}}
                    <div class="modal fade bd-changepassword-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('gantiPassword') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Current Password</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="Password Saat Ini"
                                                placeholder="Enter current password" name="currentpassword">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="Password Baru" placeholder="Enter new password"
                                                name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Confirm Password</label>
                                            <input type="password" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="Password Konfirmasi"
                                                placeholder="Enter confirm password" name="password_confirmation">
                                        </div>
                                        <div class="mt-4 mb-3 text-center">
                                            <button class="btn btn-primary profile-button" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    {{-- Modal Edit Data --}}
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('updateDataUser') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="d-flex flex-column align-items-center" style="text-transform: none">
                                            <div class="rounded-circle overflow-hidden mt-5"
                                                style="width: 150px; height: 150px;">
                                                <img id="preview-image-before-upload" class="w-100 h-100"
                                                    src="{{ asset('storage/'.auth()->user()->foto) }}"
                                                    alt="Profile Image">
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="image" class="form-label">Upload Profile Photo</label>
                                                <div class="custom-file">
                                                    <input id="image" type="file" class="custom-file-input"
                                                        id="inputGroupFile02" name="foto" accept="image/*">
                                                    <label class="custom-file-label" for="inputGroupFile02"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="name" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    placeholder="Username" value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    placeholder="Email" value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="notelp" class="form-label">Nomor Telepon</label>
                                                <input type="text" class="form-control" id="notelp" name="notelp"
                                                    placeholder="Nomor Telepon" value="{{ auth()->user()->notelp }}">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    placeholder="Alamat" value="{{ auth()->user()->alamat }}">
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-3 text-center">
                                            <button class="btn btn-primary profile-button" type="submit">Save
                                                Profile</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {


    $('#image').change(function() {

        let reader = new FileReader();

        reader.onload = (e) => {

            $('#preview-image-before-upload').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);

    });

});
</script>

@endsection