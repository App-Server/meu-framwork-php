<section class="brand-values py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="brand-title fw-bold">VALORES DA MARCA</h2>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="brand-text">
                    <p>No Grupo Pimentel, acreditamos nos valores de Deus, família, lealdade, ética e caráter, todos os dias em que saímos de nossas casas.</p>
                    <p>Nós trabalhamos para atender os nossos clientes com o mix de produto mais completo e levando a nossa melhor proposta comercial para atender sempre sua expectativa, procurando entregar o melhor que a nossa empresa tem a oferecer. Esse é o sentimento dos colaboradores que são comprometidos com o sucesso do Grupo.</p>
                </div>
            </div>

            <div class="col-md-5 text-end text-md-center">
                <div class="values-list">
                    <span class="value-item">Caráter</span>
                    <span class="value-item">Lealdade</span>
                    <span class="value-item">Trabalho</span>
                    <span class="value-item">Família</span>
                    <span class="value-item">Deus</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Estilo da Seção de Valores */
.brand-values {
    color: #002d5b; /* Azul escuro padrão do grupo */
    font-family: sans-serif;
}

.brand-title {
    font-size: 2.5rem;
    letter-spacing: 1px;
    margin-bottom: 40px;
}

.brand-text p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    text-align: justify;
    opacity: 0.9;
}

/* Lista da Direita */
.values-list {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.value-item {
    font-size: 2.2rem;
    font-weight: 800;
    line-height: 1.1;
    display: block;
}

/* Ajuste Responsivo para telas pequenas */
@media (max-width: 768px) {
    .brand-title {
        font-size: 1.8rem;
    }
    .value-item {
        font-size: 1.8rem;
        text-align: center;
        margin-top: 20px;
    }
    .brand-text p {
        text-align: left;
    }
}
</style>