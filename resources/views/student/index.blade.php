@extends('layouts.app')
@section('content')
    <div>
        <livewire:studentShow>
    </div>
@endsection

@section('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#student_add_modal').modal('hide');
        $('#student_edit_modal').modal('hide');
    })
    </script>
@endsection
