@extends('layouts.app')
@section('title','ajouterStudent')
    <div class="container">
    <form action="{{route('update.student',$student->id )}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="id" value="{{$student->id}}" hidden>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$student->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Classe</label>
            <input type="text" class="form-control" name="class" value="{{$student->class}}">
        </div>
        <div class="form-group">
            <label>Image </label>
            <img src="{{$student->image_path}}" alt="">
            <input type="file" class="form-control" name="image_path" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
