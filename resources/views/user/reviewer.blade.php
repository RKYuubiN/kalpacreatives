@extends('app')
@section('content')
    <div>
        <table>
            <tr>
                <th>Name</th>
                <th>Dose</th>
                <th>Type</th>
                <th>Applicant Name</th>
                <th>Status</th>
            </tr>
        @foreach($drug as $drg)
            <tr>
                <td>{{$drg->name}}</td>  
                <td>{{$drg->dose}}</td>  
                <td>{{$drg->type}}</td>
                <td>{{$drg->registered_by}}</td>
                <td><a href="{{ route('review',$drg->id) }}"><button type="submit">Review</button></a></td>  
            </tr>
        @endforeach
        </table>
    </div>
    
@endsection