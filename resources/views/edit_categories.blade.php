<form method='post' action="{{ route('update.categories') }}">
    @csrf

    <input type="text" name="categories_id" value="{{ $edit_data->id }}" hidden>

    {{-- @dd($edit_data) --}}
    <label for="name">NAME:</label><br>


    <input type="text" name="categories_name" value="{{ $edit_data->C_NAME }}">

    <br>

    <input type="submit" value="submit">


</form>
