@extends('app')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Product</h1>

        <a href="{{ route('banners.create') }}" class="btn btn-info">New Banner</a>
        <br /><br />

        <table class="table">
            @if($banners->count())
                <tbody>
                <tr>
                    <th>Banner ID</th>
                    <th>Photo</th>
                    <th></th>
                </tr>
                @foreach ($banners as $banner)
                    <tr>
                        <td>{{ $banner->id }}</td>
                        <td>
                            <img class="card-img-top"  src="{{ Storage::url($banner->photo) }}" alt="">
                        </td>
                        <td>
                            <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')" />
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            @else
                <tbody>
                <tr>
                    <h3>There are no banners, please add one <a href="{{ route('banners.create') }}">here</a></h3>
                </tr>
                </tbody>

            @endif
        </table>

    </div>
    <!-- /.col-lg-12 -->
@endsection
