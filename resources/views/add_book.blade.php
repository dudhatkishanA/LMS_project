<form method='post' action="{{route('insert.book')}}">
    @csrf       
        <label for="name">NAME:</label><br>
        <input type="name" name="book_name" class="@error('name') is-invalid-custom @enderror">
            @error('book_name')
                    <font color=red><div class="danger-class">{{ $message }}</div></font>
            @enderror
            <br>
            <input type="submit" value="submit">
</form>