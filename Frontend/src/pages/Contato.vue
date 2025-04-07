<template>
  <div class="section">
    <!-- Seção de texto inicial com informações sobre o contato -->
    <div class="text2">
      <h1>Entre em contato conosco</h1>
      <h3>Preencha o formulário e receba seu orçamento por e-mail</h3>
      <p>Atualmente, atendemos 32 municípios do Rio de Janeiro nos segmentos de farmácias, clínicas, consultórios,
        veterinárias, hospitais, distribuidores de produtos hospitalares, salões de beleza e estúdios de
        tatuagens.</p>
    </div>
    <!-- Seção do formulário de contato -->
    <div class="column">
      <form @submit.prevent="sendForm">
        <div class="form-div">
          <!-- Campo para o nome -->
          <div class="forms">
            <input type="text" v-model="formData.name" placeholder="" required aria-required="true">
            <label for="name">Nome</label>
          </div>
          <!-- Campo para o email -->
          <div class="forms">
            <input type="email" v-model="formData.email" placeholder="" required aria-required="true">
            <label for="email">Email</label>
          </div>
          <!-- Campo para o CEP com formatação -->
          <div class="forms">
            <input type="text" v-model="formData.cep" @input="formatCEP" placeholder="" maxlength="9"
              required aria-required="true">
            <label for="cep">CEP</label>
          </div>
          <!-- Campo para o tipo de estabelecimento -->
          <div class="forms">
            <input type="text" v-model="formData.typeE" placeholder="" required aria-required="true">
            <label for="typeE">Tipo de Estabelecimento</label>
          </div>
          <!-- Campo para o tipo de resíduo -->
          <div class="forms">
            <input type="text" v-model="formData.typeR" placeholder="" required aria-required="true">
            <label for="typeR">Tipo de Resíduo</label>
          </div>
          <!-- Campo para a mensagem -->
          <div class="forms">
            <textarea class="msg-form" type="text" v-model="formData.message" placeholder="" required
              aria-required="true"></textarea>
            <label for="message">Descrição do seu pedido
            </label>
          </div>
          <!-- Botão de envio com estado de carregamento -->
          <div class="input">
            <button class="button-style input" type="submit" id="submit" :disabled="isLoading">
              <span v-if="!isLoading">Enviar Formulário</span>
              <div v-else class="spinner"></div>
            </button>
          </div>
        </div>
      </form>
      <!-- Exibição de status do envio do formulário -->
      <div style="text-align: center;" v-if="statusMessage" :class="statusClass">{{ statusMessage }}</div>
    </div>
    <!-- Seção de cartões com informações adicionais -->
    <div class="contact-row">
      <div class="contact-cards">
        <img src="../../public/uploads/icon4.PNG">
        <h3>+30</h3>
        <p>Municipios do RJ</p>
      </div>
      <div class="vertical-bar"></div>
      <div class="contact-cards">
        <img src="../../public/uploads/icon3.PNG">
        <h3>+15</h3>
        <p>Anos de atuação</p>
      </div>
      <div class="vertical-bar"></div>
      <div class="contact-cards">
        <img src="../../public/uploads/caminhao.PNG">
        <h3>+10k</h3>
        <p>Coletas realizadas</p>
      </div>
    </div>
  </div>
  <!-- Seção adicional com informações sobre os serviços -->
  <div id="contact-section" class="section">
    <div class="contact-text">
      <h2>Gestão de Resíduos sem complicações:</h2>
      <p>Toda empresa - seja grande ou pequena - precisa de um serviço de coleta de resíduos confiável. Solicite
        um orçamento gratuito hoje mesmo e feche o contrato de forma rápida e fácil, 100% online. Encontre o
        serviço de gestão de resíduos perfeito para as suas necessidades em poucos minutos.</p>
    </div>
    <div class="contact-text">
      <h2>Por que escolher a Ecológica?</h2>
      <p>Nossa missão é construir relações de confiança com todos os nossos clientes. Trabalhamos lado a lado para
        oferecer serviços personalizados que atendam às necessidades específicas de cada coleta</p>
    </div>
  </div>
</template>
<script>
export default {
  data() {
  return {
    // Dados do formulário
    formData: { name: '', email: '', message: '', cep: '', typeE: '', typeR: '' },
    // Mensagem de status do envio
    statusMessage: '',
    // Classe CSS para o status (sucesso ou erro)
    statusClass: '',
    // Estado de carregamento do botão
    isLoading: false
  };
  },
  methods: {
  // Método para formatar o campo de CEP
  formatCEP(event) {
    // Remove todos os caracteres não numéricos
    let cep = event.target.value.replace(/\D/g, '');

    // Limita a 8 dígitos
    if (cep.length > 8) {
    cep = cep.slice(0, 8);
    }

    // Adiciona o hífen após 5 dígitos
    if (cep.length > 5) {
    cep = cep.slice(0, 5) + '-' + cep.slice(5);
    }

    // Atualiza o valor do campo
    this.formData.cep = cep;
  },
  // Método para enviar o formulário
  async sendForm() {
    this.isLoading = true;
    try {
    console.log('Enviando dados:', this.formData);
    // Envia os dados para o backend PHP
    const response = await fetch('http://localhost/ecologica/index.php', {
      method: 'POST',
      headers: {
      'Content-Type': 'application/json'
      },
      body: JSON.stringify(this.formData)
    });

    console.log('Status da resposta:', response.status);
    const responseText = await response.text();
    console.log('Resposta bruta:', responseText);

    let data;
    try {
      data = JSON.parse(responseText);
    } catch (e) {
      console.error('Erro ao fazer parse da resposta:', e);
      throw new Error('Resposta inválida do servidor');
    }

    console.log('Dados parseados:', data);

    // Exibe mensagem de sucesso ou erro
    if (response.ok) {
      this.statusMessage = data.message;
      this.statusClass = 'success';
      this.formData = { name: '', email: '', message: '', cep: '', typeE: '', typeR: '' };  // Limpa o formulário
    } else {
      this.statusMessage = data.message || 'Erro ao enviar email. Por favor, tente novamente.';
      this.statusClass = 'error';
    }
    } catch (error) {
    console.error('Erro:', error);
    this.statusMessage = 'Erro ao enviar email. Por favor, tente novamente mais tarde.';
    this.statusClass = 'error';
    } finally {
    this.isLoading = false;
    }
  }
  }
};
</script>

<style scoped>
/* Estilo para mensagens de sucesso */
.success {
  color: green;
  margin-top: 10px;
}

/* Estilo para mensagens de erro */
.error {
  color: red;
  margin-top: 10px;
}

/* Estilo para o spinner de carregamento */
.spinner {
  width: 20px;
  height: 20px;
  border: 3px solid #ffffff;
  border-top: 3px solid transparent;
  border-radius: 50%;
  animation: spin 1s linear infinite;
  margin: 0 auto;
}

/* Animação do spinner */
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Estilo para botão desabilitado */
button:disabled {
  opacity: 0.7;
  cursor: not-allowed;
}
</style>
