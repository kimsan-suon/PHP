<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
    <!-- Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5">
    <h1 class="mb-4">Post List</h1>

    <!-- Check if there are any posts -->
    @if($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <div class="row">
            <!-- Loop through each post and display its title, description, and body -->
            @foreach($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->description }}</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            Created at: {{ $post->created_at->format('Y-m-d') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
</body>

</html>
