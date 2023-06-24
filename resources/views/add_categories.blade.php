<form method='post' action="{{route('insert.categories')}}">
    @csrf
        <label for="name">NAME:</label><br>
        <input type="name" name="categories_name" class="@error('name') is-invalid-custom @enderror">
            @error('categories_name')
                    <font color=red><div class="danger-class">{{ $message }}</div></font>
            @enderror
            <br>
            <input type="submit" value="submit">
</form>