<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyLink | Shortened URL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body text-center">
                        <h2 class="mb-4">🎉 Your Shortened URL</h2>
                        <input type="text" class="form-control mb-3 text-center" value="{{ route("short-url.get",$shortCode) }}" readonly>
                        <a href="{{ route("short-url.get",$shortCode) }}" target="_blank" class="btn btn-success w-100">Visit Link</a>
                        <a href="{{ route("short-url.index") }}" class="btn btn-secondary w-100 mt-2">Shorten Another</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
