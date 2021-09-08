<html>
<body>
<table>
  <tr>
    <th>Sr No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Date Of Birth</th>
  </tr>
  @foreach($employee ?? '' as $data)
  <tr>
      <th scope="row">{{ $data->id }}</th>
      <td>{{ $data->name }}</td>
      <td>{{ $data->email }}</td>
      <td>{{ $data->phone_number }}</td>
      <td>{{ $data->dob }}</td>
  </tr>
  @endforeach
</table>
</body>
</html>
