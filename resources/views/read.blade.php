<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VERİ OKUMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h1>Data Listesi</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id </th>
            <th scope="col">İsim</th>
            <th scope="col">Altbaşlık</th>
            <th scope="col">İçerik</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pages as $page )
          <tr>
            <th scope="row">{{ $page ->id }}</th>
            <td>{{ $page ->title }}</td>
            <td>{{ $page ->subtitle }}</td>
            <td>{{ $page ->content }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>