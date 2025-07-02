@extends('layouts.admin.layout')
@section('title')
<title>Blogs | Best Auto Repair & Tire</title>
@endsection

@section('content')
<div class="card bg-black text-light border-primary shadow-sm mb-4">
<div class="card-header border-bottom border-primary py-3">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
      <h4 class="mb-0">
        <i class="fas fa-blog me-2 text-primary"></i>
        Blogs Management
      </h4>
      <button class="btn btn-primary btn-sm d-flex align-items-center">
        <i class="fas fa-plus me-2"></i> Add Blog
      </button>
    </div>
</div>
  <div class="card-body">
  </div>
</div>

@endsection
@push('scripts')
@endpush