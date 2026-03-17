<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro — Notiva</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/cadastro_usuario.css">
</head>

<body class="bg-[#d4e3f1] min-h-screen flex">

    <?php include '../src/views/nav.php'; ?>

    <div class="flex-1 flex flex-col">

        <?php include '../src/views/header.php'; ?>

        <!-- CENTRO -->
        <div class="particle" style="top:20%; left:35%; animation-delay:0s"></div>
        <div class="particle" style="top:40%; left:70%; animation-delay:1s"></div>
        <div class="particle" style="top:65%; left:20%; animation-delay:2s"></div>
        <div class="particle" style="top:80%; left:50%; animation-delay:3s"></div>

        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div class="bubble"></div>
            <div class="bubble delay-1"></div>
            <div class="bubble delay-2"></div>
            <div class="bubble delay-3"></div>
            <div class="bubble delay-4"></div>
        </div>

        <main class="flex-1 flex items-center justify-center px-10 py-6">

            <div class="w-full max-w-5xl bg-white rounded-2xl shadow-xl flex overflow-hidden fade-slide animated-border hover-animate transition duration-500">

                <!-- LADO ESQUERDO -->
                <div class="w-1/2 hidden md:flex relative">
                    <div class="gloss"></div>
                    <img src="img/3348d1c8450044b886cf8d38bb873a1a.jpg"
                        class="w-full h-full object-cover parallax-img">
                    <div class="absolute inset-0 bg-[#CB798B]/20"></div>
                </div>

                <!-- LADO DIREITO (FORM) -->
                <div class="w-full md:w-1/2 p-12 glass">
                    

                    <h2 class="text-4xl font-bold text-[#1e3a8a] mb-6">Cadastrar</h2>

                    <!-- ALERTA DE LOGIN FALHOU -->
                    <?php if (isset($_GET['erro'])): ?>
                        <div id="alertaErro" class="p-3 mb-4 rounded-lg bg-red-100 text-red-700 font-semibold animate-pulse">
                            Email ou senha incorretos!
                        </div>
                    <?php endif; ?>

                    <form action="processa_cadastro_usuario.php" method="POST" class="space-y-6">

                        <!-- EMAIL -->
                        <div class="input-group">
                            <input type="nome_user" name="nome_user" placeholder=" " required
                                class="w-full p-3 bg-[#eef5ff] border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <label class="floating-label">Nome</label>
                        </div>

                        <div class="input-group">
                            <input type="user_user" name="user_user" placeholder=" " required
                                class="w-full p-3 bg-[#eef5ff] border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <label class="floating-label">Nome de Usuário</label>
                        </div>

                        <div class="input-group">
                            <input type="email" name="email" placeholder=" " required
                                class="w-full p-3 bg-[#eef5ff] border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <label class="floating-label">Email</label>
                        </div>

                        <!-- SENHA -->
                        <div class="input-group">
                            <input id="senha" type="password" name="senha" placeholder=" " required
                                class="w-full p-3 pr-10 bg-[#eef5ff] border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <label class="floating-label">Senha</label>

                            <i id="toggleSenha"
                                class="fa-regular fa-eye absolute right-3 top-4 text-gray-600 cursor-pointer"></i>
                        </div>

                         <div class="input-group">
                            <input id="senha" type="password" name="senha" placeholder=" " required
                                class="w-full p-3 pr-10 bg-[#eef5ff] border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <label class="floating-label">Confirmar Senha</label>

                            <i id="toggleSenha"
                                class="fa-regular fa-eye absolute right-3 top-4 text-gray-600 cursor-pointer"></i>
                        </div>

                        <!-- BOTÃO -->
                        <button
                            id="btnLogin"
                            class="w-full py-3 rounded-lg text-white font-semibold text-lg
           bg-gradient-to-r from-[#1e40af] via-[#2563eb] to-[#60a5fa]
           shadow-lg transition duration-300
           hover:shadow-[0_0_20px_#60a5fa]
           hover:scale-105 active:scale-95 relative overflow-hidden">
                            <span class="texto-btn">Entrar</span>
                            <span class="loader hidden"></span>
                        </button>


                    </form>
                </div>
            </div>
        </main>

        <?php include '../src/views/footer.php'; ?>

    </div>

    <script>
        /* Mostrar / esconder senha */
        const senhaInput = document.getElementById("senha");
        const toggleSenha = document.getElementById("toggleSenha");

        toggleSenha.addEventListener("click", () => {
            senhaInput.type = senhaInput.type === "password" ? "text" : "password";
            toggleSenha.classList.toggle("fa-eye");
            toggleSenha.classList.toggle("fa-eye-slash");
        });

        

        btnLogin.addEventListener("click", () => {
            document.querySelector(".texto-btn").classList.add("hidden");
            document.querySelector(".loader").classList.remove("hidden");
        });


        document.getElementById("btnLogin").addEventListener("click", function(e) {
            const btn = this;

            let splash = document.createElement("span");
            splash.className = "splash";
            splash.style.left = e.offsetX + "px";
            splash.style.top = e.offsetY + "px";
            btn.appendChild(splash);

            setTimeout(() => splash.remove(), 600);
        });


        /* Sumir alerta suave */
        const alerta = document.getElementById('alertaErro');
        if (alerta) {
            setTimeout(() => {
                alerta.style.opacity = '0';
                alerta.style.transition = '0.8s';
            }, 2500);
        }
    </script>

</body>

</html>