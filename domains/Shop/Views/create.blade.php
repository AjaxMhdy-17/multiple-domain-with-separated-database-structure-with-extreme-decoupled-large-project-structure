@extends('Shop::layout.main')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto">
            <h3>
                Create Shop 
            </h3>

            <form action="{{route('Shop::create.store')}}" method="post">
                @csrf
                <div>
                    <input type="text" class="form-control" name="category_name" placeholder="category_name">
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-info">create</button>
                </div>
            </form>

        </div>
    </div>  
</div>
@endsection