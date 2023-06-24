<x-app-layout>
    <html>
        <head>
        <style>
            table ,
            th,
            td {
                border: 6px solid green;
                border-collapse: collapse;
                padding: 20px;
               }
        </style>
        </head>
        <body>
            <table align='center'>
                <table style="width:100%">
                    <tr>
                        <th><a href="{{route('add.categories')}}"><font color="blue"size="30"><u>Add Categories</u></font></a></th>
                    </tr>
                    <tr>
                      <th>C_ID</th>
                      <th>C_NAME</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </tr>
                @foreach($categories as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->C_NAME}}</td>
                    <td><u><a href="{{ route('edit.categories',[$row->id]) }}">EDIT</a></u></td>
                    <td><u><a href="{{ route('delete.categories',[$row->id]) }}">DELETE</a></u></td>
                  </tr>
                @endforeach
                </table>
            </table>
        </body>
    </html>
</x-app-layout>
