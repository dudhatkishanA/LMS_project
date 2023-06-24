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
                    <th><a href="{{route('add.student')}}"><font color="blue"size="30"><u>Add Student</u></font></a></th>
                </tr>
                <tr>
                    <th>S_ID</th>
                    <th>S_NAME</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                @foreach($student as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->S_NAME}}</td>
                    <td><u><a href="{{ route('edit.student',[$row->id]) }}">EDIT</a></u></td>
                    <td><u><a href="{{ route('delete.student',[$row->id]) }}">DELETE</a></u></td>
                  </tr>
                @endforeach
               </table>
            </table>
        </body>
    </html>
</x-app-layout>