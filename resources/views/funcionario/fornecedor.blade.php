<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confecção - Fornecedores</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            background: linear-gradient(180deg, #b3e0ff 0%, #d4f5e0 40%, #e8fdf1 70%, #ffffff 100%);
            overflow-x: hidden;
            position: relative;
        }

        .bubble {
            position: fixed;
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
            opacity: 0.35;
            animation: floatUp 12s ease-in-out infinite;
        }

        .bubble:nth-child(1) {
            width: 120px; height: 120px;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(173,216,230,0.3));
            top: 60%; left: 5%;
            animation-duration: 14s;
            animation-delay: 0s;
        }
        .bubble:nth-child(2) {
            width: 80px; height: 80px;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(144,238,144,0.3));
            top: 30%; left: 80%;
            animation-duration: 10s;
            animation-delay: 2s;
        }
        .bubble:nth-child(3) {
            width: 180px; height: 180px;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(173,216,230,0.2));
            top: 70%; left: 60%;
            animation-duration: 16s;
            animation-delay: 4s;
        }
        .bubble:nth-child(4) {
            width: 60px; height: 60px;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(144,238,144,0.4));
            top: 20%; left: 30%;
            animation-duration: 11s;
            animation-delay: 1s;
        }
        .bubble:nth-child(5) {
            width: 100px; height: 100px;
            background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(173,216,230,0.3));
            top: 80%; left: 40%;
            animation-duration: 13s;
            animation-delay: 3s;
        }

        @keyframes floatUp {
            0%, 100% { transform: translateY(0) translateX(0) scale(1); }
            25% { transform: translateY(-30px) translateX(10px) scale(1.05); }
            50% { transform: translateY(-15px) translateX(-10px) scale(0.98); }
            75% { transform: translateY(-40px) translateX(5px) scale(1.02); }
        }

        .light-flare {
            position: fixed;
            pointer-events: none;
            z-index: 0;
        }
        .light-flare-1 {
            width: 500px; height: 500px;
            top: -150px; right: -100px;
            background: radial-gradient(circle, rgba(255,255,255,0.6) 0%, rgba(173,225,255,0.15) 40%, transparent 70%);
            border-radius: 50%;
        }
        .light-flare-2 {
            width: 350px; height: 350px;
            bottom: -50px; left: -80px;
            background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, rgba(180,240,200,0.15) 40%, transparent 70%);
            border-radius: 50%;
        }
        .light-flare-3 {
            width: 200px; height: 200px;
            top: 40%; left: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.35) 0%, transparent 60%);
            border-radius: 50%;
        }

        header {
            position: relative;
            z-index: 10;
            background: linear-gradient(180deg, rgba(160,215,255,0.85) 0%, rgba(180,235,210,0.7) 100%);
            border-bottom: 2px solid rgba(255,255,255,0.6);
            box-shadow:
                0 4px 20px rgba(100,180,220,0.25),
                inset 0 1px 0 rgba(255,255,255,0.8),
                inset 0 -1px 0 rgba(100,180,200,0.15);
            backdrop-filter: blur(12px);
            padding: 18px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo {
            font-size: 28px;
            font-weight: 800;
            color: #2a7a5a;
            text-shadow: 0 1px 2px rgba(255,255,255,0.8), 0 2px 8px rgba(42,122,90,0.15);
            letter-spacing: -0.5px;
        }

        header .logo span {
            color: #3a9ad9;
        }

        header nav a {
            text-decoration: none;
            color: #2a6a8a;
            font-weight: 700;
            font-size: 15px;
            margin-left: 30px;
            padding: 8px 18px;
            border-radius: 20px;
            background: linear-gradient(180deg, rgba(255,255,255,0.7) 0%, rgba(200,235,255,0.4) 100%);
            border: 1px solid rgba(255,255,255,0.6);
            box-shadow:
                0 2px 8px rgba(100,180,220,0.15),
                inset 0 1px 0 rgba(255,255,255,0.9);
            transition: all 0.3s ease;
        }

        header nav a:hover {
            background: linear-gradient(180deg, rgba(255,255,255,0.9) 0%, rgba(180,240,210,0.5) 100%);
            box-shadow:
                0 4px 15px rgba(100,200,180,0.25),
                inset 0 1px 0 rgba(255,255,255,1);
            transform: translateY(-1px);
        }

        .hero {
            position: relative;
            z-index: 5;
            text-align: center;
            padding: 60px 20px 40px;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: 800;
            color: #1e6e50;
            text-shadow: 0 2px 4px rgba(255,255,255,0.8), 0 4px 15px rgba(30,110,80,0.1);
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 18px;
            color: #3a8a6a;
            font-weight: 600;
            text-shadow: 0 1px 2px rgba(255,255,255,0.6);
        }

        .container {
            position: relative;
            z-index: 5;
            max-width: 1200px;
            margin: 0 auto 60px;
            padding: 0 20px;
        }

        .section-title {
            font-size: 24px;
            font-weight: 800;
            color: #2a7a5a;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 0 1px 3px rgba(255,255,255,0.7);
        }

        .orders-table-wrapper {
            background: linear-gradient(160deg, rgba(220,245,255,0.85) 0%, rgba(200,240,220,0.75) 50%, rgba(180,230,210,0.65) 100%);
            border-radius: 24px;
            padding: 28px 26px;
            border: 1.5px solid rgba(255,255,255,0.7);
            box-shadow:
                0 8px 32px rgba(80,160,200,0.15),
                0 2px 8px rgba(80,160,200,0.1),
                inset 0 2px 0 rgba(255,255,255,0.85),
                inset 0 -2px 4px rgba(100,180,160,0.08);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .orders-table-wrapper::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(ellipse at 30% 20%, rgba(255,255,255,0.4) 0%, transparent 50%);
            pointer-events: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            position: relative;
            z-index: 1;
        }

        th {
            text-align: left;
            padding: 16px 12px;
            background: linear-gradient(180deg, rgba(255,255,255,0.5) 0%, rgba(200,230,220,0.3) 100%);
            border-bottom: 2px solid rgba(255,255,255,0.6);
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #3a8a6a;
            text-shadow: 0 1px 1px rgba(255,255,255,0.5);
        }

        td {
            padding: 14px 12px;
            border-bottom: 1px solid rgba(255,255,255,0.4);
            font-size: 14px;
            color: #1e5a44;
            font-weight: 600;
        }

        tbody tr {
            transition: all 0.3s ease;
        }

        tbody tr:hover {
            background: rgba(255,255,255,0.4);
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        .glossy-btn {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 36px;
            font-size: 16px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(180deg, #7ecbf5 0%, #4aae8c 100%);
            border: 1.5px solid rgba(255,255,255,0.4);
            border-radius: 30px;
            cursor: pointer;
            text-decoration: none;
            box-shadow:
                0 6px 20px rgba(74,174,140,0.3),
                inset 0 2px 0 rgba(255,255,255,0.4),
                inset 0 -2px 4px rgba(40,120,90,0.2);
            text-shadow: 0 1px 3px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .glossy-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(180deg, rgba(255,255,255,0.3) 0%, transparent 100%);
            border-radius: 30px 30px 50% 50%;
        }

        .glossy-btn:hover {
            transform: translateY(-2px);
            box-shadow:
                0 10px 30px rgba(74,174,140,0.35),
                inset 0 2px 0 rgba(255,255,255,0.5),
                inset 0 -2px 4px rgba(40,120,90,0.2);
        }

        footer {
            position: relative;
            z-index: 5;
            text-align: center;
            padding: 30px 20px;
            background: linear-gradient(180deg, rgba(180,230,210,0.3) 0%, rgba(160,215,255,0.25) 100%);
            border-top: 1px solid rgba(255,255,255,0.5);
            color: #4a9a7a;
            font-weight: 600;
            font-size: 14px;
        }

        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #5aaa8a;
            font-size: 18px;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 28px; }
            header { padding: 14px 20px; flex-direction: column; gap: 12px; }
            header nav a { margin-left: 10px; font-size: 13px; padding: 6px 14px; }
            .orders-table-wrapper { overflow-x: auto; }
        }
    </style>
</head>
<body>

    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <div class="light-flare light-flare-1"></div>
    <div class="light-flare light-flare-2"></div>
    <div class="light-flare light-flare-3"></div>

    <header>
        <div class="logo"><span>✦</span> Confecção <span>Digital</span></div>
        <nav>
            <a href="/funcionario/estoque">Estoque</a>
            <a href="/funcionario/fornecedor">Fornecedor</a>
            <a href="/clientes">Clientes</a>
            <a href="/funcionario/pedidos">Pedidos</a>
            <a href="/funcionario/produtos">Produtos</a>
        </nav>
    </header>

    <section class="hero">
        <h1>🏢 Gestão de Fornecedores</h1>
        <p>Visualize e gerencie todos os fornecedores cadastrados</p>
    </section>

    <div class="container">
        <h2 class="section-title">📋 Fornecedores Cadastrados</h2>

        @if(isset($fornecedores) && count($fornecedores) > 0)
            <div class="orders-table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CNPJ</th>
                            <th>Endereço</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>CEP</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fornecedores as $fornecedor)
                            <tr>
                                <td>{{ $fornecedor->nome }}</td>
                                <td>{{ $fornecedor->email }}</td>
                                <td>{{ $fornecedor->telefone }}</td>
                                <td>{{ $fornecedor->cnpj }}</td>
                                <td>{{ $fornecedor->endereco }}</td>
                                <td>{{ $fornecedor->cidade }}</td>
                                <td>{{ $fornecedor->estado }}</td>
                                <td>{{ $fornecedor->cep }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="empty-state">
                Nenhum fornecedor cadastrado ainda. 🌱
            </div>
        @endif

        <div style="text-align: center;">
            <a href="#" class="glossy-btn">✨ Adicionar Novo Fornecedor</a>
        </div>
    </div>

    <footer>
        <p>© {{ date('Y') }} Confecção Digital — Feito com 💚 e estilo Frutiger Aero</p>
    </footer>

</body>
</html>
