@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $title }}</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                {{-- <a href="{{ route('roomssuits.create') }}" type="button"
                    class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus"></span>
                    Add new room
                </a> --}}
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Contact Date</th>
                        <th><i data-feather="tool"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $k => $contact)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at }}</td>
                        </tr>
                    @endforeach
                    @if (!$contacts->count())
                        <tr>
                            <td colspan="6"> Nothing found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {!! $contacts->links() !!}
        </div>
    </main>
@endsection

@section('head')

@endsection

@section('foot')

@endsection
<script>
    function deleteRoom() {
        if (!confirm("Are You Sure to delete this"))
            event.preventDefault();
    }

</script>
