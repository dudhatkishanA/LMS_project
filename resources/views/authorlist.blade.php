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
                        <th><a href="{{route('add.author')}}"><font color="blue"size="30"><u>Add Author</u></font></a></th>
                    </tr>
                    <tr>
                       <th>A_ID</th>
                       <th>A_NAME</th>
                       <th>EDIT</th>
                       <th>DELETE</th>
                    </tr>
                @foreach($author as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->A_NAME}}</td>
                    <td><u><a href="{{ route('edit.author',[$row->id]) }}">EDIT</a></u></td>
                    <td><u><a href="{{ route('delete.author',[$row->id]) }}">DELETE</a></u></td>
                </tr>
                @endforeach
                 </table>
            </table>
        </body>
    </html>        
</x-app-layout>