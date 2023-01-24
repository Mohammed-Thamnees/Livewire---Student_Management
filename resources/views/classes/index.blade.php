@extends('layouts.app')
@section('content')

<button class="btn btn-sm btn-primary" onclick="Livewire.emit('openModal', 'modals.class-create-modal')">Add Class</button>

<livewire:tables.classes-table>

@endsection