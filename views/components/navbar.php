<nav id="mainNavbar" class="navbar navbar-expand-lg main-nav py-3 fixed-top navbar-hidden">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="assets/logo-gp.png" alt="Grupo Pimentel" height="80">
        </a>

        <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold px-4" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-4" href="ze-do-bairro">Zé do Bairro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-4" href="#">Ultra Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold px-4" href="#">DPA & Promedh</a>
                </li>
            </ul>

            <div class="nav-social d-flex gap-3">
                <a href="#" class="text-white fs-4"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white fs-4"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white fs-4"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* Estilo da Navbar */
    /* Estado inicial: Escondida acima da tela */
.navbar-hidden {
    transform: translateY(-100%);
    transition: transform 0.4s ease-in-out, background-color 0.3s;
    opacity: 0;
}

/* Estado ativo: Quando o usuário rolar */
.navbar-visible {
    transform: translateY(0);
    opacity: 1;
    background-color: rgba(0, 35, 80, 0.95); /* Azul do grupo com leve transparência */
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}
.main-nav {
    background-color: #002350; /* Mesmo azul do footer */
}

.main-nav .nav-link {
    color: #ffffff !important;
    font-size: 1.2rem;
    transition: opacity 0.3s;
}

.main-nav .nav-link:hover {
    opacity: 0.7;
}

/* Ajuste dos ícones sociais */
.nav-social a {
    transition: transform 0.3s ease;
    display: inline-block;
}

.nav-social a:hover {
    transform: scale(1.2);
}

/* Ícone do menu mobile (hamburguer) em branco */
.navbar-toggler-icon {
    filter: invert(1);
}

/* Estado Base da Navbar */
#mainNavbar {
    /* Começa escondida e transparente */
    transform: translateY(-100%);
    opacity: 0;
    pointer-events: none; /* Evita que o usuário clique em links invisíveis */
    
    /* Cubic-bezier dá aquele efeito de 'parada suave' (spring/decelerate) */
    transition: 
        transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), 
        opacity 0.6s ease,
        background-color 0.3s ease;
}

/* Quando visível */
#mainNavbar.navbar-visible {
    transform: translateY(0);
    opacity: 1;
    pointer-events: auto; /* Reativa os cliques */
    background-color: rgba(0, 35, 80, 0.95);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

/* Estilo extra: Blur no fundo (opcional, fica muito elegante) */
@supports (backdrop-filter: blur(10px)) {
    .navbar-visible {
        backdrop-filter: blur(10px);
        background-color: rgba(0, 35, 80, 0.8) !important;
    }
}

@media (max-width: 991px) {
    .nav-social {
        justify-content: center;
        margin-top: 20px;
    }
    .navbar-nav {
        text-align: center;
        padding: 20px 0;
    }
}
</style>

<script>
    let lastScrollY = window.scrollY;
    const navbar = document.getElementById("mainNavbar");

    window.addEventListener('scroll', () => {
        // Ativa a navbar apenas após rolar 150px (ajustável)
        if (window.scrollY > 150) {
            navbar.classList.add("navbar-visible");
        } else {
            navbar.classList.remove("navbar-visible");
        }
        
        lastScrollY = window.scrollY;
    }, { passive: true }); // 'passive' melhora a performance do scroll no mobile
</script>