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
                    <h1 class="m-0">Product SoloMeat</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        {{-- <div class="ml-3">
            <button type="button" class="btn btn-info rounded-3 btn-md" data-toggle="modal"
                data-target=".bd-example-modal-lg"><i class="fa-solid fa-box-open"></i> Product</button>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-3">
                        <form action="/adminproduct/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3>Add Product</h3>
                            <div class="form-group">
                                <label for="inputAddress">Product Name</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Name Meat"
                                    name="produk">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Link E-Commerse</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="https://...."
                                    name="link_toko_online">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Harga</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Rp.xxxx"
                                    name="harga">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Seller</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="MeatShop"
                                    name="nama_toko">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nomer Whatsapp</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    placeholder=" Gunakan Format 628..." name="nomor_whatsapp">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="customFile">Product Image</label>
                                <input type="file" class="form-control" id="customFile" accept="image/*"
                                    name="gambar">
                                <p><small>Gunakan gambar dengan scale 1:1 atau persegi</small>
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="card-body table-bordered-responsive p-0 mx-3 mt-3">
            <div class="table-responsive">
                <table class="table-bordered text-wrap mb-3 hover stripe" id="myTable">
                    <thead>
                        <tr class="bg-secondary">
                            <th>No.</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Link</th>
                            <th>Harga</th>
                            <th>Seller Name</th>
                            <th>Nomor Whatsapp</th>
                            <th>Views</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                        <tbody>
                            <tr>
                                <td class="border">{{ $loop->iteration }}</td>
                                <td class="border"><img src="{{ asset('image/store/' . $item->gambar) }}" alt=""
                                        class="img-fluid">
                                </td>
                                <td class="border">
                                    {{ $item->produk }}
                                </td>
                                <td class="border">
                                    {{ $item->link_toko_online }}
                                </td>
                                <td class="border">
                                    Rp. {{ number_format($item->harga) }}
                                </td>
                                <td class="border">
                                    {{ $item->nama_toko }}
                                </td>
                                <td class="border">
                                    {{ $item->nomor_whatsapp }}
                                </td>
                                <td class="border">
                                    {{ $item->counter }}
                                </td>
                                <td class="d-flex ">
                                    <div class="m-1">
                                        <button type="button" class="btn btn-info rounded-3 btn-sm" data-toggle="modal"
                                            data-target=".bd-edit-modal-lg-{{ $item->id }}"><i
                                                class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade bd-edit-modal-lg-{{ $item->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content p-3">
                                                    <form action="/admin/{{ $item->id }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('put')
                                                        <h3>Edit Product</h3>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Product Name</label>
                                                            <input type="text" class="form-control" id="inputAddress"
                                                                name="produk" value="{{ $item->produk }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Link E-Commerse</label>
                                                            <input type="text" class="form-control"
                                                                id="inputAddress2" placeholder="https://...."
                                                                name="link_toko_online"
                                                                value="{{ $item->link_toko_online }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Harga</label>
                                                            <input type="text" class="form-control"
                                                                id="inputAddress2" placeholder="" name="harga"
                                                                value="{{ $item->harga }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress2">Seller</label>
                                                            <input type="text" class="form-control"
                                                                id="inputAddress2" placeholder="MeatShop"
                                                                name="nama_toko" value="{{ $item->nama_toko }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Nomer Whatsapp</label>
                                                            <input type="text" class="form-control" id="inputAddress"
                                                                placeholder="628..." name="nomor_whatsapp"
                                                                value="{{ $item->nomor_whatsapp }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="customFile">Product
                                                                Image</label>
                                                            @if ($item->gambar)
                                                                <img src="{{ asset('image/store/' . $item->gambar) }}"
                                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                            @else
                                                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                                            @endif
                                                            <input type="file" class="form-control" id="customFile"
                                                                accept="image/*" name="gambar" onchange="preview">
                                                            @if ($item->gambar)
                                                                <small>Gambar Terpakai: {{ $item->gambar }}</small>
                                                            @endif
                                                            <p><small>Gunakan gambar dengan scale 1:1 atau
                                                                    persegi</small>
                                                            </p>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-1">
                                        <form action="/adminproduct/{{ $item->id }}" method='POST'>
                                            @csrf
                                            @method('delete')
                                            <button type="button" class="btn btn-danger  btn-rounded btn-sm fw-bold"
                                                data-toggle="modal"
                                                data-target=".bd-hapus-modal-sm-{{ $item->id }}"><i
                                                    class="fa-solid fa-trash"></i></button>
                                            <!-- Modal -->
                                            <div class="modal fade bd-hapus-modal-sm-{{ $item->id }}"
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
        </div> --}}

        <div class="table-responsive mt-3">
            <table class="table-bordered text-wrap mb-3 hover stripe" id="myTable">
                <thead>
                    <tr class="bg-dark">
                        <th>No.</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Link</th>
                        <th>Harga</th>
                        <th>Seller Name</th>
                        <th>Nomor Whatsapp</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>

                            <td class="border">{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('image/store/' . $item->gambar) }}" alt="" class="img-fluid">
                            </td>
                            <td class="border">{{ $item->produk }}</td>
                            <td class="border">{{ $item->link_toko_online }}</td>
                            <td class="border">Rp.
                                {{ number_format($item->harga) }}</td>
                            <td class="border">{{ $item->nama_toko }}</td>
                            <td class="border">{{ $item->nomer_whatsapp }}</td>
                            <td class="border">{{ $item->counter }}</td>
                            <td class="d-flex ">
                                <div class="m-1">
                                    <button type="button" class="btn btn-info rounded-3 btn-sm" data-toggle="modal"
                                        data-target=".bd-edit-modal-lg-{{ $item->id }}"><i
                                            class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade bd-edit-modal-lg-{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content p-3">
                                                <form action="/admin/{{ $item->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <h3>Edit Product</h3>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Product Name</label>
                                                        <input type="text" class="form-control" id="inputAddress"
                                                            name="produk" value="{{ $item->produk }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Link E-Commerse</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="https://...." name="link_toko_online"
                                                            value="{{ $item->link_toko_online }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Harga</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="" name="harga" value="{{ $item->harga }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Seller</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="MeatShop" name="nama_toko"
                                                            value="{{ $item->nama_toko }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Nomer Whatsapp</label>
                                                        <input type="text" class="form-control" id="inputAddress"
                                                            placeholder="628..." name="nomor_whatsapp"
                                                            value="{{ $item->nomor_whatsapp }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFile">Product
                                                            Image</label>
                                                        @if ($item->gambar)
                                                            <img src="{{ asset('image/store/' . $item->gambar) }}"
                                                                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                        @else
                                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                                        @endif
                                                        <input type="file" class="form-control" id="customFile"
                                                            accept="image/*" name="gambar" onchange="preview">
                                                        @if ($item->gambar)
                                                            <small>Gambar Terpakai: {{ $item->gambar }}</small>
                                                        @endif
                                                        <p><small>Gunakan gambar dengan scale 1:1 atau
                                                                persegi</small>
                                                        </p>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-1">
                                    <form action="/adminproduct/{{ $item->id }}" method='POST'>
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger  btn-rounded btn-sm fw-bold"
                                            data-toggle="modal" data-target=".bd-hapus-modal-sm-{{ $item->id }}"><i
                                                class="fa-solid fa-trash"></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade bd-hapus-modal-sm-{{ $item->id }}" tabindex="-1"
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
                    @endforeach
                </tbody>
            </table>
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>




@include('admin.footer')
