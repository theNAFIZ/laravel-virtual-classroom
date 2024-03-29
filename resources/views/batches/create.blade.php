@extends('layouts.app')
@section('content')
    <div class="account-form-inner">
        <div class="account-container">
            <div class="heading-bx left">
                <h2 class="title-head">Create New Batch</h2>
            </div>
            <form class="contact-bx" action="{{route('batch.store')}}" method="POST">
                @csrf
                <div class="row placeani">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <label for="title">Batch Title</label>
                                <input name="title" id="title" type="text" required class="form-control">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <label for="session">Session</label>
                                <input name="session" id="session" type="text" required class="form-control">
                                @error('session')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <label for="dept">Department</label>
                                <input name="dept" id="dept" type="text" required class="form-control">
                                @error('dept')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 m-b30">
                        <button name="submit" type="submit" value="Submit" class="btn button-md">Create Batch</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection