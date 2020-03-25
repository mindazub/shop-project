@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Product - {{ $product->name }}</h1>

        <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
        <br /><br />

        <table class="table">
            <tbody>
            <tr>
                <td>Name</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>${{ $product->price }}</td>
            </tr>
            <tr>
                <td>Photo</td>
                    <td>
                        <img class="card-img-top"  src="{{ Storage::url($product->photo) }}" alt="">
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
    <!-- /.col-lg-12 -->
@endsection
