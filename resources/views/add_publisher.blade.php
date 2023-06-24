
<form method='post' action="{{route('insert.publisher')}}">
    @csrf
        <label for="name">NAME:</label><br>
        <input type="name" name="publisher_name" class="@error('name') is-invalid-custom @enderror">
            @error('publisher_name')
                    <font color=red><div class="danger-class">{{ $message }}</div></font>
            @enderror
            <br>
        
            <input type="submit" value="submit">
</form>
