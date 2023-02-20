


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Certificates</div>

                    <div class="card-body">
                        <a href="{{ route('certificates.create') }}" class="btn btn-primary mb-3">Add Certificate</a>

                        <form method="get" action="{{ route('certificates.search') }}" class="form-inline mb-3">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" name="name" id="name" class="form-control mr-2" placeholder="Enter name" value="{{ old('name') }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>

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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-warning">No certificates found.</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

