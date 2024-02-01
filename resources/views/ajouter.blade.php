@extends('layouts.app')
@section('title','ajouterStudent')
    <div class="container">
    <form action="/insertStudent" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Classe</label>
            <input type="text" class="form-control" name="class" >
        </div>
        <div class="form-group">
            <label>Image </label>
            <input type="file" class="form-control" name="image_path" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
