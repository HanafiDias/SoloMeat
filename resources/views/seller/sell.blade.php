@include ('seller.headerseller')
@include ('seller.navbarseller')
@include ('seller.sidebarseller')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Main row -->
        <!-- Button trigger modal -->
        <div class="ml-3">
            <button type="button" class="btn btn-info rounded-3 btn-md" data-toggle="modal"
                data-target=".bd-example-modal-lg"><i class="fa-solid fa-box-open"></i> Product</button>
            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content p-3">
                        <form action="/seller/{id}/store" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3>Add Product</h3>
                            <div class="form-group">
                                <label for="inputAddress">id Toko</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{ auth()->id() }}"
                                    name="user_id" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Seller</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    value="{{ auth()->user()->username }}" name="nama_toko" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Nomer Whatsapp</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    value="{{ auth()->user()->no_wa }}" name="nomor_whatsapp" readonly>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Product Name</label>
                                <input type="text" class="form-control" id="inputAddress"
                                    placeholder="Name Meat Product" name="produk">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Link E-Commerse</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="https://...."
                                    name="link_toko_online">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Harga</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Contoh: 50000" name="harga">
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
        </div>
        <div class="p-3 table-responsive">
            <table class="table bg-white">
                <thead class="bg-dark">
                    <tr>
                        <th>No.</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Link</th>
                        <th>Harga</th>
                        <th>Seller Name</th>
                        <th>Nomor Whatsapp</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach ($data as $seller)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('image/store/' . $seller->gambar) }}" alt=""
                                    class="img-fluid">
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $seller->produk }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $seller->link_toko_online }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">Rp. {{ number_format($seller->harga) }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $seller->nama_toko }}</p>
                            </td>
                            <td>
                                <p class="fw-normal mb-1">{{ $seller->nomor_whatsapp }}</p>
                            </td>
                            <td class="d-flex ">
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
                                                <form action="/seller/{{ $seller->id }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <h3>Edit Product</h3>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Seller</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            name="nama_toko" value="{{ auth()->user()->username }}"
                                                            name="nama_toko" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Product Name</label>
                                                        <input type="text" class="form-control" id="inputAddress"
                                                            name="produk" placeholder="Name Meat Product"
                                                            value="{{ $seller->produk }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Link E-Commerse</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="https://...." name="link_toko_online"
                                                            value="{{ $seller->link_toko_online }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress2">Harga</label>
                                                        <input type="text" class="form-control" id="inputAddress2"
                                                            placeholder="contoh 50000" name="harga"
                                                            value="{{ $seller->harga }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Nomer Whatsapp</label>
                                                        <input type="text" class="form-control" id="inputAddress"
                                                            placeholder="628..." name="nomor_whatsapp"
                                                            value="{{ auth()->user()->no_wa }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFile">Product
                                                            Image</label>
                                                        @if ($seller->gambar)
                                                            <img src="{{ asset('image/store/' . $seller->gambar) }}"
                                                                class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                        @else
                                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                                        @endif
                                                        <input type="file" class="form-control" id="customFile"
                                                            accept="image/*" name="gambar" onchange="preview">
                                                        @if ($seller->gambar)
                                                            <small>Gambar Terpakai: {{ $seller->gambar }}</small>
                                                        @endif
                                                        <p><small>Gunakan gambar dengan scale 1:1 atau persegi</small>
                                                        </p>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-1">
                                    <form action="/seller/{{ $seller->id }}" method='POST'>
                                        @csrf
                                        @method('delete')
                                        <button type="button" class="btn btn-danger  btn-rounded btn-sm fw-bold"
                                            data-toggle="modal"
                                            data-target=".bd-hapus-modal-sm-{{ $seller->id }}"><i
                                                class="fa-solid fa-trash"></i></button>
                                        <!-- Modal -->
                                        <div class="modal fade bd-hapus-modal-sm-{{ $seller->id }}" tabindex="-1"
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

@extends ('admin.footer')
