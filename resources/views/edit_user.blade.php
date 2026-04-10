<form method="POST" action="/users/update/{{ $user->id }}">
    @csrf

    <input type="text" name="first_name" value="{{ $user->first_name }}">
    <input type="text" name="last_name" value="{{ $user->last_name }}">
    <input type="text" name="middle_name" value="{{ $user->middle_name }}">
    <input type="text" name="nickname" value="{{ $user->nickname }}">
    <input type="email" name="email" value="{{ $user->email }}">
    <input type="number" name="age" value="{{ $user->age }}">
    <textarea name="address">{{ $user->address }}</textarea>
    <input type="text" name="contact_number" value="{{ $user->contact_number }}">

    <button type="submit">Update</button>
</form>