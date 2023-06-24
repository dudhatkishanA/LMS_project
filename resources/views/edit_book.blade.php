<form method='post' action="{{ route('update.book') }}">
    @csrf

    <input type="text" name="book_id" value="{{ $edit_data->id }}" hidden>

    {{-- @dd($edit_data) --}}
    <label for="name">NAME:</label><br>


    <input type="text" name="book_name" value="{{ $edit_data->B_NAME }}">

    <br>

    <input type="submit" value="submit">


</form>