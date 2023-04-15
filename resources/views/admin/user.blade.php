@include('admin.header')
@include('admin.navbar')
@include('admin.sidebar')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User SoloMeat</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="ml-3">
            <button type="button" class="btn btn-info rounded-3 btn-md" data-toggle="modal"
                data-target=".bd-example-modal-lg"><i class="fa-solid fa-user-plus"></i> User</button>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-3">
                        <form action="/adminuser/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3>Add User</h3>
                            <div class="form-group">
                                <label for="inputAddress">Fullname</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    placeholder="Hanafi Dias Arif Dewanto" name="fullname">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress3">Username</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="hanafidias"
                                    name="username">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress3">Email</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="xxxx@gmail.com" name="email">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress3">Nomor what'sapp</label>
                                <input type="text" class="form-control" id="inputAddress3"
                                    placeholder="Gunakan Format 628...." name="no_wa">
                            </div>
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main row -->
        <div class="p-3 table-responsive">
            <table class="table table-bordered bg-white">
                <thead class="bg-dark">
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Nomor What'sapp</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($data as $user)
                    <tbody>
                        <tr>
                            <td>
                                <p class="fw-bold mb-1">{{ $user->fullname }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $user->username }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $user->email }}</p>
                            </td>
                            <td>
                                <p class="fw-bold mb-1">{{ $user->no_wa }}</p>
                            </td>
                            <td class="d-flex">
                                <div class="m-1">
                                    <button type="button" class="btn btn-info rounded-3 btn-sm" data-toggle="modal"
                                        data-target=".bd-edit-modal-lg-{{ $user->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade bd-edit-modal-lg-{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content p-3">
                                                <form action="/{{ $user->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <h3>Edit User</h3>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Fullname</label>
                                                        <input type="text" class="form-control" id="inputAddress"
                                                            placeholder="Hanafi Dias Arif Dewanto" name="fullname"
                                                            value="{{ $user->fullname }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress3">Username</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="hanafidias" name="username"
                                                            value="{{ $user->username }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress3">Email</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="xxxx@gmail.com" name="email"
                                                            value="{{ $user->email }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress3">Nomor what'sapp</label>
                                                        <input type="text" class="form-control" id="inputAddress3"
                                                            placeholder="628...." name="no_wa"
                                                            value="{{ $user->no_wa }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-1">
                                    <form action="/adminuser/{{ $user->id }}" method='POST'>
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger  btn-rounded btn-sm fw-bold"
                                            data-toggle="modal"
                                            data-target=".bd-hapus-modal-sm-{{ $user->id }}"><i
                                                class="fa-solid fa-trash"></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade bd-hapus-modal-sm-{{ $user->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content p-3 d-flex">
                                                    <p>Apakah anda yakin untuk menghapus?</p>
                                                    <div class="modal-footer p-2 d-flex">
                                                        <button type="submit"
                                                            class="btn btn-danger row">Hapus</button>
                                                        <button type="button" class="btn btn-secondary row"
                                                            data-dismiss="modal">Batal</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@include('admin.footer')
