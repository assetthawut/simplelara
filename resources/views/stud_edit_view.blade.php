<html>
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->testId }}</td>
            <td>{{ $user->testName }}</td>
            <td><a href = 'edit/{{ $user->testId }}'>Edit</a></td>
         </tr>
         @endforeach
      </table>
   
   </body>
</html>