@extends('app')
@section('content')
    <div>
        <ol>
            <li>Name: {{$drug->name}}</li>
            <li>Dose: {{$drug->dose}}</li>
            <li>Type: {{$drug->type}}</li>
            <li>Applicant Name: {{$drug->registered_by}}</li>
        </ol>
        <form method= "POST" action="{{ route('reviewstatus') }}">
             @csrf
        <label for="approved_by">Name of Reviewer</label>
        <input type="text" name="approved_by">
        <input type="hidden" name="id" value=" {{$drug->id}}">
        <div style="display:none;" id="rejection-note-div">
        <label for="rejection_note">Rejection Note</label>
        <textarea name="rejection_note"></textarea>
        </div>
            <button type="submit">Approve</button>
            <button type="button" id ="reject-btn">Reject</button>
            <button type="submit" id="reject-btn-2" style="display:none;">Reject</button>
        </form>
    </div>
@endsection