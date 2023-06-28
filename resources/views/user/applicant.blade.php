@extends('app')
@section('content')
    <div>
    <form method="POST" action=" {{route('registerDrug')}} ">
        @csrf
        @if($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    <span>{{ $error }}</span>
                @endforeach
            </div>
        @endif
            <div>
                <h1>Drug Registration Form</h1>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="dose">Dose</label>
                <input type="number" name="dose" id="dose">
                @error('dose')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="type">Type</label>
                <input type="text" name="type" id="type">
                @error('type')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="registered_by">Applicant Name</label>
                <input type="text" name="registered_by" id="registered_by">
                @error('registered_by')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
@endsection