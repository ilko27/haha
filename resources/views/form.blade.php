@extends('layout')

@section('title')
    Create Reminder
@endsection

@section('content')
    <div class="container-xl">
        <h2 class="my-4">Create a new reminder</h2>
        <form action="">
            <div class="row my-4">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="Date">
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" rows="3" placeholder="Description goes here"></textarea>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-md-2 col-sm-12 ms-auto">
                    <input type="submit" value="Create" class="btn btn-success w-100">
                </div>
            </div>
        </form>
    </div>
@endsection