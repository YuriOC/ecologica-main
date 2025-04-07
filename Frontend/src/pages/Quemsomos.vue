<template>
    <!-- Banner principal com título, subtítulo e imagem -->
    <div>
        <Banner text="Sobre a Ecológica" subtitle="com 15 anos de experiência, descubra o que nos faz continuar aqui"
            imageSrc="../../public/uploads/quemsomos1.png" />
    </div>

    <!-- Seção de navegação e introdução -->
    <div class="section">
        <span><router-link to="/">Ecológica</router-link> > Quem somos</span>
        <div id="id-column" class="column">
            <div class="title">
                <h1>Eficiência + Transparência + Qualidade</h1>
                <span><router-link to="/parceria">Veja as vantagens ></router-link>
                </span>
            </div>
            <div class="text">
                <p>A Ecológica nasceu em 2009 com objetivo de prestar um serviço de excelência no
                    setor de coleta de resíduos, proporcionando um atendimento ao cliente mais
                    humanizado. Todos os serviços são prestados com frota própria e renovada, além de
                    contarmos com sistema informatizado e equipe altamente conhecedora da
                    legislação e que valoriza a satisfação dos nossos clientes.</p>
            </div>
        </div>
    </div>

    <!-- Seção de segmentos atendidos -->
    <div class="somos_lojas">
        <div class="somos_lojas_config">
            <!-- Segmento: Clínicas e Consultórios -->
            <div class="somos_lojas_elements">
                <img src="../../public/uploads/clinicas2.png" alt="">
                <span>Clínicas e Consultórios</span>
            </div>
            <!-- Segmento: Farmácias e Distribuidoras -->
            <div class="somos_lojas_elements">
                <img src="../../public/uploads/farmacia2.png" alt="">
                <span>Farmácias e Distribuidoras</span>
            </div>
            <!-- Segmento: Salões de Beleza -->
            <div class="somos_lojas_elements">
                <img src="../../public/uploads/saloes2.png" alt="">
                <span>Salões de Beleza</span>
            </div>
            <!-- Segmento: Veterinárias -->
            <div class="somos_lojas_elements">
                <img src="../../public/uploads/veterinaria2.png" alt="">
                <span>Veterinárias</span>
            </div>
        </div>
    </div>

    <!-- Seção de licenças e certificações -->
    <div class="section">
        <div class="column">
            <div class="text2">
                <h1>Nossas Licenças</h1>
                <p>Somos licenciados pelo INEA e pelo município de Duque de Caxias, com autorização para coleta,
                    transporte e armazenamento temporário de resíduos de serviço de saúde dos grupos A, B e E no
                    estado do Rio de Janeiro. Além disso, somos credenciados junto aos órgãos fiscalizadores
                    competentes, como Ibama, Comlurb/RJ, Polícia Federal, entre outros.</p>
            </div>
            <div class="cards">
                <!-- Licença: Resíduos infectantes -->
                <div class="cards-config">
                    <img src="../../public/uploads/SímboloResiduos.PNG">
                    <p>Resíduos infectantes</p>
                </div>
                <!-- Licença: Resíduos Químicos -->
                <div class="cards-config">
                    <img src="../../public/uploads/SímboloResiduos2.PNG">
                    <p>Resíduos Químicos</p>
                </div>
                <!-- Licença: Resíduos Perfurocortantes -->
                <div class="cards-config">
                    <img src="../../public/uploads/SímboloResiduos.PNG">
                    <p>Resíduos Perfurocortantes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner responsivo com imagem e texto -->
    <div class="responsive-banner">
        <picture>
            <source srcset="../../public/uploads/caminhao1920.png" media="(min-width: 1200px)">
            <source srcset="../../public/uploads/caminhao1200.png" media="(min-width: 992px)">
            <source srcset="../../public/uploads/caminhao992.png" media="(min-width: 768px)">
            <source srcset="../../public/uploads/caminhao768.png" media="(min-width: 576px)">
            <img style="width: 100%; height: auto;" src="../../public/uploads/caminhao576.png" alt="Responsive banner">
        </picture>
        <div class="responsive-text">
            Conte com a Ecológica para uma coleta segura, organizada e sem preocupações.
        </div>
    </div>

    <!-- Banner responsivo com citação e imagem -->
    <div class="responsive-banner">
        <picture class="amigosbanner">
            <source srcset="../../public/uploads/amigos1920.png" media="(min-width: 1200px)">
            <source srcset="../../public/uploads/amigos1200.png" media="(min-width: 992px)">
            <source srcset="../../public/uploads/amigos992.png" media="(min-width: 768px)">
            <source srcset="../../public/uploads/amigos768.png" media="(min-width: 576px)">
            <img style="width: 100%; height: auto;" src="../../public/uploads/amigos576.png" alt="Responsive banner">
        </picture>
        <div class="amigostext">
            <h1><i class="fa-solid fa-quote-left fa-2xl" style="color: #ffffff;"></i></h1>
            <p>Nosso objetivo é seguir sendo o seu parceiro ideal, com transparência, qualidade e eficácia do nosso trabalho </p>
        </div>
    </div>

    <!-- Banner vazio para possível uso futuro -->
    <div class="banner-teste">
    </div>
</template>

<script>
import Banner from '../components/Banner.vue';

export default {
    name: "Quemsomos",
    components: {
        Banner
    }
};
</script>

<style scoped>
/* Estilo para a seção principal */
.section {
    padding: 5em 30px;
}

/* Estilo para a seção de segmentos atendidos */
.somos_lojas {
    background-color: var(--color3);
    width: 100%;
    box-sizing: border-box;
    padding: 5em 0;
}

.somos_lojas_config {
    display: flex;
    height: 100%;
    gap: 1em;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-content: center;
}

.somos_lojas_elements {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    max-width: 20em;
    color: var(--color4);
}

.somos_lojas_elements img {
    display: flex;
    width: 100%;
}

.somos_lojas_elements span {
    font-size: 1.2em;
    text-align: center;
    padding: 0.5em;
}
</style>