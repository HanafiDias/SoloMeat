@include ('seller.headerseller')
@include ('seller.navbarseller')
@include ('seller.sidebarseller')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product (nama toko)</h1>
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
                        <form>
                            <div class="form-group">
                                <label for="inputAddress">Product Name</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Name Meat">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Link E-Commerse</label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="https://....">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="customFile">Product Image</label>
                                <input type="file" class="form-control" id="customFile" />
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3">
            <table class="table bg-white">
                <thead class="bg-dark">
                    <tr>
                        <th>Image</th>
                        <th>Name Product</th>
                        <th>Link</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="{{ asset('image/tenderloin.jpg') }}" alt="" class="img-fluid"></td>
                        <td>
                            <p class="fw-normal mb-1">Tenderloin A</p>
                        </td>
                        <td>User</td>
                        <td>
                            <button type="button" class="btn btn-info btn-rounded btn-sm fw-bold"><i
                                    class="fa-solid fa-pen-to-square"></i></button>
                            <button type="button" class="btn btn-danger btn-rounded btn-sm fw-bold"><i
                                    class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                    {{-- <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="ms-3">
                    <p class="fw-bold mb-1">Muhammad Naufal Faruq</p>
                    <p class="text-muted mb-0">naufal@gmail.com</p>
                  </div>
                </div>
              </td>
              <td>
                <p class="fw-normal mb-1">nopnop</p>
              </td>
              <td>Seller</td>
              <td>
                <button type="button" class="btn btn-link btn-rounded btn-sm fw-bold" data-mdb-ripple-color="dark">
                  Edit
                </button>
              </td>
            </tr> --}}
                </tbody>
            </table>
        </div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@include('admin.footer')
