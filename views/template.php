<!DOCTYPE html>
<html>
<head>
    <title>Escritório de Advogados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #34577c;
            color: white;
            text-align: center;
            padding: 50px;
        }
        .main {
            margin: 50px;
            background-color: white;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .footer {
            background-color: #34577c;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input[type="text"], input[type="date"], input[type="time"] {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #34577c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        input[type="submit"]:hover {
            background-color: #1d3557;
        }
        @media (max-width: 600px) {
            .main {
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1><i class="fas fa-balance-scale"></i> Bem-vindo ao nosso Escritório de Advogados</h1>
        <p>Comprometidos em fornecer o melhor serviço jurídico possível.</p>
    </div>
    <div class="main">
        <h2><i class="fas fa-calendar-alt"></i> Agende uma Consulta</h2>
        <form action="/submit_appointment" method="post">
            <label for="name"><i class="fas fa-user"></i> Nome:</label>
            <input type="text" id="name" name="name">
            <label for="date"><i class="fas fa-calendar-day"></i> Data:</label>
            <input type="date" id="date" name="date">
            <label for="time"><i class="fas fa-clock"></i> Hora:</label>
            <input type="time" id="time" name="time">
            <input type="submit" value="Agendar">
        </form>
    </div>
    <div class="footer">
        <p><i class="fas fa-gavel"></i> Escritório de Advogados © 2023</p>
    </div>
</body>
</html>
