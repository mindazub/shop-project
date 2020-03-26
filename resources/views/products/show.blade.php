@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Product - {{ $product->name }}</h1>

        <a href="{{ route('home') }}" class="btn btn-success">Home</a>
        <a href="{{ route('products.index') }}" class="btn btn-info">Back to Products</a>
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
                <td>Rating</td>
                <td>
                    <form action="{{ route('products.rate', $product->id) }}" method="GET">
                        @method('POST')
                        @csrf
                        <select name="rating">
                            <option value="">Rate Me</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <input type="submit" value="Rate" />
                    </form>
                </td>
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
