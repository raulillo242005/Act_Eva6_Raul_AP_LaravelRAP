<!DOCTYPE html>
<html>
<head>
    <title>Posts RAP</title>
    <style>
        table { border-collapse: collapse; width: 90%; margin: auto; }
        th, td { border: 1px solid #999; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Lista de Posts RAP</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Título</th>
                <th>Contenido</th>
                <th>Excerpt</th>
                <th>Views</th>
                <th>Categoría</th>
                <th>Publicado</th>
                <th>Fecha de publicación</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->excerpt }}</td>
                <td>{{ $post->views }}</td>
                <td>{{ $post->category }}</td>
                <td>{{ $post->is_published ? 'Sí' : 'No' }}</td>
                <td>{{ $post->published_at ? $post->published_at->format('Y-m-d') : '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
