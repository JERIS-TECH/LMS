@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4" style="background-color: #f0f8ff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-header bg-primary text-white">
                        Update Profile Information
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-4" style="background-color: #f0f8ff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-header bg-success text-white">
                        Update Password
                    </div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card" style="background-color: #f0f8ff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div class="card-header bg-danger text-white">
                        Delete Account Permanently
                    </div>
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
