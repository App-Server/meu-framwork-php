<section class="pimentel-group py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="text-white fw-bold mb-4">Quem Somos</h2>
                <p class="text-white opacity-75 lh-lg">
                    É um grupo que nasceu e se consolidou no setor farmacêutico e que hoje, pela sua cultura e 
                    valores, tem a força e a capacidade de ser algo maior. O Grupo Pimentel nasce para juntar 
                    todas as empresas do setor farmacêutico e representar todas as novas frentes que estão 
                    nascendo e nascerão, mostrando para toda a empresa e para o mercado, a credibilidade e a 
                    solidez de um grupo forte.
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center mb-5">
                <h3 class="text-white fw-bold">Empresas que compõem o Grupo Pimentel</h3>
            </div>
            
            <div class="row g-3 justify-content-center">
                <?php 
                // Array para facilitar a manutenção futura
                $empresas = [
                    ['img' => 'logo-dpa.png', 'link' => '#'],
                    ['img' => 'promedhlojabranca.png', 'link' => '#'],
                    ['img' => 'LOGO MARCAD ZE DO BAIRRO BRANCA 2.png', 'link' => 'ze-do-bairro'],
                    ['img' => 'promedhdistribuidorabranca 1.png', 'link' => '#'],
                    ['img' => 'ultrapopularbranca 2.png', 'link' => '#'],
                ];

                foreach($empresas as $empresa): ?>
                <div class="col-6 col-md-4 col-lg-2-4"> <div class="company-card">
                        <div class="company-logo-box">
                            <img src="assets/<?= $empresa['img'] ?>" alt="Logo Empresa" class="img-fluid">
                        </div>
                        <a href="<?= $empresa['link'] ?>" class="btn-saiba-mais">Saiba mais</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<style>
    /* Cor de fundo principal baseada na imagem */
.pimentel-group {
    background-color: #002d5b; 
}

/* Container dos logos com bordas arredondadas */
.company-card {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.company-logo-box {
    background-color: #0076a8; /* Azul claro dos cards */
    aspect-ratio: 1 / 1;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    border-radius: 12px;
    transition: transform 0.3s ease;
}

.company-logo-box img {
    max-height: 80%;
    filter: brightness(0) invert(1); /* Deixa as logos brancas se forem pretas */
}

/* Botão Saiba Mais */
.btn-saiba-mais {
    background-color: #0076a8;
    color: white;
    text-decoration: none;
    text-align: center;
    padding: 8px;
    border-radius: 8px;
    font-size: 0.9rem;
    font-weight: 500;
    transition: background 0.3s;
}

.btn-saiba-mais:hover {
    background-color: #005f87;
    color: white;
}

/* Ajuste para 5 colunas no desktop */
@media (min-width: 992px) {
    .col-lg-2-4 {
        flex: 0 0 auto;
        width: 20%;
    }
}
</style>