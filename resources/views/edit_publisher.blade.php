<form method='post' action="{{ route('update.publisher') }}">
    @csrf

    <input type="text" name="publisher_id" value="{{ $edit_data->id }}" hidden>

    {{-- @dd($edit_data) --}}
    <label for="name">NAME:</label><br>


    <input type="text" name="publisher_name" value="{{ $edit_data->P_NAME }}">

    <br>

    <input type="submit" value="submit">


</form>
