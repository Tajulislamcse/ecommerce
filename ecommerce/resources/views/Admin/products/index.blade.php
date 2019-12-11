@extends('Admin.layouts.master')




<!-- Stored in resources/views/about.blade.php -->



@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Product Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>Name</th>
                            <th>Sku</th>
                            <th>Image(s)</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!-- /.card -->

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products List:</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                Id
                            </th>
                            <th style="width: 10%">
                                Name
                            </th>
                            <th style="width: 7.5%">
                                Sku
                            </th>
                            <th style="width: 7.5%">
                                Image
                            </th>
                            <th style="width: 15%">
                                Description
                            </th>
                            
                            <th style="width: 10%">
                                Category
                            </th>
                            <th style="width: 10%">
                                Price
                            </th>
                            <th style="width: 5%">
                                Discount
                            </th>
                            <th style="width: 30%" class="text-center">
                                Actions
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)

                        <tr>
                            <td>
                                {{ $product->getId() }}
                            </td>
                            <td>
                                {{ $product->getName() }}
                            </td>

                             <td>
                                {{ $product->getSku() }}
                            </td>
                            <td>
                                {{ $product->getImage() }}
                            </td>
                            <td>
                                {{ $product->getDescription() }}
                            </td>
                            <td>
                                {{ $product->getCategory() }}
                            </td>
                            <td>
                                {{ $product->getPrice() }}
                            </td>
                            
                            <td>
                                {{ $product->getDiscount() }}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <form style="display:inline" action="/admin/products/{{ $product->getId() }}/edit"
                                    method="GET">
                                    <button type="submit" class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                </form>

                                <form style="display:inline" action="/admin/products/{{ $product->getId() }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
    </section>
    <!-- /.content -->



</div>
<!-- /.content-wrapper -->
@endsection



@section('scripts')

<script>
    $(function () {
        $('#example1').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "/admin/products/getProductsJson",
                "columnDefs": [
                    {
                        "orderable": false,
                        "targets": 0,
                        "render": function (data, type, row) {
                            return `<input type='checkbox' value='${data}'/>`;
                        }
                    },
                    {
                        "orderable": false,
                        "targets": 8,
                        "render": function (data, type, row) {
                            return `<button type="submit" class="btn btn-info btn-sm" onclick="window.location.href='/admin/products/${data}/edit'" value='${data}'>
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </button>
                            <button type="submit" class="btn btn-danger btn-sm" href="#" value='${data}'>
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>`;
                        }
                    }
                ]
            });
    });
</script>
@endsection