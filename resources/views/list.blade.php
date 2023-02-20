
<h1>User List</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Certificate</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>
                    @if ($user->certificate)
                        <a href="{{ asset('storage/certificates/'.$user->certificate->filename) }}">Download</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
