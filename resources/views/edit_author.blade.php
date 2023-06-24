<form method='post' action="{{ route('update.author') }}">
    @csrf

    <input type="text" name="author_id" value="{{ $edit_data->id }}" hidden>

    {{-- @dd($edit_data) --}}
    <label for="name">NAME:</label><br>


    <input type="text" name="author_name" value="{{ $edit_data->A_NAME }}">

    <br>

    <input type="submit" value="submit">


</form>
