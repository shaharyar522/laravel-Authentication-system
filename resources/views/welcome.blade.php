<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Authentication</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <style>
            body {
                font-family: 'Instrument Sans', sans-serif;
                background-color: #f4f4f4;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
                padding: 2rem;
                text-align: center;
            }
            
            h1 {
                font-size: 2rem;
                margin-bottom: 2rem;
                color: #1b1b18;
            }
            
            .button-container {
                display: flex;
                gap: 1rem;
                margin-top: 1rem;
            }
            
            .button {
                padding: 0.75rem 1.5rem;
                border-radius: 0.25rem;
                font-weight: 500;
                text-decoration: none;
                transition: all 0.2s ease;
            }
            
            .button-primary {
                background-color: #1b1b18;
                color: white;
                border: 1px solid #1b1b18;
            }
            
            .button-primary:hover {
                background-color: #000;
                border-color: #000;
            }
            
            .button-secondary {
                background-color: transparent;
                color: #1b1b18;
                border: 1px solid #1b1b18;
            }
            
            .button-secondary:hover {
                background-color: #f4f4f4;
            }
            
            @media (prefers-color-scheme: dark) {
                body {
                    background-color: #0a0a0a;
                }
                
                h1 {
                    color: #ededec;
                }
                
                .button-secondary {
                    color: #ededec;
                    border-color: #3E3E3A;
                }
                
                .button-secondary:hover {
                    background-color: #1a1a1a;
                }
            }
        </style>
    </head>
    <body>
        <h1>Laravel Authentication</h1>
        
        <div class="button-container">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="button button-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="button button-primary">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button button-secondary">
                            Register
                        </a>
                    @endif
                @endauth
            @endif
        </div>
    </body>
</html>