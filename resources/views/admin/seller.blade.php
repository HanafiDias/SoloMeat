    @include('admin.header')
    @include('admin.navbar')
    @include('admin.sidebar')
    <style>
        td {
            max-width: 200px;
            /* ukuran maksimum kolom tabel */
            word-wrap: break-word;
            /* memastikan teks panjang tidak melebar */
        }
    </style>

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Seller SoloMeat</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="ml-3">
                <button type="button" class="btn btn-info rounded-3 btn-md" data-toggle="modal"
                    data-target=".bd-example-modal-lg"><i class="fa-solid fa-shop"></i> Store / Seller</button>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content p-3">
                            <form action="/adminseller/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3>Add Seller</h3>
                                <div class="form-group">
                                    <label for="inputAddress">Store Name</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Meat Shop"
                                        name="nama_toko">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress3">Nomor what'sapp</label>
                                    <input type="text" class="form-control" id="inputAddress3"
                                        placeholder="Gunakan Format 628...." name="nomor_wa">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress4">Link Toko Online</label>
                                    <input type="text" class="form-control" id="inputAddress4"
                                        placeholder="Https://...." name="link_barang">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Alamat</label>
                                    <textarea class="form-control" name="alamat" placeholder="Jl.Berdua Bersamamu...." id="" cols="15"
                                        rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Seller</button>
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
                            <th>Fullname</th>
                            <th>Name Shop</th>
                            <th>Nomer What'sapp</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach ($data as $seller)
                        <tbody>
                            <tr>
                                <td>
                                    <p class="fw-bold mb-1">{{ $seller->fullname }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $seller->nama_toko }}</p>
                                </td>
                                <td>
                                    <p class="fw-bold mb-1">{{ $seller->nomor_wa }}</p>
                                </td>
                                <td>
                                    <p class="fw-normal mb-1">{{ $seller->email }}</p>
                                </td>
                                <td class="d-flex">
                                    <div class="m-1">
                                        <button type="button" class="btn btn-info rounded-3 btn-sm" data-toggle="modal"
                                            data-target=".bd-edit-modal-lg-{{ $seller->id }}"><i
                                                class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade bd-edit-modal-lg-{{ $seller->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content p-3">
                                                    <form action="/{{ $seller->id }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <h3>Edit Seller</h3>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Store Name</label>
                                                            <input type="text" class="form-control" id="inputAddress"
                                                                placeholder="Meat Shop" name="nama_toko"
                                                                value="{{ $seller->nama_toko }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress3">Nomor what'sapp</label>
                                                            <input type="text" class="form-control"
                                                                id="inputAddress3" placeholder="Gunakan Format 628...."
                                                                name="nomor_wa" value="{{ $seller->nomor_wa }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress4">Link Toko Online</label>
                                                            <input type="text" class="form-control"
                                                                id="inputAddress4" placeholder="Https://...."
                                                                name="link_barang" value="{{ $seller->link_barang }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Alamat</label>
                                                            <textarea class="form-control" name="alamat" placeholder="Jl.Berdua Bersamamu...." id="" cols="15"
                                                                rows="5">{{ $seller->alamat }}</textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-1">
                                        <form action="/adminseller/{{ $seller->id }}" method='POST'>
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-danger  btn-rounded btn-sm fw-bold"
                                                data-toggle="modal"
                                                data-target=".bd-hapus-modal-sm-{{ $seller->id }}"><i
                                                    class="fa-solid fa-trash"></i></button>
                                            <!-- Modal -->
                                            <div class="modal fade bd-hapus-modal-sm-{{ $seller->id }}"
                                                tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                                aria-hidden="true">
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
