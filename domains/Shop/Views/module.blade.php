@extends('Shop::layout.main')


@section('content')
<div class="container">

        <h2 class="btn btn-success">module</h2>

        <ul>
                @forelse ($categories as $category)
                <li>
                        {{ $category->category_name }}
                        <span>
                                <button>edit</button>
                        </span>
                </li>
                @empty
                <li>No Element</li>
                @endforelse
        </ul>
</div>
@endsection