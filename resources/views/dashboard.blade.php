<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .logo {
            font-size: 20px;
            font-weight: bold;
        }
        
        .logout-btn {
            background-color: #45a049;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .logout-btn:hover {
            background-color: #3d8b40;
        }
        
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }
        
        .welcome-section {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .stat-card {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .stat-card h3 {
            color: #666;
            margin-top: 0;
        }
        
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">My Dashboard</div>
        <a  href="{{route('logout')}}" class="logout-btn">Logout</a>
    </div>
    
    <div class="container">
        <div class="welcome-section">
            <h1>Welcome  {{ Auth::user()->name}}!</h1>
           
            <p>Here's what's happening with your account today.</p>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <h3>Total Projects</h3>
                <div class="stat-value">12</div>
                <p>5 completed</p>
            </div>
            
            <div class="stat-card">
                <h3>Messages</h3>
                <div class="stat-value">8</div>
                <p>3 unread</p>
            </div>
            
            <div class="stat-card">
                <h3>Tasks</h3>
                <div class="stat-value">15</div>
                <p>7 pending</p>
            </div>
            
            <div class="stat-card">
                <h3>Notifications</h3>
                <div class="stat-value">3</div>
                <p>All read</p>
            </div>
        </div>
    </div>
</body>
</html>