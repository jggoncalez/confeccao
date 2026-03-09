<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confecção - Clientes</title>
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

        /* Floating bubbles */
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

        /* Light flare effects */
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

        /* Header / Navbar */
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

        /* Hero Section */
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

        /* Glass container */
        .container {
            position: relative;
            z-index: 5;
            max-width: 1100px;
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

        /* Client cards grid */
        .clients-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }

        /* Client card - Skeuomorphic / Frutiger Aero style */
        .client-card {
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
            transition: all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .client-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(ellipse at 30% 20%, rgba(255,255,255,0.4) 0%, transparent 50%);
            pointer-events: none;
        }

        .client-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40%;
            background: linear-gradient(0deg, rgba(180,230,210,0.2) 0%, transparent 100%);
            pointer-events: none;
            border-radius: 0 0 24px 24px;
        }

        .client-card:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow:
                0 16px 48px rgba(80,160,200,0.22),
                0 4px 12px rgba(80,160,200,0.12),
                inset 0 2px 0 rgba(255,255,255,0.9),
                inset 0 -2px 4px rgba(100,180,160,0.1);
        }

        .client-card .card-icon {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            background: linear-gradient(145deg, #7ecbf5 0%, #5ab89a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 18px;
            box-shadow:
                0 4px 12px rgba(90,184,154,0.3),
                inset 0 1px 0 rgba(255,255,255,0.5),
                inset 0 -1px 2px rgba(50,130,100,0.2);
            position: relative;
            z-index: 1;
        }

        .client-card .card-icon svg {
            width: 26px;
            height: 26px;
            fill: white;
            filter: drop-shadow(0 1px 2px rgba(0,0,0,0.15));
        }

        .client-card .info-row {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        .client-card .info-row:last-child {
            margin-bottom: 0;
        }

        .client-card .info-label {
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #3a8a6a;
            min-width: 85px;
            text-shadow: 0 1px 1px rgba(255,255,255,0.5);
        }

        .client-card .info-value {
            font-size: 15px;
            font-weight: 700;
            color: #1e5a44;
            background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%);
            padding: 6px 14px;
            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.5);
            box-shadow:
                inset 0 1px 0 rgba(255,255,255,0.7),
                0 1px 3px rgba(80,160,140,0.08);
            flex: 1;
        }

        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.7) 30%, rgba(255,255,255,0.7) 70%, transparent 100%);
            margin: 14px 0;
            position: relative;
            z-index: 1;
        }

        /* Glossy button */
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

        /* Footer */
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

        /* Water droplet decoration */
        .droplet {
            position: fixed;
            z-index: 1;
            pointer-events: none;
        }
        .droplet-1 {
            width: 18px; height: 24px;
            top: 15%; right: 12%;
            background: radial-gradient(ellipse at 40% 30%, rgba(255,255,255,0.8), rgba(150,210,255,0.3));
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            box-shadow: 0 2px 6px rgba(100,180,220,0.2);
            animation: dropletFloat 8s ease-in-out infinite;
        }
        .droplet-2 {
            width: 14px; height: 18px;
            top: 50%; left: 8%;
            background: radial-gradient(ellipse at 40% 30%, rgba(255,255,255,0.8), rgba(150,230,180,0.3));
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            box-shadow: 0 2px 6px rgba(100,200,160,0.2);
            animation: dropletFloat 6s ease-in-out infinite;
            animation-delay: 2s;
        }

        @keyframes dropletFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.6; }
            50% { transform: translateY(-20px) rotate(5deg); opacity: 0.9; }
        }

        /* Empty state */
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
            .clients-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <!-- Floating bubbles -->
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>

    <!-- Light flares -->
    <div class="light-flare light-flare-1"></div>
    <div class="light-flare light-flare-2"></div>
    <div class="light-flare light-flare-3"></div>

    <!-- Water droplets -->
    <div class="droplet droplet-1"></div>
    <div class="droplet droplet-2"></div>

    <!-- Header -->
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

    <!-- Hero -->
    <section class="hero">
        <h1>🌿 Gestão de Clientes</h1>
        <p>Visualize todos os clientes cadastrados no sistema</p>
    </section>

    <!-- Clients Section -->
    <div class="container">
        <h2 class="section-title">📋 Clientes Cadastrados</h2>

        @if(isset($clientes) && count($clientes) > 0)
            <div class="clients-grid">
                @foreach ($clientes as $cliente)
                    <div class="client-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                            </svg>
                        </div>

                        <div class="info-row">
                            <span class="info-label">Nome</span>
                            <span class="info-value">{{ $cliente->nome }}</span>
                        </div>

                        <div class="divider"></div>

                        <div class="info-row">
                            <span class="info-label">CPF</span>
                            <span class="info-value">{{ $cliente->cpf }}</span>
                        </div>

                        <div class="divider"></div>

                        <div class="info-row">
                            <span class="info-label">Telefone</span>
                            <span class="info-value">{{ $cliente->telefone }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                Nenhum cliente cadastrado ainda. 🌱
            </div>
        @endif

        <div style="text-align: center;">
            <a href="{{ route('clientes.create') }}" class="glossy-btn">✨ Adicionar Novo Cliente</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© {{ date('Y') }} Confecção Digital — Feito com 💚 e estilo Frutiger Aero</p>
    </footer>

</body>
</html>