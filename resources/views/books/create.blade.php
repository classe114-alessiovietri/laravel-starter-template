@extends('layouts.app')

@section('page-title', 'Book Create')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Book Create
            </h1>

            <form action="{{ route('books.store') }}" method="post">
                @csrf {{-- <--- A cosa serve? --}}

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success">
                        + Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
