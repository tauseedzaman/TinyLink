<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyLink | URL Shortener</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h2 class="mb-4">🔗 Simple URL Shortener</h2>
                        <form method="post" accept="{{ route("short-url.store")}}">
                            @csrf
                            <div class="mb-3">
                                <input type="url" class="form-control" name="url" placeholder="Enter your long URL" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Shorten URL</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
