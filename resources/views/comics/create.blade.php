@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card-title d-flex align-items-center justify-content-between">
                <h1>Insert a Comic</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale date</label>
                            <input type="text" class="form-control" id="sale_date" name="sale_date">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Comic Thumb</label>
                            <input type="url" class="form-control" id="thumb" name="thumb">
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-end">
                        <button type="reset" class="btn btn-secondary">Reset</button>
                        <button type="submit" class="btn btn-success">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
