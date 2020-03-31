@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Product</h1>

        <a href="{{ route('products.create') }}" class="btn btn-info">New Product</a>
        <br /><br />

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Rating</th>
                    <th></th>
                </tr>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td>
                            <i class="far fa-star fa-stack-1x"></i>
                            <small class="text-muted">

                            @if($product->rating)
                                    @for($x=0; $x < $product->rating; $x++)
                                        &#9733;
                                    @endfor
                                @else
                                    &#9734; &#9734; &#9734; &#9734; &#9734;
                                @endif
                            </small>
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3">
                {{ $products->links() }}
            </div>
        </div>
        </div>

    </div>
    <!-- /.col-lg-12 -->
@endsection
