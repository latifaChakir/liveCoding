@extends('layouts.app')
@section('title','page d\'accueil')
@section('content')
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">	
            <div class="ajouter">
                <a href="/ajouter"><button class="btn btn-primary">Add</button></a>
            </div>		
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="show-entries">
                            <span>Show</span>
                            <select>
                                <option>5</option>
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                            </select>
                            <span>entries</span>
                        </div>						
                    </div>
                    <div class="col-sm-4">
                        <h2 class="text-center">Students <b>Details</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Classe</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($students as $student)
                        
              
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->class}}</td>

                        <td>
                            <a href="/update/{{$student->id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <form action="{{route('delete.student',$student->id )}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">supprimer</button>
                            </form>
                            {{-- <a href="/delete/{{$student->id}}" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a> --}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    {!! $students->links() !!}
                </ul>
            </div>
        </div>
    </div>        
</div>  
@endsection   
                             		