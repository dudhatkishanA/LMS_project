<form method='post' action="{{route('insert.bookissue')}}">
    @csrf       
        <label for="name">NAME:</label><br>
        <input type="name" name="bookissue_name" class="@error('name') is-invalid-custom @enderror">
            @error('bookissue_name')
                    <font color=red><div class="danger-class">{{ $message }}</div></font>
            @enderror
            <br>
            <input type="submit" value="submit">
</form>