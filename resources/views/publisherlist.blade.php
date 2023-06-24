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
                        <th><a href="{{route('add.publisher')}}"><font color="blue"size="30"><u>Add Publisher</u></font></a></th>
                    </tr>
                    <tr>
                      <th>P_ID</th>
                      <th>P_NAME</th>
                      <th>EDIT</th>
                      <th>DELETE</th>
                    </tr>
                @foreach($publisher as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->P_NAME}}</td>
                    <td><u><a href="{{ route('edit.publisher',[$row->id]) }}">EDIT</a></u></td>
                    <td><u><a href="{{ route('delete.publisher',[$row->id]) }}">DELETE</a></u></td>
                </tr>
                @endforeach
                </table>
            </table>
        </body>
    </html>
</x-app-layout>
