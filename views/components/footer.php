<footer class="main-footer">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <img src="assets/logo-gp.png" alt="Grupo Pimentel" height="80">
                <p class="footer-slogan">Para o Grupo Pimentel, sucesso empresarial e impacto social caminham juntos.</p>
            </div>

            <div class="col-lg-2 col-md-6">
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Trabalhe conosco</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <ul class="footer-links">
                    <li><a href="#">Farmácias Zé do Bairro</a></li>
                    <li><a href="#">Promedh</a></li>
                    <li><a href="#">DPA Distribuidora</a></li>
                </ul>
                <p class="footer-address mt-4">R. Amapá, 205 - Siqueira Campos, Aracaju - SE, 49075-050</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <ul class="footer-links">
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Whatsapp</a></li>
                    <li><a href="#">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom text-center py-4">
        <div class="container">
            <hr class="footer-divider">
            <p class="mb-0">Todos os direitos reservados <?= date('Y') ?></p>
        </div>
    </div>
</footer>

<style>
    .main-footer {
    background-color: #002350; /* Azul escuro profundo */
    color: #ffffff;
    font-family: sans-serif;
}

.footer-logo {
    max-height: 80px;
    filter: brightness(0) invert(1); /* Garante que a logo fique branca */
}

.footer-slogan {
    font-size: 1.1rem;
    line-height: 1.4;
    max-width: 300px;
    opacity: 0.9;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 12px;
}

.footer-links a {
    color: #ffffff;
    text-decoration: none;
    font-size: 1.1rem;
    transition: opacity 0.3s;
}

.footer-links a:hover {
    opacity: 0.7;
}

.footer-address {
    font-size: 1.1rem;
    opacity: 0.9;
}

.footer-divider {
    border-top: 1px solid rgba(255, 255, 255, 0.3);
    margin-bottom: 20px;
}

.footer-bottom p {
    font-size: 1rem;
    opacity: 0.8;
}

/* Ajustes Responsivos */
@media (max-width: 991px) {
    .main-footer {
        text-align: center;
    }
    .footer-slogan {
        margin: 0 auto 20px;
    }
}
</style>