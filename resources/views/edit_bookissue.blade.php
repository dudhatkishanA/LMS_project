<form method='post' action="{{ route('update.bookissue') }}">
    @csrf

    <input type="text" name="student_id" value="{{ $edit_data->id }}" hidden>

    {{-- @dd($edit_data) --}}
    <label for="name">NAME:</label><br>


    <input type="text" name="bookissue_name" value="{{ $edit_data->B_NAME }}">

    <br>

    <input type="submit" value="submit">


</form>