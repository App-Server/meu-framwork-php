<section class="video-banner">
    <div class="video-foreground">
        <iframe 
            src="https://www.youtube.com/embed/mY0SW2EkODI?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=mY0SW2EkODI&mute=1" 
            frameborder="0" 
            allow="autoplay; encrypted-media" 
            allowfullscreen>
        </iframe>
    </div>
    
    <div class="video-content d-flex align-items-center justify-content-center">
        <div class="text-center text-white">
        </div>
    </div>
</section>

<style>
    .video-banner {
    position: relative;
    background-color: #000;
    height: 100vh; /* Ocupa 100% da altura da tela */
    width: 100%;
    overflow: hidden;
}

.video-foreground,
.video-banner iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none; /* Impede que o usuário clique no vídeo */
}

/* Ajuste para cobrir a tela como um "background-size: cover" */
@media (min-aspect-ratio: 16/9) {
  .video-foreground iframe { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  .video-foreground iframe { width: 300%; left: -100%; }
}

.video-content {
    position: relative;
    z-index: 2; /* Garante que o texto fique acima do vídeo */
    height: 100%;
    background: rgba(0, 0, 0, 0.4); /* Overlay escura para ler o texto melhor */
}
</style>