@extends('layouts.backend')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Our Managements</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{ route('meetings_events.create') }}" type="button" class="btn btn-sm btn-outline-secondary">
                    <span data-feather="plus"></span>
                    Add new Meeting & Event
                </a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Property Label</th>
                        <th>Feature Image</th>
                        <th>Price(BDT)</th>
                        <th>Price(USD)</th>
                        <th><i data-feather="tool"></i></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($meetings_events as $k => $room)
                        <tr>
                            <td>{{ $k + 1 }}</td>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->property_label }}</td>
                            <td><img src="{{ asset($room->feature_image) }}" height="80" width="100" /></td>
                            <td>{{ $room->rate_in_bdt }}</td>
                            <td>{{ $room->rate_in_usd }}</td>
                            <td>
                                <a class="btn btn-primary" style="float: left"
                                    href="{{ route('meetings_events.show', $room->id) }}">View</a>
                                <a class="btn btn-secondary" style="float: left"
                                    href="{{ route('meetings_events.edit', $room->id) }}">Edit</a>
                                <form class="form-inline ml-2" method="POST" style="float: left;"
                                    action="{{ route('meetings_events.destroy', $room->id) }}">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return deleteRoom();" type="submit"
                                        class="btn form-inline btn-danger">Delete</button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if (!$meetings_events->count())
                        <tr>
                            <td colspan="6"> Nothing found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            {!! $meetings_events->links() !!}
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
