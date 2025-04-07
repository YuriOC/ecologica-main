<template>
    <div class="footer">
        <div class="footer-info">
            <h1>Fale conosco</h1>
            <p><a href="mailto:yuriuinke@gmail.com">E-mail: eco@ecologicacoletarj.com.br</a></p>
            <p><a href="https://api.whatsapp.com/send?phone=5521997217458">Telefone: (21) 99721-7458</a></p>
        </div>
        <div class="footer-social">
            <h1>Siga nossas redes:</h1>
            <div class="footer-cards">
                <a href="https://www.instagram.com/ecologicacoletarj?igsh=NHVmbmhuazh1MHUx" target="_blank"
                    rel="noopener noreferrer">
                    <span><i class="fa-brands fa-instagram fa-2xl" style="color: #013b01;"></i></span>
                </a>
                <a href="https://www.facebook.com/share/1UgXYd9Stx/?mibextid=wwXIfr" target="_blank"
                    rel="noopener noreferrer">
                    <span><i class="fa-brands fa-facebook-f" style="color: #0b4024;"></i></span>
                </a>
                <a href="https://api.whatsapp.com/send?phone=5521997217458" target="_blank" rel="noopener noreferrer">
                    <span><i class="fa-brands fa-whatsapp" style="color: #013b01;"></i></span>
                </a>
            </div>
        </div>
        <div class="footer-logo">
            <img src="../../public/uploads/logoperfeita-branco.png">
        </div>
    </div>
</template>

<script>
export default {
    name: 'Footer',
};
</script>

<style scoped>
.footer {
    display: flex;
    flex-direction: column;
    width: 100%;
    max-width: 100%;
    background-color: var(--color3);
    color: var(--color4);
    padding: 1em 3em;
    box-sizing: border-box;
}

.footer-info h1,
.footer-social h1 {
    font-weight: 500;
}

.footer-info p {
    padding-bottom: 0.5em;
    font-size: 1.1em;
}

.footer-info a {
    text-decoration: none;
    color: white;
}

.footer-social {
    padding-top: 2em;
}

.footer-cards {
    display: flex;
    flex-direction: row;
    width: 100%;
}

.footer-cards span {
    display: flex;
    background-color: var(--color4);
    border-radius: 25%;
    width: 50px;
    height: 50px;
    justify-content: center;
    align-items: center;
    margin: 0 1em 0 0;
}

.footer-cards a {
    text-decoration: none;
}

.footer-cards span>i {
    font-size: 1.5em;
}

.footer-logo {
    margin-top: 1.5em;
}

@media (min-width: 799px) {
    .footer {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-info {
        width: 50%;
        border-right: 4px dotted white;
        box-sizing: border-box;
    }

    .footer-social {
        width: 50%;
        padding-top: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .footer-cards {
        justify-content: center;
    }

    .footer-logo {
        width: 30%;
    }

    .footer-cards span {
        width: 75px;
        height: 75px;
    }

    .footer-cards span>i {
        font-size: 2em;
    }
}
</style>