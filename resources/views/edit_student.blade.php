<form method='post' action="{{ route('update.student') }}">
    @csrf

    <input type="text" name="student_id" value="{{ $edit_data->id }}" hidden>

    {{-- @dd($edit_data) --}}
    <label for="name">NAME:</label><br>


    <input type="text" name="student_name" value="{{ $edit_data->S_NAME }}">

    <br>

    <input type="submit" value="submit">


</form>