@extends('layouts.app')

@section('content')
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
        <h1>📦 Novo Estoque</h1>
        <p>Preencha os dados do estoque para adicionar ao sistema</p>
    </section>

    <!-- Form Section -->
    <div class="container">
        <h2 class="section-title">📊 Cadastro de Estoque</h2>

        <div style="max-width: 600px; margin: 0 auto;">
            <form action="{{ route('funcionario.estoque.store') }}" method="POST" style="background: linear-gradient(160deg, rgba(220,245,255,0.85) 0%, rgba(200,240,220,0.75) 50%, rgba(180,230,210,0.65) 100%); border-radius: 24px; padding: 40px; border: 1.5px solid rgba(255,255,255,0.7); box-shadow: 0 8px 32px rgba(80,160,200,0.15), inset 0 2px 0 rgba(255,255,255,0.85);">
                @csrf

                <div style="margin-bottom: 24px;">
                    <label for="quantidade" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" required min="1" style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="data_entrada" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Data Entrada</label>
                    <input type="date" id="data_entrada" name="data_entrada" required style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="data_saida" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Data Saída (Opcional)</label>
                    <input type="date" id="data_saida" name="data_saida" style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="localizacao" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Localização</label>
                    <input type="text" id="localizacao" name="localizacao" required style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="lote" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Lote</label>
                    <input type="text" id="lote" name="lote" required style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="margin-bottom: 24px;">
                    <label for="validade" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Validade</label>
                    <input type="date" id="validade" name="validade" required style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="margin-bottom: 30px;">
                    <label for="preco_custo" style="display: block; font-weight: 700; color: #3a8a6a; margin-bottom: 8px; font-size: 14px; text-transform: uppercase; letter-spacing: 0.8px;">Preço Custo</label>
                    <input type="number" id="preco_custo" name="preco_custo" required min="0" step="0.01" style="width: 100%; padding: 12px 16px; border: 1.5px solid rgba(255,255,255,0.5); border-radius: 12px; font-size: 15px; background: linear-gradient(180deg, rgba(255,255,255,0.6) 0%, rgba(220,245,235,0.4) 100%); color: #1e5a44; font-weight: 600; box-shadow: inset 0 1px 0 rgba(255,255,255,0.7); transition: all 0.3s ease;" />
                </div>

                <div style="display: flex; gap: 16px;">
                    <button type="submit" class="glossy-btn" style="flex: 1; margin-top: 0; text-align: center;">✨ Adicionar Estoque</button>
                    <a href="{{ route('funcionario.estoque.index') }}" style="flex: 1; padding: 14px 36px; font-size: 16px; font-weight: 700; color: #fff; background: linear-gradient(180deg, #b0b0b0 0%, #7a7a7a 100%); border: 1.5px solid rgba(255,255,255,0.4); border-radius: 30px; text-decoration: none; box-shadow: 0 6px 20px rgba(122,122,122,0.3), inset 0 2px 0 rgba(255,255,255,0.4); text-align: center; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;">← Voltar</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>© {{ date('Y') }} Confecção Digital — Feito com 💚 e estilo Frutiger Aero</p>
    </footer>

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

        .bubble:nth-child(1) { width: 120px; height: 120px; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(173,216,230,0.3)); top: 60%; left: 5%; animation-duration: 14s; }
        .bubble:nth-child(2) { width: 80px; height: 80px; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(144,238,144,0.3)); top: 30%; left: 80%; animation-duration: 10s; animation-delay: 2s; }
        .bubble:nth-child(3) { width: 180px; height: 180px; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(173,216,230,0.2)); top: 70%; left: 60%; animation-duration: 16s; animation-delay: 4s; }
        .bubble:nth-child(4) { width: 60px; height: 60px; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(144,238,144,0.4)); top: 20%; left: 30%; animation-duration: 11s; animation-delay: 1s; }
        .bubble:nth-child(5) { width: 100px; height: 100px; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.9), rgba(173,216,230,0.3)); top: 80%; left: 40%; animation-duration: 13s; animation-delay: 3s; }

        @keyframes floatUp {
            0%, 100% { transform: translateY(0) translateX(0) scale(1); }
            25% { transform: translateY(-30px) translateX(10px) scale(1.05); }
            50% { transform: translateY(-15px) translateX(-10px) scale(0.98); }
            75% { transform: translateY(-40px) translateX(5px) scale(1.02); }
        }

        .light-flare { position: fixed; pointer-events: none; z-index: 0; }
        .light-flare-1 { width: 500px; height: 500px; top: -150px; right: -100px; background: radial-gradient(circle, rgba(255,255,255,0.6) 0%, rgba(173,225,255,0.15) 40%, transparent 70%); border-radius: 50%; }
        .light-flare-2 { width: 350px; height: 350px; bottom: -50px; left: -80px; background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, rgba(180,240,200,0.15) 40%, transparent 70%); border-radius: 50%; }
        .light-flare-3 { width: 200px; height: 200px; top: 40%; left: 50%; background: radial-gradient(circle, rgba(255,255,255,0.35) 0%, transparent 60%); border-radius: 50%; }

        header {
            position: relative;
            z-index: 10;
            background: linear-gradient(180deg, rgba(160,215,255,0.85) 0%, rgba(180,235,210,0.7) 100%);
            border-bottom: 2px solid rgba(255,255,255,0.6);
            box-shadow: 0 4px 20px rgba(100,180,220,0.25), inset 0 1px 0 rgba(255,255,255,0.8);
            backdrop-filter: blur(12px);
            padding: 18px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header .logo { font-size: 28px; font-weight: 800; color: #2a7a5a; text-shadow: 0 1px 2px rgba(255,255,255,0.8); letter-spacing: -0.5px; }
        header .logo span { color: #3a9ad9; }
        header nav a { text-decoration: none; color: #2a6a8a; font-weight: 700; font-size: 15px; margin-left: 30px; padding: 8px 18px; border-radius: 20px; background: linear-gradient(180deg, rgba(255,255,255,0.7) 0%, rgba(200,235,255,0.4) 100%); border: 1px solid rgba(255,255,255,0.6); transition: all 0.3s ease; }
        header nav a:hover { background: linear-gradient(180deg, rgba(255,255,255,0.9) 0%, rgba(180,240,210,0.5) 100%); transform: translateY(-1px); }

        .hero { position: relative; z-index: 5; text-align: center; padding: 60px 20px 40px; }
        .hero h1 { font-size: 42px; font-weight: 800; color: #1e6e50; text-shadow: 0 2px 4px rgba(255,255,255,0.8); margin-bottom: 12px; }
        .hero p { font-size: 18px; color: #3a8a6a; font-weight: 600; text-shadow: 0 1px 2px rgba(255,255,255,0.6); }

        .container { position: relative; z-index: 5; max-width: 1100px; margin: 0 auto 60px; padding: 0 20px; }
        .section-title { font-size: 24px; font-weight: 800; color: #2a7a5a; text-align: center; margin-bottom: 30px; text-shadow: 0 1px 3px rgba(255,255,255,0.7); }

        .glossy-btn { display: inline-block; padding: 14px 36px; font-size: 16px; font-weight: 700; color: #fff; background: linear-gradient(180deg, #7ecbf5 0%, #4aae8c 100%); border: 1.5px solid rgba(255,255,255,0.4); border-radius: 30px; cursor: pointer; text-decoration: none; box-shadow: 0 6px 20px rgba(74,174,140,0.3), inset 0 2px 0 rgba(255,255,255,0.4); transition: all 0.3s ease; position: relative; overflow: hidden; }
        .glossy-btn::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 50%; background: linear-gradient(180deg, rgba(255,255,255,0.3) 0%, transparent 100%); border-radius: 30px 30px 50% 50%; }
        .glossy-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 30px rgba(74,174,140,0.35), inset 0 2px 0 rgba(255,255,255,0.5); }

        .droplet { position: fixed; z-index: 1; pointer-events: none; }
        .droplet-1 { width: 18px; height: 24px; top: 15%; right: 12%; background: radial-gradient(ellipse at 40% 30%, rgba(255,255,255,0.8), rgba(150,210,255,0.3)); border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; animation: dropletFloat 8s ease-in-out infinite; }
        .droplet-2 { width: 14px; height: 18px; top: 50%; left: 8%; background: radial-gradient(ellipse at 40% 30%, rgba(255,255,255,0.8), rgba(150,230,180,0.3)); border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%; animation: dropletFloat 6s ease-in-out infinite; animation-delay: 2s; }

        @keyframes dropletFloat { 0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.6; } 50% { transform: translateY(-20px) rotate(5deg); opacity: 0.9; } }

        footer { position: relative; z-index: 5; text-align: center; padding: 30px 20px; background: linear-gradient(180deg, rgba(180,230,210,0.3) 0%, rgba(160,215,255,0.25) 100%); border-top: 1px solid rgba(255,255,255,0.5); color: #4a9a7a; font-weight: 600; font-size: 14px; }

        @media (max-width: 768px) {
            .hero h1 { font-size: 28px; }
            header { padding: 14px 20px; flex-direction: column; gap: 12px; }
        }
    </style>
@endsection