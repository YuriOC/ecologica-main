    <template>
        <div class="menu">
            <div class="menu-logo"><router-link to="/"><img
                        src="/uploads/logoperfeita-removebg-preview.png"></router-link></div>
            <div class="menu-pages">
                <div :class="['menu-pages-item', { active: $route.path === '/' }]">
                    <router-link to="/">Home</router-link>
                </div>
                <div :class="['menu-pages-item', { active: $route.path === '/quemsomos' }]">
                    <router-link to="/quemsomos">Quem Somos</router-link>
                </div>
                <div :class="['menu-pages-item', { active: $route.path === '/parceria' }]">
                    <router-link to="/parceria">Parceria</router-link>
                </div>
                <div :class="['menu-pages-item', { active: $route.path === '/contato' }]">
                    <router-link to="/contato">Contato</router-link>
                </div>
            </div>
            <div class="menu-content"><router-link to="/contato" class="button-link"><strong>SOLICITAR ORÇAMENTO</strong></router-link></div>
        </div>
    </template>

    <script>
    export default {
        name: 'Header',
    };

    </script>

    <style scoped>
    .menu {
        display: flex;
        position: sticky;
        top: 0;
        width: 100%;
        height: 8vh;
        align-items: center;
        justify-content: space-between;
        background-color: var(--color4);
        z-index: 999;
        box-shadow: 0 8px 4px 0 rgba(0, 0, 0, .07), inset 0 2px 4px 0 rgba(0, 0, 0, .07);
    }

    .menu-logo {
        margin-left: 25px;
    }

    .menu-content {
        margin: 25px;
    }

    .button-link {
        border-radius: 50px;
        background-color: var(--color3);
        color: var(--color4);
        font-family: "Lexend Deca", sans-serif;
        font-size: 12px;
        padding: 7px 12px;
        border: 1px solid var(--color2);
        line-height: 2;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    @media (max-width:500px) {
        .menu-logo {
            margin: 0;
        }

        .menu-content {
            margin: 0;
        }

        .button-link {
            line-height: 1.25em;
            max-width: 11em;
        }
    }

    @media (max-width: 799px) {
        .menu-pages {
            display: none;
        }
    }

    @media (min-width: 800px) {
        .menu {
            height: 10vh;
        }

        .menu-content {
            margin: 0px 25px 0px 0px;
        }

        .button-link {
            white-space: nowrap;
        }

        .menu-pages {
            display: flex;
            justify-content: space-between;
            width: 50%;
            margin: 0px 25px;
        }

        .menu-pages-item {
            margin: 5px;
        }

        .menu-pages-item a {
            display: flex;
            position: relative;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
            margin: 0 auto;
            white-space: nowrap;
            color: var(--color5);
        }

        .menu-pages-item a::after {
            content: "";
            position: absolute;
            left: -10%;
            bottom: -10px;
            width: 120%;
            height: 2px;
            background-color: var(--color2);
            /* Usa a cor do texto */
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        .menu-pages-item a:hover::after {
            transform: scaleX(1);
        }

        .active a::after {
            transform: scaleX(1);
        }
    }
    </style>