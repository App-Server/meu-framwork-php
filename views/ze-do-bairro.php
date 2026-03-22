<?php include 'components/navbar.php'; ?>


<section class="ze-header pt-5 pb-4 text-center">
    <div class="container">
        <img src="/assets/logo-ze.png" alt="Logo Zé do Bairro" class="img-fluid mb-4" style="max-height: 80px;">
    </div>
</section>
<br>
<h2 class="text-ze-teal fw-light text-center">Tradição que cuida, confiança que fica</h2>

<section class="ze-video-section py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="video-container shadow-lg rounded-4 overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/TeqqLlJR9Cw?autoplay=1&mute=1&loop=1&playlist=TeqqLlJR9Cw" 
                        frameborder="0" 
                        allow="autoplay; encrypted-media" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ze-content py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <h2 class="text-ze-blue fw-bold mb-4">Sempre uma perto de você</h2>
                <div class="ze-description text-muted">
                    <p>No coração de cada comunidade, existe alguém em quem todos confiam.</p>
                    <p>Alguém que conhece os vizinhos pelo nome, entende suas necessidades e está sempre pronto para estender a mão.</p>
                    <p>Foi com esse espírito de vizinhança que nasceu a <strong>Farmácias Zé do Bairro</strong>.</p>
                    <p>Como parte integrante do Grupo Pimentel, trazemos em nosso DNA a solidez de um dos maiores nomes do setor farmacêutico, aliada ao atendimento humanizado que só quem é "de casa" consegue oferecer.</p>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="ze-inner-img shadow-lg rounded-4 overflow-hidden">
                    <img src="" 
                        alt="Interior da Farmácia Zé do Bairro" 
                        class="img-fluid w-100 hover-zoom">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ze-location py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold text-ze-blue mb-4" style="color: #ed005d;">Venha nos visitar</h2>
        <p class="mb-4 text-muted">Av. Hermes Fontes, 1707 - Grageru, Aracaju - SE, 49026-020</p>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="ze-map-wrapper shadow-lg rounded-4 overflow-hidden border">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=place/Farm%C3%A1cias+Z%C3%A9+do+Bairro/@-10.9349689,-37.0632649,17z/data=!4m14!1m7!3m6!1s0x71ab3be18823a41:0x51b8472498dfc705!2sFarm%C3%A1cias+Z%C3%A9+do+Bairro!8m2!3d-10.9337522!4d-37.0619025!16s%2Fg%2F11c5h2b9qz!3m5!1s0x71ab3be18823a41:0x51b8472498dfc705!8m2!3d-10.9337522!4d-37.0619025!16s%2Fg%2F11c5h2b9qz?entry=ttu&g_ep=EgoyMDI2MDMxOC4xIKXMDSoASAFQAw%3D%3D" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <div class="mt-4">
                    <a href="https://maps.app.goo.gl/qfHEyZEEiuMKaiW77" 
                       target="_blank" 
                       class="btn btn-lg px-5 py-3 rounded-pill shadow"
                       style="background-color: #ed005d; color: white; border: none; font-weight: bold;">
                        <i class="bi bi-geo-alt-fill me-2"></i>Como chegar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    :root {
    --ze-blue: #DB4040;
    --ze-teal: #DB4040;
    --ze-red: #DB4040;
}

.ze-header {
    background-color: #DB4040;
}

.text-ze-blue { color: var(--ze-blue); }
.text-ze-teal { color: var(--ze-teal); }

/* Ajuste do Vídeo */
.video-container {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    height: 0;
}

.video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* Tipografia */
.ze-description p {
    font-size: 1.1rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    text-align: justify;
}

.ze-inner-img img {
    transition: transform 0.3s ease;
}

.ze-inner-img:hover img {
    transform: scale(1.02);
}

/* Responsividade */
@media (max-width: 768px) {
    .ze-header h1 { font-size: 1.8rem; }
    .ze-header h2 { font-size: 1.3rem; }
}

.ze-map-wrapper {
    transition: box-shadow 0.3s ease;
}

.ze-map-wrapper:hover {
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
}

.btn-primary {
    background-color: #005a84; /* Azul da marca */
    border: none;
}

.btn-primary:hover {
    background-color: #004566;
}
</style>

<?php include 'components/footer.php'; ?>