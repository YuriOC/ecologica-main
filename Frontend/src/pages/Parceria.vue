<template>
    <!-- Banner principal da página com título, subtítulo e imagem -->
    <div>
        <Banner text="Seja nosso parceiro"
            subtitle="Enquanto você cuida dos seus clientes, nós cuidamos do seu descarte."
            imageSrc="/uploads/5.png" />
    </div>

    <!-- Seção de navegação e introdução -->
    <div id="parceria-section">
        <!-- Caminho de navegação (breadcrumb) -->
        <span><router-link to="/">Ecológica</router-link> > Parceria</span>
        <div id="id-column" class="column">
            <!-- Título principal da seção -->
            <div class="title">
                <h1>Traga seu projeto para a Ecológica!</h1>
                <span><router-link to="/contato">Entre em contato ></router-link>
                </span>
            </div>
            <!-- Texto explicativo sobre a parceria -->
            <div class="text">
                <p>A Ecológica tem como objetivo
                    ser seu parceiro ideal. Entre em
                    contato para conhecer um
                    pouco mais sobre nossos
                    serviços de coletas</p>
            </div>
        </div>
    </div>

    <!-- Seção de banners de parceiros (aparentemente vazia) -->
    <div class="partner_banners img_8">
    </div>

    <!-- Seção de cartões de informações sobre a parceria -->
    <div class="partner-cards">
        <!-- Primeiro cartão: Sincronia -->
        <div class="partner-img">
            <img src="/uploads/6.png">
        </div>
        <div class="partner-text">
            <h1>SINCRONIA</h1>
            <p>Todas as nossas rotas são planejadas
                através de sistemas informatizados,
                permitindo uma previsibilidade de dias de coleta.</p>
        </div>

        <!-- Segundo cartão: Soluções Humanas -->
        <div class="partner-img">
            <img src="/uploads/7.png">
        </div>
        <div class="partner-text">
            <h1>SOLUÇÕES HUMANAS</h1>
            <p>Cada cliente é tratado como um projeto único, o
                que possibilita conforto, total transparência e
                rastreabilidade nos serviços prestados.</p>
        </div>

        <!-- Terceiro cartão: Ideias Inovadoras -->
        <div class="partner-img">
            <img src="/uploads/8.png">
        </div>
        <div class="partner-text">
            <h1>IDEIAS INOVADORAS</h1>
            <p>Conte com a segurança e inovação
                de um grupo com mais de 15 anos de excelência.
            </p>
            <!-- Botão para entrar em contato -->
            <router-link to="/contato" class="button-style">Entrar em contato</router-link>
        </div>
    </div>

    <!-- Seção final com logos de parceiros e botão de orçamento -->
    <div class="section">
        <!-- Título da seção -->
        <div class="text">
            <h1>Junte-se ao time de nossos parceiros</h1>
        </div>
        <!-- Logos dos parceiros -->
        <div class="partner-logos">
            <div><img src="/uploads/caminhao.png"></div>
            <div><img src="/uploads/caminhao.png"></div>
            <div><img src="/uploads/caminhao.png"></div>
            <div><img src="/uploads/caminhao.png"></div>
            <div><img src="/uploads/caminhao.png"></div>
            <div><img src="/uploads/caminhao.png"></div>
        </div>
        <!-- Botão para solicitar orçamento -->
        <div class="partner-logos-button-config"><router-link to="/contato" class="button-style">Solicite
                Orçamento</router-link></div>
    </div>
</template>

<script>
import Banner from '../components/Banner.vue';

export default {
    name: "Parceria",
    components: {
        Banner
    }
};
</script>

<style scoped>
/* Estilos específicos para o componente Parceria */
#parceria-section {
    padding: 30px 30px 30px 62px;
}

#parceria-section a{
    color: var(--color3);
}
</style>