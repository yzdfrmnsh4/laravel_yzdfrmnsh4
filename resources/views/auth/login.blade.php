<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hospital Management System</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #e7e7e7e8;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .login-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            border: 0.5px solid rgb(207, 207, 207)
            
            ;
        }
        
        .login-title {
            color: #1f2937;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }
        
        .form-label {
            color: #374151;
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .form-control {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 14px;
        }
        
        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }
        
        .btn-primary {
            background-color: #2563eb;
            border-color: #2563eb;
            border-radius: 8px;
            padding: 12px;
            font-weight: 500;
            width: 100%;
        }
        
        .btn-primary:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
        }
        
        .forgot-password {
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
        }
        
        .forgot-password:hover {
            color: #1d4ed8;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Hospital Management System</h2>
            @if($errors->has('loginError'))
                <div class="alert alert-danger">
                    {{ $errors->first('loginError') }}
                </div>
            @endif

        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" 
                       class="form-control @error('username') is-invalid @enderror" 
                       id="username" 
                       name="username" 
                       value="{{ old('username') }}" 
                       required>
                @error('username')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       id="password" 
                       name="password" 
                       required>
                @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary mb-3">Login</button>
            
            <div class="text-center">
                <a href="" class="forgot-password">Forgot Password?</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
