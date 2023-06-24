<style>{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    font-family: cursive;
  }

 input,
    textarea {
    width: 100%;
    padding: 5px;
    outline: none;
  }

  label {
    line-height: 1.9rem;
  }

  input[type="submit"] {
   transform: translate(2.2%);
   padding: 3px;
   margin-top: 0.6rem;
   font-family: cursive;
   font-weight: bold;
  }

 fieldset {
   padding: 20px 40px;
 }
 </style>
 <fielset>
<form method='post' action="{{route('insert.author')}}">
    @csrf
    <table>
    <tr>
        <td><label for="name">NAME:</label><br></td>
        <td><input type="name" name="author_name" class="@error('name') is-invalid-custom @enderror">
            @error('author_name')
                    <font color=red><div class="danger-class">{{ $message }}</div></font>
            @enderror
            <br></td>
            </tr>
            <tr>
           <td> <input type="submit" value="submit"></td>
</tr>      
</table>
</fieldset>     
</form>
