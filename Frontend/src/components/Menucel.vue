<template>
    <div class="menu-cel">
        <ul class="menu-cel-list">
            <li><router-link to="/" class="icon-column"><i class="fa-solid fa-seedling"
                        style="color: white;"></i><strong>Home</strong></router-link></li>
            <li><router-link to="/quemsomos" class="icon-column"><i class="fa-solid fa-users" style="color: white;"></i><strong>Quem
                        Somos</strong></router-link></li>
            <li><router-link to="/parceria" class="icon-column"><i class="fa-regular fa-handshake"
                        style="color: white;"></i><strong>Parceria</strong></router-link></li>
            <li><router-link to="/contato" class="icon-column"><i class="fa-solid fa-headset"
                        style="color: white;"></i><strong>Contato</strong></router-link></li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Menucel',
};
</script>

<style scoped>
.menu-cel {
    background-color: var(--color3);
    color: var(--color4);
    width: 100%;
    height: 5em;
    position: fixed;
    bottom: 0;
    left: 0;
    display: flex;
    flex-direction: column;
}

.menu-cel a {
    text-decoration: none;
    color: var(--color4);
    text-align: center;
}

.menu-cel-list {
    display: flex;
    flex-direction: row;
    color: var(--color4);
    width: 100%;
    height: 100%;
    padding: 0px;
    max-width: 100%;
    font-size: 1em;
}

.menu-cel-list li {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 25%;
    height: 100%;
    padding: 0px 10px 0px 10px;
}

.icon-column {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

i {
    padding-bottom: 3px;
}

@media (min-width: 799px) {
    .menu-cel {
        display: none;
    }
}


</style>