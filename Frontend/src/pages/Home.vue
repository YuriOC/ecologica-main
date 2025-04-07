<template>
    <!-- Seção do banner principal com texto e imagem -->
    <div>
        <Banner text="Ecológica - cuidamos dos seus resíduos com eficiência e responsabilidade"
            imageSrc="../../public/uploads/home1.png" />
    </div>

    <!-- Seção com título e descrição sobre a empresa -->
    <div class="section">
        <div id="id-column" class="column">
            <div class="title">
                <h1>Estamos com você em todas as etapas!</h1>
                <span>
                    <RouterLink to="/quemsomos">Saiba mais ></RouterLink>
                </span>
            </div>
            <div class="text">
                <p>Somos licenciados pelo INEA e pelo
                    município de Duque de Caxias, com
                    autorização para coleta, transporte e
                    armazenamento temporário de resíduos
                    de serviço de saúde dos grupos A, B e E
                    no estado do Rio de Janeiro. Além disso,
                    somos credenciados junto aos órgãos
                    fiscalizadores competentes, como
                    Ibama, Comlurb/RJ, Polícia Federal,
                    entre outros.
                </p>
            </div>
        </div>
    </div>

    <!-- Seção com uma imagem destacada -->
    <div class="card_2">
        <img src="../../public/uploads/9.png">
    </div>

    <!-- Seção destacando os diferenciais da empresa -->
    <div class="section">
        <div class="column">
            <div class="text2">
                <h1>O que nos destaca?</h1>
                <p> A Ecológica se destaca pelo atendimento humanizado, conformidade legal rigorosa e serviços ágeis e
                    confiáveis. Com frota própria, equipe qualificada e presença em 32 municípios do Rio de Janeiro,
                    oferece soluções completas para a gestão de resíduos, sempre priorizando a satisfação do cliente e a
                    excelência no setor.</p>
            </div>
            <div class="cards">
                <!-- Cartões com informações sobre os números e conquistas da empresa -->
                <div class="cards-config">
                    <span style="background-image: url(../../public/uploads/caminhao.PNG);"></span>
                    <h1>+20k</h1>
                    <p>coletas realizadas</p>
                </div>
                <div class="cards-config">
                    <span style="background-image: url(../../public/uploads/icon3.PNG);"></span>
                    <h1>+15</h1>
                    <p>anos de atuação</p>
                </div>
                <div class="cards-config">
                    <span style="background-image: url(../../public/uploads/icon4.PNG);"></span>
                    <h1>+30</h1>
                    <p>municípios do Rio</p>
                </div>
                <div class="cards-config">
                    <span style="background-image: url(../../public/uploads/icon6.PNG)"></span>
                    <h1>+1.5k</h1>
                    <p>de parceiros</p>
                </div>
                <div class="cards-config">
                    <span style="background-image: url(../../public/uploads/icon2.PNG)"></span>
                    <h1>100%</h1>
                    <p>das licenças do RJ</p>
                </div>
                <div class="cards-config">
                    <span style="background-image: url(../../public/uploads/icon5.PNG)"></span>
                    <h1>+60k</h1>
                    <p>toneladas ao ano</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção com imagens adicionais -->
    <div class="card">
        <img src="../../public/uploads/pag3-2.png">
        <img src="../../public/uploads/pag3.png">
        <!-- Comentário sobre o card-text (desativado no momento) -->
        <!--
        <div class="card-text">
            <h2>Título do Card</h2>
            <p>Este é um texto descritivo que acompanha a imagem. Ele deve ser informativo e
            conciso, proporcionando uma boa experiência ao usuário.</p>
        </div>
        -->
    </div>

    <!-- Seção explicando o processo da empresa -->
    <div class="section">
        <div class="home3">
            <div class="home3-title">
                <h1>Conheça nosso processo</h1>
            </div>
            <div id="home-cards" class="home3-cards">
                <!-- Etapas do processo com ícones e descrições -->
                <div class="home3-cards-config">
                    <img src="../../public/uploads/icon3.PNG">
                    <p>Informamos as datas de coleta com antecedência</p>
                </div>
                <div class="arrow">
                </div>
                <div class="home3-cards-config">
                    <img src="../../public/uploads/caminhao.PNG">
                    <p>Coletamos e garantimos a destinação final adequada</p>
                </div>
                <div class="arrow"></div>
                <div class="home3-cards-config">
                    <img src="../../public/uploads/icon2.PNG">
                    <p>Fornecemos os documentos referente ao transporte</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { RouterLink, RouterView } from 'vue-router';
import Banner from '../components/Banner.vue';

export default {
    name: "Home",
    components: {
        Banner
    }
};
</script>

<style scoped>
/* Estilo para a seção de cards com imagens */
.card {
    background-color: var(--color3);
    display: flex;
    align-items: center;
    padding: 10px;
    justify-content: center;
    color: white;
    gap: 9px;
}

/* Estilo para a seção de imagem destacada */
.card_2 {
    background-color: var(--color3);
    display: flex;
    align-items: center;
    padding: 0px;
    justify-content: center;
    color: white;
    gap: 9px;
}

.card_2 img {
    width: 100%;
    max-width: 100%;
    height: auto;
    background-repeat: no-repeat;
    background-size: contain;
    border-radius: 0px;
}

/* Estilo para imagens dentro da seção de cards */
.card img {
    width: 100%;
    max-width: 50%;
    height: auto;
    background-repeat: no-repeat;
    background-size: contain;
    border-radius: 10px;
}

/* Estilo para o texto dentro dos cards */
.card-text {
    margin-left: 20px;
    flex: 1;
    min-width: 250px;
    text-align: center;
}

.card-text h2 {
    margin: 0;
}

.card-text p {
    margin-top: 10px;
}
</style>
