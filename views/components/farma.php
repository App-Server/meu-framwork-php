<section class="excelencia-farma py-5">
    <div class="container text-center text-white">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9">
                <h2 class="fw-bold mb-1">Grupo Pimentel</h2>
                <h3 class="fw-light mb-4">Excelência no Farma</h3>
                
                <p class="mb-4 opacity-90">Nossa estrutura é desenhada para garantir que a saúde chegue com agilidade, segurança e preço justo.</p>
                
                <p class="opacity-90">Nossa força logística reside na eficiência da DPA e da Promédh. Operamos com tecnologia de ponta para abastecer o mercado com agilidade, garantindo que o mix de produtos mais completo do setor esteja disponível.</p>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <div class="custom-shape-img" style="background-image: url('https://images.unsplash.com/photo-1586024486164-ce9b3d87e09f?q=80&w=600');"></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="custom-shape-img" style="background-image: url('https://images.unsplash.com/photo-1576602976047-174e57a47881?q=80&w=600');"></div>
            </div>
            <div class="col-6 col-md-3">
                <div class="custom-shape-img" style="background-image: url('https://images.unsplash.com/photo-1631549916768-4119b2e5f926?q=80&w=600');"></div>
            </div>
            <div class="col-6 col-md-3">
            <div class="custom-shape-img" 
                style="background-image: url('https://images.pexels.com/photos/159211/headache-pain-pills-medication-159211.jpeg?auto=compress&cs=tinysrgb&w=600'); 
                        background-color: #005a84;">
            </div>
            </div>
        </div>
    </div>
</section>

<style>
    .excelencia-farma {
    background-color: #0076a8; /* Tom de azul da imagem */
}

.excelencia-farma h2 {
    font-size: 2rem;
}

.excelencia-farma h3 {
    font-size: 2.2rem;
}

/* O formato especial da imagem */
.custom-shape-img {
    width: 100%;
    aspect-ratio: 2 / 3.5; /* Mantém a proporção vertical */
    background-size: cover;
    background-position: center;
    
    /* Curvatura específica: superior-esquerda, superior-direita, inferior-direita, inferior-esquerda */
    border-radius: 100px 0 100px 0; 
    
    transition: transform 0.3s ease, border-radius 0.3s ease;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

/* Efeito interativo opcional */
.custom-shape-img:hover {
    transform: scale(1.05);
    border-radius: 0 100px 0 100px;
}

/* Ajuste para telas pequenas */
@media (max-width: 768px) {
    .custom-shape-img {
        border-radius: 60px 0 60px 0;
    }
}
</style>