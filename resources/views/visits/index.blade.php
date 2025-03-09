@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Visit Statistics</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Visits</h5>
                    <h2>{{ $totalVisits }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Unique Visitors</h5>
                    <h2>{{ $uniqueIPs }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <h3>Popular Pages</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Page</th>
                    <th>Visits</th>
                </tr>
            </thead>
            <tbody>
                @foreach($popularPages as $page)
                <tr>
                    <td>{{ $page->page }}</td>
                    <td>{{ $page->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <h3>Recent Visits</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Page</th>
                    <th>IP</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($visits as $visit)
                <tr>
                    <td>{{ $visit->page }}</td>
                    <td>{{ $visit->ip }}</td>
                    <td>{{ $visit->created_at->format('M d, Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $visits->links() }}
    </div>
</div>
@endsection
