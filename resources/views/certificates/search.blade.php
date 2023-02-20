

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search Results</div>

                    <div class="card-body">
                        @if($certificates->count() > 0)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Certificate Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($certificates as $certificate)
                                        <tr>
                                            <td>{{ $certificate->name }}</td>
                                            <td><a href="{{ Storage::url($certificate->certificate_image) }}">Download</a></td>
                                            <td><a href="{{ route('certificates.index', $certificate->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-warning">No results found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

