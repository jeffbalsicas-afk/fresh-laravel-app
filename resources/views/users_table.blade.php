<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->age }}</td>
        <td>
            <a href="/users/edit/{{ $user->id }}">Edit</a>

            <form method="POST" action="/users/delete/{{ $user->id }}">
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>